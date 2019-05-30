<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacterModelController extends Controller
{
    public function getTypes(int $model_id)
    {
        return \App\CharacterModel::find($model_id)->character_model_types;
    }
}
