<?php

namespace Charlotte\Administration\Http\Controllers;


use Charlotte\Administration\Helpers\Administration;
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
        if (!App::runningInConsole() || !Breadcrumbs::exists('index_home')) {
            Breadcrumbs::register('base', function ($breadcrumbs) {
                $breadcrumbs->push(trans('administration::admin.dashboard'), Administration::route('index'));
            });
        }
    }
}
