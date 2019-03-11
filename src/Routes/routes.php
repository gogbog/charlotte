<?php


use Charlotte\Administration\Helpers\Administration;
use Charlotte\Administration\Middleware\AdministratorLogged;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Charlotte\Administration\Helpers\AdministrationModuleHelper;


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => Administration::getMiddlewares()
], function () {
    Route::group([
        'namespace' => 'Charlotte\Administration\Http\Controllers',
        'prefix' => 'admin',
        'as' => 'administration.',
    ], function () {

        Route::group([
            'middleware' => AdministratorLogged::class

        ], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'AdministrationController@index',
            ]);

            //Import all module classes
            AdministrationModuleHelper::moduleRoutes();
        });

        // Authentication Routes...
        Route::get('login', [
            'as' => 'login',
            'uses' => 'Auth\LoginController@showLoginForm',
        ]);

        Route::post('login', [
            'as' => 'login',
            'uses' => 'Auth\LoginController@login',
        ]);

        Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    });
});
