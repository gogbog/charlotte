<?php

namespace Charlotte\Administration\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class StoreStaticBlockRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $rules = [];

        foreach (LaravelLocalization::getSupportedLanguagesKeys() as $locale) {
            $rules[$locale . '.content'] = 'nullable|string';
        }

        $static_block_id = $this->route('static_block');
        if (!empty($static_block_id)) {
            $rules['title'] = 'nullable|string|unique:static_blocks,title,' . $static_block_id;
        }
        else {
            $rules['title'] = 'nullable|string|unique:static_blocks,title';
        }

        $rules['active'] = 'boolean';

        return $rules;
    }
}
