<?php

/*
 * ProVision Administration, http://ProVision.bg
 * Author: Venelin Iliev, http://veneliniliev.com
 */
/**
 * System status for remote checking
 */

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
], function () {
    Route::group([
        'namespace' => 'Vector\Administration\Http\Controllers',
        'prefix' => 'admin',
        'as' => 'vector.administration.',
    ], function () {
//        Route::get('/', [
//            'as' => 'index',
//            'uses' => 'AdministrationController@index',
//        ]);
//
//        // Authentication Routes...
//        Route::get('login', [
//            'as' => 'login',
//            'uses' => 'Auth\LoginController@showLoginForm',
//        ]);
//
//        Route::post('login', [
//            'as' => 'login_post',
//            'uses' => 'Auth\LoginController@login',
//        ]);
//
//        Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    });
});
