@extends('layouts.app')

@section('titulo', 'Crear Usuario')

<!-- Main -->
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">Administración</div>
    <div class="panel-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <h1>Crear Usuario</h1>
      {!! Form::open(['route' => 'usuarios.store', 'method'=>'POST']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null , ['class'=> 'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::text('email', null , ['class'=> 'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class'=> 'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('password_confirmation', 'Repite la contraseña') !!}
        {!! Form::password('password_confirmation', ['class'=> 'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('rol_id', 'Rol') !!}
        {!! Form::select('rol_id', $listaRoles ,null, ['class'=> 'form-control'])!!}
      </div>
      <div class="form-group">
        {!! Form::submit('Crear rol',['class'=> 'btn btn-primary'])!!}
        <a href = "{{route('usuarios.index')}}" class='btn btn-default'>Cancelar</a>
      </div>

      {!! Form::close() !!}
    </div>
  </div>
@endsection
