<?php


use Charlotte\Administration\Helpers\Administration;
use Charlotte\Administration\Middleware\AdministratorLogged;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Charlotte\Administration\Helpers\AdministrationModuleHelper;


Route::group([
    'prefix' => LaravelLocalization::setLocale() . '/admin',
    'middleware' => Administration::getMiddlewares(),
    'as' => 'administration.',
], function () {
    Route::group([

    ], function () {

        //Administration routes
        Route::group([
            'namespace' => 'Charlotte\Administration\Http\Controllers',
        ], function () {
            Route::group([
                'middleware' => AdministratorLogged::class

            ], function () {
                Route::get('/', [
                    'as' => 'index',
                    'uses' => 'DashboardController@index',
                ]);
                Route::post('/settings/change-color', [
                    'as' => 'change_color',
                    'uses' => 'AdministrationController@changeColor',
                ]);

                Route::get('/logs', [
                    'as' => 'logs',
                    'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index',
                ]);

                Route::post('/quick_switch', [
                    'as' => 'quick_switch',
                    'uses' => 'AjaxController@saveQuickSwitch',
                ]);

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

        Route::group([
            'middleware' => AdministratorLogged::class

        ], function () {
            //Import all module routes
            AdministrationModuleHelper::moduleRoutes();
        });





    });
});
