<?php

namespace Charlotte\Administration\Http\Controllers;


use Charlotte\Administration\Helpers\AdministrationModuleHelper;

class DashboardController extends BaseAdministrationController {
    public function index() {
        $boxes = AdministrationModuleHelper::moduleDashboards();
        return view('administration::pages.empty-page', compact('boxes'));
    }
}
