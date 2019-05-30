@extends('layouts.common')

@include('layouts.head')

@include('layouts.header')

@section('content')

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

            <h4 class="mb-2 mb-sm-0 pt-1">
                <a href="/" target="_blank">Home Page</a>
                <span>/</span>
                <a href="action('CharacterController@index')" target="_blank">キャラクター一覧</a>
                <span>/</span>
                <span>キャラクター作成</span>
            </h4>

        </div>

    </div>
    <!-- Heading -->
    
    <!--Grid row-->
    <div class="row wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        
        <!--Grid column-->
        <div class="col-md-9 mb-4">
            
            <!--Card-->
            <div class="card">
                
                <!--Card content-->
                <div class="card-body">
                    
                    <a href="{{ action('CharacterController@create') }}" class="btn btn-primary">登録</a>
                    
                    <p>種別一覧</p>
                    
                    
                    <div class="accordion" id="characters" role="tablist">
                    
                    <p>{{ $character_models->count() }} 件</p>
                    
                    @forelse ($character_models as $character_model)
                    
                        <div class="card">
                            <div class="card-header" role="tab" id="heading{{ $character_model->id }}">
                                <h5 class="mb-0">
                                    <a 
                                        class="collapsed text-body stretched-link text-decoration-none" 
                                        data-toggle="collapse" 
                                        href="#collapse{{ $character_model->id }}" 
                                        aria-expanded="false" 
                                        aria-controls="collapse{{ $character_model->id }}"
                                        v-on:click="fetchTypes({{ $character_model->id }})"
                                    > 
                                    {{ $character_model->name }} <span class="badge badge-dark">{{ $character_model->character_model_types->count() }}</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse{{ $character_model->id }}" class="collapse" role="tabpanel" aria-labelledby="heading{{ $character_model->id }}" data-parent="#characters">
                            
                                <p>キャラの説明</p>
                                
                            </div>
                        </div>
                    
                    
                        
                    @empty
                        <p>キャラモデルなし</p>
                    @endforelse    
                        
                </div>

            </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

        
        <!--Grid column-->
        <div class="col-md-3 mb-4">
            
            <!--Card-->
            <div class="card">
                
                <!--Card content-->
                <div class="card-body">
                    <div class="custom-control custom-radio">
                      <input id="customRadio1" name="customRadio" type="radio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1">種類１</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="customRadio2" name="customRadio" type="radio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">種類２</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="customRadio3" name="customRadio" type="radio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">種類３</label>
                    </div>
                    
                    <div class="custom-control custom-radio" v-for="type in types" v-bind:key="type.id">
                      <input id="customRadio@{{type.id}}" name="customRadio" type="radio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio@{{type.id}}">@{{type.name}}</label>
                      @{{type.id}}
                      @{{type.name}}
                    </div>
                    
                </div>
                


            </div>
            <!--/.Card-->
            
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->



@endsection