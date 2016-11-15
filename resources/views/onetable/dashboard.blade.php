@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
          admin onetable
          <ul>
            @foreach ($negocios as $negocio)
            <li>{{ $negocio->fullName }} </li>
            @endforeach
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection