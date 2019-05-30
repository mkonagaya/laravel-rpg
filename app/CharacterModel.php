<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterModel extends Model
{
    public function character_model_types()
    {
        return $this->hasMany('App\CharacterModelType');
    }
}
