@extends('layouts.app')

@section('titulo', 'Editar Insumo')

<!-- Main -->
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Editar Insumo</div>
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
            {!! Form::open(['route' => ['insumos.update', $insumo], 'method'=>'PATCH' , 'files' =>true]) !!}

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre del insumo') !!}
                {!! Form::text('nombre', $insumo->nombre , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('insumoTipo_id', 'Categoria del insumo') !!}
                {!! Form::select('insumoTipo_id', $listaInsumoTipos, $insumo->insumoTipo_id, ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción') !!}
                {!! Form::textarea('descripcion', $insumo->descripcion , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('precio', 'Precio') !!}
                {!! Form::text('precio', $insumo->precio , ['class'=> 'form-control'])!!}
            </div>

            <div class="text-center" data-provides="fileinput">
                <div class="fileinput-preview fileinput-exists content-foto-insumo">
                    <img src="/fotoinsumos/{{ $insumo->foto }}">
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
                {!! Form::submit('Guardar cambios',['class'=> 'btn btn-primary'])!!}
                <a href = "{{route('insumos.index')}}" class='btn btn-default'>Cancelar</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
