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
        <div class="col-md-7 mb-4">
            
            <!--Card-->
            <div class="card">
                
                <!--Card content-->
                <div class="card-body">
                    
                    <div class="accordion" id="characters" role="tablist">
                    
                    <p>キャラクタ: {{ $character_models->count() }} 種類</p>
                    
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
                                    {{ $character_model->name }} <span class="badge badge-dark">{{ $character_model->character_model_types->count() }} 種類</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse{{ $character_model->id }}" class="collapse card-body" role="tabpanel" aria-labelledby="heading{{ $character_model->id }}" data-parent="#characters">
                                
                                @if(mb_strlen($character_model->description) > 0)
                                    <p>{{ $character_model->description }}</p>
                                @else
                                    <p>説明なし</p>
                                @endif
                                
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
        <div class="col-md-5 mb-4" v-cloak>
            
            <div v-show="loading" class="loader">Now loading...</div>
            
            <!--Card-->
            <div v-show="!loading" v-if="types.length > 0" class="card mb-4">
                
                <form method="POST" action="{{ action('CharacterController@store') }}">
                    @csrf
                    
                    <h5 class="card-header">戦闘タイプ一覧</h5>
                    <!--Card content-->
                    <div class="card-body">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" :disabled="!isPushedCharacterType">登録</button>
                        </div>
                        <div class="custom-control custom-radio" v-for="type in types" :key="type.id">
                          <input :id="'character_model_types' + type.id" name="character_model_types" type="radio" class="custom-control-input" v-on:click="selectType" :value="type.id">
                          <label class="custom-control-label" :for="'character_model_types' + type.id">@{{type.model_type_name}}</label>
                        </div>
                        
                        <div class="form-group mt-2">
                            <label for="character_name">キャラクタ名</label>
                            <input type="text" class="form-control" name="character_name" id="character_name" placeholder="キャラクタ名">
                        </div>
                    </div>
                </form>
            </div>
            <!--/.Card-->
            
            <!--Card-->
            <div class="card mb-3" v-show="!loading" v-for="type in types" :key="type.id">
                <h5 class="card-header">@{{type.model_type_name}} ステータス</h5>
                <!--Card content-->
                <div class="card-body">
                    <div class="input-group input-group-sm mb-3">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="体力">
                            <span class="input-group-text" id="inputGroup-sizing-sm">HP</span>
                        </div>
                        <input type="text" class="form-control" placeholder="HP" aria-label="HP" aria-describedby="inputGroup-sizing-sm" readonly :value="type.hp" data-toggle="tooltip" title="体力">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="魔力">
                            <span class="input-group-text" id="inputGroup-sizing-sm">MP</span>
                        </div>
                        <input type="text" class="form-control" placeholder="MP" aria-label="MP" aria-describedby="inputGroup-sizing-sm" readonly :value="type.mp" data-toggle="tooltip" title="魔力">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="スタミナ">
                            <span class="input-group-text" id="inputGroup-sizing-sm">SP</span>
                        </div>
                        <input type="text" class="form-control" placeholder="SP" aria-label="SP" aria-describedby="inputGroup-sizing-sm" readonly :value="type.sp" data-toggle="tooltip" title="スタミナ">
                    </div>
                    
                    <div class="input-group input-group-sm mb-3">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="刺突攻撃力">
                            <span class="input-group-text" id="inputGroup-sizing-sm">STAB</span>
                        </div>
                        <input type="text" class="form-control" placeholder="STAB" aria-label="STAB" aria-describedby="inputGroup-sizing-sm" readonly :value="type.stab" data-toggle="tooltip" title="刺突攻撃力">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="斬撃攻撃力">
                            <span class="input-group-text" id="inputGroup-sizing-sm">HACK</span>
                        </div>
                        <input type="text" class="form-control" placeholder="HACK" aria-label="HACK" aria-describedby="inputGroup-sizing-sm" readonly :value="type.hack" data-toggle="tooltip" title="斬撃攻撃力">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="魔法攻撃力">
                            <span class="input-group-text" id="inputGroup-sizing-sm">INT</span>
                        </div>
                        <input type="text" class="form-control" placeholder="INT" aria-label="INT" aria-describedby="inputGroup-sizing-sm" readonly :value="type.int" data-toggle="tooltip" title="魔法攻撃力">
                    </div>
                    
                    <div class="input-group input-group-sm mb-3">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="物理防御力">
                            <span class="input-group-text" id="inputGroup-sizing-sm">DEF</span>
                        </div>
                        <input type="text" class="form-control" placeholder="DEF" aria-label="DEF" aria-describedby="inputGroup-sizing-sm" readonly :value="type.def" data-toggle="tooltip" title="物理防御力">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="魔法防御力">
                            <span class="input-group-text" id="inputGroup-sizing-sm">MR</span>
                        </div>
                        <input type="text" class="form-control" placeholder="MR" aria-label="MR" aria-describedby="inputGroup-sizing-sm" readonly :value="type.mr" data-toggle="tooltip" title="魔法防御力">
                        
                    </div>
                    
                    <div class="input-group input-group-sm mb-3">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="命中率･クリティカル回避率">
                            <span class="input-group-text" id="inputGroup-sizing-sm">DEX</span>
                        </div>
                        <input type="text" class="form-control" placeholder="DEX" aria-label="DEX" aria-describedby="inputGroup-sizing-sm" readonly :value="type.dex" data-toggle="tooltip" title="命中率･クリティカル回避率">
                        
                        <div class="input-group-prepend" data-toggle="tooltip" title="回避率･クリティカル発生率">
                            <span class="input-group-text" id="inputGroup-sizing-sm">AGI</span>
                        </div>
                        <input type="text" class="form-control" placeholder="AGI" aria-label="AGI" aria-describedby="inputGroup-sizing-sm" readonly :value="type.agi" data-toggle="tooltip" title="回避率･クリティカル発生率">
                        
                    </div>
                </div>

            </div>
            <!--/.Card-->
            
            
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->



@endsection