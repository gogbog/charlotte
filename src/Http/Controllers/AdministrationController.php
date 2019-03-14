<?php

namespace Charlotte\Administration\Http\Controllers;


use Charlotte\Administration\Helpers\Administration;
use Illuminate\Http\Request;

class AdministrationController extends BaseAdministrationController {

    public function changeColor(Request $request) {
        $admin = Administration::getLoggedAdmin();
        $admin->dark_theme = $request->get('theme');
        $admin->save();

        return response()->json(['success' => true]);
    }
}
