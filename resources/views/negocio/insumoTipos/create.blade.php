@extends('layouts.app')

@section('titulo', 'Añadir categoria de insumo')

<!-- Main -->
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Añadir Categoria de Insumo</div>
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
            {!! Form::open(['route' => 'insumoTipos.store', 'method'=>'POST']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Añadir Categoria',['class'=> 'btn btn-primary'])!!}
                <a href = "{{route('insumoTipos.index')}}" class='btn btn-default'>Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
