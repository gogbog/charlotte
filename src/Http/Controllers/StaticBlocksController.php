<?php

namespace Charlotte\Administration\Http\Controllers;

use App\Modules\Coins\Forms\CoinForm;
use App\Modules\Coins\Http\Requests\StoreCoinRequest;
use App\Modules\Coins\Models\Coin;
use Charlotte\Administration\Forms\StaticBlockForm;
use Charlotte\Administration\Helpers\Administration;
use Charlotte\Administration\Helpers\AdministrationDatatable;
use Charlotte\Administration\Helpers\AdministrationField;
use Charlotte\Administration\Helpers\AdministrationForm;
use Charlotte\Administration\Http\Requests\StoreStaticBlockRequest;
use Charlotte\Administration\Models\StaticBlock;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Yajra\DataTables\DataTables;

class StaticBlocksController extends BaseAdministrationController {

    public function index(DataTables $datatable) {

        $columns = [
            'id' => ['title' => trans('administration::admin.id')],
            'title' => ['title' => trans('administration::admin.title')],
            'content' => ['title' => trans('administration::admin.content')],
            'active' => ['title' => trans('administration::admin.active')],
            'action' => ['title' => trans('administration::admin.action')]
        ];

        $table = new AdministrationDatatable($datatable);
        $table->query(StaticBlock::query());
        $table->columns($columns);
        $table->addColumn('active', function ($static_block) {
            return AdministrationField::switch('active', $static_block);
        });

        $table->editColumn('content', function ($static_block) {
            $string = trim(strip_tags($static_block->content));
            $max_chars = 100;
            $string = mb_substr($string, 0, $max_chars, "utf-8");

            if (strlen($string) >= $max_chars) {
                $string = mb_substr($string, 0, $max_chars, "utf-8");
                $string .= '...';
            }

            return $string;
        });
        $table->addColumn('action', function ($static_block) {
            $action = AdministrationField::edit(Administration::route('static_blocks.edit', $static_block->id));

            $action .= AdministrationField::delete(Administration::route('static_blocks.destroy', $static_block->id));

            return $action;
        });

        $request = $datatable->getRequest();
        $table->filter(function ($query) use ($request) {
            if ($request->has('search')) {
                $query->where('title', 'LIKE', '%' . $request->search["value"] . '%');
            }
        });
        $table->rawColumns(['active', 'action']);


        Administration::setTitle(trans('administration::admin.static_blocks'));
        Breadcrumbs::register('administration', function ($breadcrumbs) {
            $breadcrumbs->parent('base');
            $breadcrumbs->push(trans('administration::admin.static_blocks'));
        });

        return $table->generate();
    }

    public function create() {
        $form = new AdministrationForm();
        $form->route(Administration::route('static_blocks.store'));
        $form->form(StaticBlockForm::class);

        Breadcrumbs::register('administration', function ($breadcrumbs) {
            $breadcrumbs->parent('base');
            $breadcrumbs->push(trans('administration::admin.static_blocks'), Administration::route('static_blocks.index'));
            $breadcrumbs->push(trans('administration::admin.create'), Administration::route('static_blocks.create'));
        });

        Administration::setTitle(trans('static_blocks::admin.article') . ' - ' . trans('administration::admin.create'));

        return $form->generate();
    }

    public function store(StoreStaticBlockRequest $request) {
        $static_block = new StaticBlock();
        $static_block->fill($request->validated());
        $static_block->save();

        return redirect(Administration::route('static_blocks.index'))->withSuccess([trans('administration::admin.success_create')]);
    }


    public function edit($id) {
        $static_block = StaticBlock::where('id', $id)->first();

        if (empty($static_block)) {
            abort(404);
        }

        $form = new AdministrationForm();
        $form->route(Administration::route('static_blocks.update', $static_block->id));
        $form->form(StaticBlockForm::class);
        $form->model($static_block);
        $form->method('PUT');

        Breadcrumbs::register('administration', function ($breadcrumbs) {
            $breadcrumbs->parent('base');
            $breadcrumbs->push(trans('administration::admin.static_blocks'), Administration::route('static_blocks.index'));
            $breadcrumbs->push(trans('administration::admin.edit'));
        });

        Administration::setTitle(trans('administration::admin.static_blocks') . ' - ' . trans('administration::admin.edit') . ' #' . $static_block->id);

        return $form->generate();
    }

    public function update(StoreStaticBlockRequest $request, $id) {

        $static_block = StaticBlock::where('id', $id)->first();

        if (empty($static_block)) {
            abort(404);
        }

        $static_block->fill($request->validated());
        $static_block->save();

        return redirect(Administration::route('static_blocks.index'))->withSuccess([trans('administration::admin.success_update')]);
    }


    public function destroy($id) {
        $static_block = StaticBlock::where('id', $id)->first();

        if (empty($static_block)) {
            abort(404);
        }

        $static_block->delete();

        return response()->json();
    }
}
