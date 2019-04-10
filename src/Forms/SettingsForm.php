<?php

namespace Charlotte\Administration\Forms;

use Caffeinated\Modules\Facades\Module;
use Kris\LaravelFormBuilder\Form;

class SettingsForm extends Form {
    public function buildForm() {

        $modules = Module::enabled();
        $module_slugs = [];


        foreach ($modules as $module) {
            $module_slugs[] = $module['slug'];
        }

        $this->add('website_title', 'text', [
            'title' => trans('administration::admin.website_name')
        ]);

        foreach ($module_slugs as $module_slug) {
            $administration_class = module_class($module_slug, 'Administration');

            if (!class_exists($administration_class)) {
                continue;
            }

            $class = new $administration_class();

            $this->add('text', 'box', [
                'title' => trans($module_slug . "::admin.module_name")
            ]);
            $class->settings($module_slug, $this, $this->model);
        }


        $this->add('submit', 'button', [
            'title' => trans('administration::admin.submit')
        ]);
    }
}