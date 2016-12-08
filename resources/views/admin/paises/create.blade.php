@extends('layouts.app')

@section('titulo', 'Añadir Pais')

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
            <h1>Añadir Pais</h1>
            {!! Form::open(['route' => 'paises.store', 'method'=>'POST']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Añadir pais',['class'=> 'btn btn-primary'])!!}
                <a href = "{{route('paises.index')}}" class='btn btn-default'>Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
