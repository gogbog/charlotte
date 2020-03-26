<?php

namespace Charlotte\Administration\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class StaticBlock extends Model {

    use Translatable;


    protected $table = 'static_blocks';

    public $translationForeignKey = 'static_block_id';

    public $translatedAttributes = [
        'content'
    ];

    protected $with = ['translations'];

    protected $fillable = [
        'title', 'active'
    ];

    public function scopeActive($query)
    {
        return $query->where($this->table . '.active', 1);
    }

    protected $casts = [
        'active' => 'boolean'
    ];
}