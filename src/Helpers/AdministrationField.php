<?php

namespace Charlotte\Administration\Helpers;


class AdministrationField {

    public static function link($link, $icon = 'fa-external-link', $color = '') {
        return view('administration::components.buttons.link', compact('link', 'icon', 'color'))->render();
    }

    public static function edit($link, $icon = 'ti-pencil', $color = 'text-info') {
        return view('administration::components.buttons.link', compact('link', 'icon', 'color'))->render();
    }

    public static function delete($link, $icon = 'ti-trash', $color = 'text-danger') {
        return view('administration::components.buttons.delete', compact('link', 'icon', 'color'))->render();

    }

    public static function restore($link, $icon = 'fa-undo', $color = 'text-warning') {
        return view('administration::components.buttons.restore', compact('link', 'icon', 'color'))->render();
    }

    public static function nest() {

    }

    public static function media() {

    }

}