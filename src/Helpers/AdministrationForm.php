<?php

namespace Charlotte\Administration\Helpers;


use Charlotte\Administration\Forms\AdminForm;


class AdministrationForm {

    private $fields;
    private $model;
    private $route;
    private $form;
    private $additionalData;
    private $method;

    public function __construct() {
        $this->method = 'POST';
        $this->form = AdminForm::class;
        $this->fields = [];
    }

    public function additionalData($additionalData) {
        $this->additionalData = $additionalData;
    }

    public function fields($fields) {
        $this->fields = $fields;
    }

    public function form($form) {
        $this->form = $form;
    }

    public function model($model) {
        $this->model = $model;
    }

    public function route($route) {
        $this->route = $route;
    }

    public function generate() {
        $formbuilder = \App::make('laravel-form-builder');

        $url_method = [
            'url' => $this->route,
            'method' => $this->method
        ];

        $this->fields['administration_additional_data'] = $this->additionalData;

        $form = $formbuilder->create($this->form, $url_method, $this->fields);


        return view('administration::pages.empty-page', compact('form'));
    }
}