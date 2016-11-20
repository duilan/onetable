@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
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
      </div>
    </div>
  </div>
@endsection
