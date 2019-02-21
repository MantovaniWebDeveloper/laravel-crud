@extends('layouts.layout')

@section('segnapostoContent')
@include('_partials._header')
<div class="container">
  <form class="pt-5" action="{{ route('drivers.store')}}" method="post">
    @csrf <!--TOKEN PER LA SICUREZZA DEI DATI CHE INVII (SE I TOKEN NON COMBACCIANO GENERA ERRORE) -->
  <div class="form-group">
    <input type="nome" class="form-control" name="name" placeholder="nome">
  </div>
  <div class="form-group">
    <input type="cognome" class="form-control" name="surname" placeholder="cognome">
  </div>
  <div class="form-group">
    <input type="team" class="form-control" name="team" placeholder="team">
  </div>
  <button type="submit" class="btn btn-primary col-12">Salva</button>
</form>
</div>
@endsection
