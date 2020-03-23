<?php

namespace Charlotte\Administration\Forms;

class StaticBlockForm extends AdminForm {

    public function buildForm() {

        $this->add('title', 'text', [
            'title' => trans('administration::admin.title'),
        ]);


        $this->add('content', 'editor', [
            'title' => trans('administration::admin.content'),
            'translate' => true,
            'simple' => true
        ]);

        $this->add('active', 'switch', [
            'title' => trans('administration::admin.active'),
            'default_value' => 1
        ]);

        $this->add('submit', 'button', [
            'title' => trans('administration::admin.submit')
        ]);
    }
}
