@extends('layouts.layout')

@section('segnapostoContent')
@include('_partials._header')
<div class="container">
  <form class="pt-5">
  <div class="form-group">
    <input type="nome" class="form-control" placeholder="nome">
  </div>
  <div class="form-group">
    <input type="cognome" class="form-control" placeholder="cognome">
  </div>
  <div class="form-group">
    <input type="team" class="form-control" placeholder="team">
  </div>
  <button type="submit" class="btn btn-primary col-12">Salva</button>
</form>
</div>
@endsection
