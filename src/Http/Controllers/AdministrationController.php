<?php

namespace Charlotte\Administration\Http\Controllers;


class AdministrationController extends Controller {
    public function index() {
        return view('administration::pages.empty-page');
    }
}
