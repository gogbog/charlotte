<?php

namespace Charlotte\Administration\Http\Controllers;


use Charlotte\Administration\Helpers\Administration;
use Charlotte\Administration\Helpers\AdministrationModuleHelper;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\App;

class BaseAdministrationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
        if (!App::runningInConsole() || !Breadcrumbs::exists('base')) {
            Breadcrumbs::register('base', function ($breadcrumbs) {
                $breadcrumbs->push(trans('administration::admin.dashboard'), Administration::route('index'));
            });
        }

        \Menu::make('menu', function ($menu) {
            $menu->add(trans('administration::admin.main_menu'), ['class' => 'nav-small-cap m-t-10', 'global' => true]);
            $menu->add(trans('administration::admin.dashboard'), ['url' => Administration::route('index'), 'icon' => 'fa-dashboard']);
            AdministrationModuleHelper::moduleMenu($menu);
            $menu->add(trans('administration::admin.settings'), ['class' => 'nav-small-cap m-t-10', 'global' => true]);
            $menu->add(trans('administration::admin.logs'), ['url' => Administration::route('logs'), 'icon' => 'ti-info-alt']);


        });
    }
}
