<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'model_id',
        'user_id',
        'character_name',
        'level',
        'exp',
        'hp',
        'mp',
        'sp',
        'hack',
        'stab',
        'def',
        'int',
        'mr',
        'dex',
        'agi',
        'xien_id',
    ];

}