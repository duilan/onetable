@extends('layouts.app')

@section('titulo' , 'Editar Negocio')

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
            <h1>Editar Negocio</h1>
            {!! Form::open(['route' => ['negocios.update', $negocio], 'method'=>'PATCH' , 'files' =>true]) !!}
            <div class="form-group">
                {!! Form::label('razonSocial', 'Nombre/Razon Social') !!}
                {!! Form::text('razonSocial', $negocio->razonSocial , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('rfc', 'RFC') !!}
                {!! Form::text('rfc', $negocio->rfc , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', $negocio->email , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('calle', 'Calle') !!}
                {!! Form::text('calle', $negocio->calle , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('numeroExterior', 'Nº Exterior') !!}
                {!! Form::text('numeroExterior', $negocio->numeroExterior , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('numeroInterior', 'Nº Interior') !!}
                {!! Form::text('numeroInterior', $negocio->numeroInterior , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('colonia', 'Colonia') !!}
                {!! Form::text('colonia', $negocio->colonia , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('delegacion', 'Delegación/Municipio') !!}
                {!! Form::text('delegacion', $negocio->delegacion , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('estado', 'Estado/Localidad') !!}
                {!! Form::text('estado', $negocio->estado , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('codigoPostal', 'Codigo postal') !!}
                {!! Form::text('codigoPostal', $negocio->codigoPostal , ['class'=> 'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('pais_id', 'pais') !!}
                {!! Form::select('pais_id', $listaPaises , $negocio->pais_id, ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('user_id', 'Usuario responsable*') !!}
                {!! Form::select('user_id', $listaUsuarios , $negocio->user_id, ['class'=> 'form-control'])!!}
            </div>

            <div class="text-center" data-provides="fileinput">
                <div class="fileinput-preview fileinput-exists content-logo">
                    <img src="/logotipos/{{ $negocio->logo }}" >
                </div>
                <div>
                    <span class="btn btn-rose btn-round btn-file">
                        <div class="form-group">
                            {!! Form::label('logo', 'Logotipo') !!}
                            {!! Form::file('logo')!!}
                        </div>
                    </span>
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Guardar cambios',['class'=> 'btn btn-primary'])!!}
                <a href = "{{route('negocios.index')}}" class='btn btn-default'>Cancelar</a>
            </div>
        </div>
    </div>
@endsection
