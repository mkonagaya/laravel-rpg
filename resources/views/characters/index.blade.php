@extends('layouts.common')

@include('layouts.head')

@include('layouts.header')

@section('content')
<div class="container">
  <!-- Content here -->
  
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
  
<div class="container">
  <div class="row">
    <div class="col-4">.col-4</div>
    <div class="col-4">.col-4</div>
    <div class="col-4">.col-4</div>
  </div>

  <div class="row">
    <div class="col-sm-4">.col-sm-4</div>
    <div class="col-sm-4">.col-sm-4</div>
    <div class="col-sm-4">.col-sm-4</div>
  </div>

  <div class="row">
    <div class="col-md-4">.col-md-4</div>
    <div class="col-md-4">.col-md-4</div>
    <div class="col-md-4">.col-md-4</div>
  </div>

  <div class="row">
    <div class="col-lg-4">.col-lg-4</div>
    <div class="col-lg-4">.col-lg-4</div>
    <div class="col-lg-4">.col-lg-4</div>
  </div>

  <div class="row">
    <div class="col-xl-4">.col-xl-4</div>
    <div class="col-xl-4">.col-xl-4</div>
    <div class="col-xl-4">.col-xl-4</div>
  </div>
</div>


</div>
@endsection