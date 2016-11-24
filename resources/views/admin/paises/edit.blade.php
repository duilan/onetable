@extends('layouts.app')

@section('titulo', 'Editar Pais')

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
            <h1>Editar Pais</h1>

            {!! Form::open(['route' => ['paises.update',$pais], 'method'=>'PUT']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', $pais->nombre , ['class'=> 'form-control' , 'required'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Guardar cambios',['class'=> 'btn btn-primary'])!!}
                <a href = "{{route('paises.index')}}" class='btn btn-default'>Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
