<?php

namespace Charlotte\Administration\Models;

use Illuminate\Database\Eloquent\Model;

class StaticBlockTranslation extends Model {

    protected $table = 'static_blocks_translations';

    public $timestamps = false;

    protected $fillable = [
        'content'
    ];

}
