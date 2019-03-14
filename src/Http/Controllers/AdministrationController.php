<?php

namespace Charlotte\Administration\Http\Controllers;


class AdministrationController extends BaseAdministrationController {
    public function index() {
        return view('administration::pages.empty-page');
    }
}
