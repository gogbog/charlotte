<?php

namespace Charlotte\Administration\Helpers;


class Dashboard {

    private $route;
    private $boxes = [];

    public function __construct() {
        $this->route = config('administration.views_prefix') . '::components.dashboard.';
    }

    public function colorBox($title, $value, $color = 'bg-danger', $class = 'col-lg-3 col-md-6 col-sm-12') {
        $this->boxes[] = view($this->route . 'color-box', compact('title','value', 'color', 'class'));
    }

    public function simpleBox($title, $value, $icon = 'icon-people', $color = 'text-info', $class = 'col-lg-3 col-md-6 col-sm-12') {
        $this->boxes[] = view($this->route . 'simple-box', compact('title','value','color', 'icon', 'class'));
    }

    public function generate() {
        return $this->boxes;
    }

}
