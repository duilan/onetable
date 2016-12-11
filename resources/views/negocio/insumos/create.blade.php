@extends('layouts.app')

@section('titulo', 'Añadir Insumo')

<!-- Main -->
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Añadir Insumo</div>
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
            {!! Form::open(['route' => 'insumos.store', 'method'=>'POST' , 'files' => true]) !!}

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre del insumo') !!}
                {!! Form::text('nombre', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('insumoTipo_id', 'Categoria del insumo') !!}
                {!! Form::select('insumoTipo_id', $listaInsumoTipos , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción') !!}
                {!! Form::textarea('descripcion', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('precio', 'Precio') !!}
                {!! Form::text('precio', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="text-center" data-provides="fileinput">
                <div class="fileinput-preview fileinput-exists content-foto-insumo">
                    <img src="/images/image_placeholder.jpg">
                </div>
                <div>
                    <span class="btn btn-rose btn-round btn-file">
                        <div class="form-group">
                            {!! Form::label('foto', 'Fotografia') !!}
                            {!! Form::file('foto')!!}
                        </div>
                    </span>
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Añadir Negocio',['class'=> 'btn btn-primary'])!!}
                <a href = "{{route('insumos.index')}}" class='btn btn-default'>Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
