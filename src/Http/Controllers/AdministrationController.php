<?php

namespace Vector\Administration\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class AdministrationController extends Controller
{
    public function index() {
        $user = Auth::guard(config('administration.guard'))->user();

        return view('administration::pages.empty-page');
    }
}
