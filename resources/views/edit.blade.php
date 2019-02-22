@extends('layouts.layout')

@section('segnapostoContent')
@include('_partials._header')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="pt-5">
        <h2>Aggiorna dati Driver {{ $driver->name}} {{ $driver->surname}} </h2>
      </div>
    </div>
  </div>
  <form class="pt-5" action="{{ route('drivers.update', $driver->id)}}" method="post">
    @csrf <!--TOKEN PER LA SICUREZZA DEI DATI CHE INVII (SE I TOKEN NON COMBACCIANO GENERA ERRORE) -->
    @method('PUT')
  <div class="form-group">
    <input type="nome" class="form-control" name="name" placeholder="nome" value="{{ $driver->name}}">
  </div>
  <div class="form-group">
    <input type="cognome" class="form-control" name="surname" placeholder="cognome" value="{{ $driver->surname}}">
  </div>
  <div class="form-group">
    <input type="team" class="form-control" name="team" placeholder="team" value="{{ $driver->team}}">
  </div>
  <button type="submit" class="btn btn-primary col-12">Aggiorna</button>
</form>
</div>
@endsection
