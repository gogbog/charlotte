<?php

namespace Charlotte\Administration\Http\Controllers;


class AdministrationController extends Controller {
    public function index() {
//        $user = Auth::guard(config('administration.guard'))->user();
        return view('administration::pages.empty-page');
    }
}
