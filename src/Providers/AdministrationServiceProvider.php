<?php

namespace Vector\Administration\Providers;



use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
use Vector\Administration\Commands\MigrateCommand;
use Vector\Administration\Http\Models\Admin;


class AdministrationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Fix utf8mb4 collation
        Schema::defaultStringLength(191);


        //Add configuration files
        $this->mergeConfigFrom(
            __DIR__.'/../../config/administration.php', 'administration'
        );

        //Setup Views
        $this->loadViewsFrom(__DIR__.'/../../resources/views/', config('administration.views_prefix'));

        //Setup Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations/');
        $this->loadRoutesFrom(__DIR__.'/../Routes/routes.php');


        //Setup Commands
        //TODO get all classes from commands folder and add them to array
        if ($this->app->runningInConsole()) {
            $this->commands([
                MigrateCommand::class,
            ]);
        }

        //Setup Guard
        Config::set([
            'auth.guards.' . config('administration.guard') => [
                'driver' => 'session',
                'provider' => config('administration.guard'),
            ],
        ]);
        Config::set([
            'auth.providers.' . config('administration.guard') => [
                'driver' => 'eloquent',
                'model' => Admin::class,
            ],
        ]);


        //Publish package
        $this->publishes([
            __DIR__.'/../../resources/assets/' => public_path('vector/administration'),
        ], 'public');


    }
}
