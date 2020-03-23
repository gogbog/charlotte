<?php

namespace Charlotte\Administration\Helpers;

class StaticBlock {

    public static function get($title) {
        $data = \Charlotte\Administration\Models\StaticBlock::where('title', $title)->first();

        if (empty($data)) {
            return null;
        }

        return $data->content;
    }
}