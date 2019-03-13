<?php

namespace Charlotte\Administration\Forms;

use Kris\LaravelFormBuilder\Form;

class AdminForm extends Form
{
    public function buildForm()
    {
        $additional_data = null;
        $fields = $this->data;
        if (!empty($fields['administration_additional_data'])) {
            $additional_data = $fields['administration_additional_data'];

        }
        unset($fields['administration_additional_data']);

        foreach ($fields as $key => $data) {
            $attributes = [
                'class' => 'form-control'
            ];

            if (!empty($data['attributes'])) {
                array_merge($attributes, $data['attributes']);
            }

            $this->add(@$key, $data['field'], [
                'title' => (!empty($data['title'])) ? $data['title'] : trans('administration::admin.' . $key),
                'value' => @$data['value'],
                'helper_box' => @$data['helper_box'],
                'class' => @$data['class'],
                'name' => $key,
                'attr' => $attributes
            ]);
        }

    }
}
