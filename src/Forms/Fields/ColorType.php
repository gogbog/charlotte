<?php
namespace Charlotte\Administration\Forms\Fields;


use Kris\LaravelFormBuilder\Fields\FormField;

class ColorType extends FormField
{
    protected function getTemplate()
    {
        // At first it tries to load config variable,
        // and if fails falls back to loading view
        // resources/views/fields/datetime.blade.php
        return 'color';
    }

    protected function getDefaults()
    {
        return [
            'attr' => [
                'class' => 'form-control colorpicker',
            ],
        ];
    }

}