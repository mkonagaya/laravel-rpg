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
                <span>キャラクター一覧</span>
            </h4>

        </div>

    </div>
    <!-- Heading -->

    <a href="{{ action('CharacterController@create') }}" class="btn blue-gradient btn-rounded waves-effect waves-light">新規作成</a>

@forelse ($characters as $character)
    <li>{{ $user->character_name }}</li>
@empty
    <p>キャラなし</p>
@endforelse

@endsection