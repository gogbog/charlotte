<?php

namespace Vector\Administration\Providers;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
use Vector\Administration\Commands\MigrateCommand;

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
        //Fix schema migrations
        Schema::defaultStringLength(191);

        //Commands
        //TODO get all classes from commands folder and add them to array
        if ($this->app->runningInConsole()) {
            $this->commands([
                MigrateCommand::class,
            ]);
        }



        //Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations/');
        $this->loadRoutesFrom(__DIR__.'/../Routes/administration.php');



    }
}
