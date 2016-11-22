@extends('layouts.app')

@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">Adminitración</div>
    <div class="panel-body">
      <ul>
        {{debug($negocios)}}
        @foreach ($negocios as $negocio)
          <li>{{ $negocio->razonSocial }} </li>
          <li>{{ $negocio->pais_id }} </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
