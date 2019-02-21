@extends('layouts.layout')

@section('segnapostoContent')
@include('_partials._header')
<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="wrapTeam pt-5 pb-3">
        <h3>{{$driver->team}}</h3>
      </div></div>
    </div>
    <div class="row">
      <div class="col-6"><h4>{{$driver->name}}</h4></div>
      <div class="col-6"><h4>{{$driver->surname}}</h4></div>
    </div>
</div>
@endsection
