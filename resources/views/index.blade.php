@extends('layouts.layout')

@section('segnapostoContent')
@include('_partials._header')
<div class="container">
  <table class="table table-hover">
  <thead class="">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Cognome</th>
      <th scope="col">Team</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($drivers as $key => $driver)
      <tr>
        <td>{{ $driver["name"]}}</td>
        <td>{{ $driver["surname"]}}</td>
        <td>{{ $driver["team"]}}</td>
      </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection
