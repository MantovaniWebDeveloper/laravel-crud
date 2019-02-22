@extends('layouts.layout')

@section('segnapostoContent')
@include('_partials._header')
<div class="container">
  <div class="row">
    <div class="col-12 pt-4 pb-4">
      <a href="{{ route('drivers.create') }}"><button class="btn btn-primary">Nuovo pilota</button></a></a>
    </div>
  </div>
  <table class="table table-hover">
  <thead class="">
    <tr>
      <th scope="col text-center">Nome</th>
      <th scope="col text-center">Cognome</th>
      <th scope="col text-center">Team</th>
      <th scope="col text-center">Scheda</th>
      <th scope="col text-center">Aggiorna</th>
      <th scope="col text-center">Cancella</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($drivers as $key => $driver)
      <tr>
        <td>{{ $driver->name}}</td>
        <td>{{ $driver->surname}}</td>
        <td>{{ $driver->team}}</td>
        <td><a href="{{ route('pilota-f1',[$driver->id,$driver->name,$driver->surname]) }}"><button class="btn btn-success">Visualizza</button></a></td>
        <td><a href="{{ route('drivers.edit', $driver->id) }}"><button class="btn btn-warning">Aggiorna</button></a></td>
        <td>
          <form class="" action="{{ route('drivers.destroy', $driver->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" name="" value="Cancella">
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
