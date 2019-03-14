<?php

namespace Charlotte\Administration\Http\Controllers;


use Charlotte\Administration\Helpers\Administration;
use Illuminate\Http\Request;

class AdministrationController extends BaseAdministrationController {

    public function changeColor(Request $request) {
        $admin = Administration::getLoggedAdmin();
        $admin->dark_theme = filter_var($request->get('theme'), FILTER_VALIDATE_BOOLEAN);
        $admin->save();

        return response()->json(['success' => true]);
    }
}
