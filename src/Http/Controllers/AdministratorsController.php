<?php

namespace Charlotte\Administration\Http\Controllers;


use Charlotte\Administration\Forms\AdministratorsForm;
use Charlotte\Administration\Helpers\Administration;
use Charlotte\Administration\Helpers\AdministrationDatatable;
use Charlotte\Administration\Helpers\AdministrationField;
use Charlotte\Administration\Helpers\AdministrationForm;
use Charlotte\Administration\Http\Models\Admin;
use Charlotte\Administration\Http\Requests\StoreAdministratorRequest;
use Charlotte\Administration\Http\Requests\UpdateAdministratorRequest;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class AdministratorsController extends BaseAdministrationController {

    public function index(DataTables $dataTable) {

        $columns = ['id', 'name', 'email', 'action'];
        $table = new AdministrationDatatable($dataTable);
        $table->query(Admin::withTrashed());
        $table->columns($columns);
        $table->addColumn('action', function ($admin) {
            $fields = AdministrationField::edit(Administration::route('admins.edit', $admin->id));

            if (empty($admin->deleted_at)) {
                $fields .= AdministrationField::delete(Administration::route('admins.destroy', $admin->id));
            } else {
                $fields .= AdministrationField::restore(Administration::route('admins.destroy', $admin->id));
            }

            return $fields;
        });

        return $table->generate();
    }

    public function create() {

        $form = new AdministrationForm();
        $form->route(Administration::route('admins.store'));
        $form->form(AdministratorsForm::class);

        return $form->generate();
    }

    public function store(StoreAdministratorRequest $request) {
        $admin = new Admin();
        $admin->fill($request->validated());
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect(Administration::route('admins.index'))->withSuccess([trans('administration::admin.success_create_admin')]);
    }

    public function edit($id) {

        $admin = Admin::withTrashed()->where('id', $id)->first();

        $form = new AdministrationForm();
        $form->route(Administration::route('admins.update', $admin->id));
        $form->form(AdministratorsForm::class);
        $form->method('PUT');
        $form->model($admin);

        return $form->generate();
    }

    public function update($id, UpdateAdministratorRequest $request) {
        $admin = Admin::withTrashed()->where('id', $id)->first();
        $admin->fill($request->validated());
        $admin->save();

        return redirect(Administration::route('admins.index'))->withSuccess([trans('administration::admin.success_update_admin')]);
    }

    public function destroy($id) {
        $model = Admin::withTrashed()->where('id', $id)->first();
        if ($model->trashed()) {
            $model->restore();
        } else {
            $model->delete();
        }
        return response()->json(['ok'], 200);
    }
}