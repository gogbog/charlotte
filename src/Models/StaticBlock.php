<?php

namespace Charlotte\Administration\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class StaticBlock extends Model {

    use Translatable;

    public $translationForeignKey = 'static_block_id';

    public $translatedAttributes = [
        'content'
    ];

    protected $with = ['translations'];

    protected $fillable = [
        'title', 'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];
}