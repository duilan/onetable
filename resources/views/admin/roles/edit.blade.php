@extends('layouts.app')

@section('titulo', 'Editar Rol')

<!-- Main -->
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">Administración</div>
    <div class="panel-body">
      <h1>Editar Rol</h1>

      {!! Form::open(['route' => ['roles.update',$rol], 'method'=>'PUT']) !!}
      <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', $rol->nombre , ['class'=> 'form-control' , 'required'])!!}
      </div>

      <div class="form-group">
        {!! Form::submit('Guardar cambios',['class'=> 'btn btn-primary'])!!}
        <a href = "{{route('roles.index')}}" class='btn btn-default'>Cancelar</a>
      </div>

      {!! Form::close() !!}
    </div>
  </div>
@endsection
