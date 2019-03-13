<?php

namespace Charlotte\Administration\Helpers;

use Illuminate\Support\Facades\Auth;

class Administration {

    public static function getMiddlewares($additional_middlewares = []) {
        $middlewares = [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
            \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
        ];

        return array_merge($middlewares, $additional_middlewares);
    }

    public static function getLoggedAdmin() {
        return Auth::guard(config('administration.guard'))->user();
    }


}
