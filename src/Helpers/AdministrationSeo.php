<?php

namespace Charlotte\Administration\Helpers;


class AdministrationSeo {


    public static function seoFields($form, $model = null, $translate = true, $fields = []) {


        if (empty($fields)) {
            $fields = ['meta_title', 'meta_description', 'slug'];
        }

        foreach ($fields as $field) {

            $form->add($field, 'text', [
                'title' => trans('administration::admin.' . $field),
                'translate' => $translate,
                'model' => @$model
            ]);
        }

        return $form;

    }
}