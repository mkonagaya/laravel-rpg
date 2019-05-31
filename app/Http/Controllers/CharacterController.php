<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('characters.index')
            ->with(['characters' => Auth::User()->characters()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters.create')
            ->with([
                    'character_models' => \App\CharacterModel::all()
                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'character_name' => 'required|unique:characters|max:255',
        ]);
        
        $model_id = $request->character_model_types;
        
        $character_model = \App\CharacterModelType::find($model_id);
        
        dd($character_model, $request->all(), Auth::User()->id);
        
        $character = new \App\Character();
        $character->character_model_type_id = $model_id;
        $character->user_id = Auth::User()->id;
        $character->character_name = $request->character_name;
        $character->level = 1;
        $character->exp = 0;
        
        $character->hp         = $character_model->hp;
        $character->mp         = $character_model->mp;
        $character->sp         = $character_model->sp;
        $character->hack       = $character_model->hack;
        $character->stab       = $character_model->stab;
        $character->def        = $character_model->def;
        $character->int        = $character_model->int;
        $character->mr         = $character_model->mr;
        $character->dex        = $character_model->dex;
        $character->agi        = $character_model->agi;
        
        // todo キャラタイプごとに何を初期とするか？？
        $character->xien_id    = 0;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
