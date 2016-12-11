@extends('layouts.app')

@section('titulo', 'Añadir Negocio')

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
            <h1>Añadir Negocio</h1>
            {!! Form::open(['route' => 'negocios.store', 'method'=>'POST' , 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('razonSocial', 'Nombre/Razon Social') !!}
                {!! Form::text('razonSocial', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('rfc', 'RFC') !!}
                {!! Form::text('rfc', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('calle', 'Calle') !!}
                {!! Form::text('calle', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('numeroExterior', 'Nº Exterior') !!}
                {!! Form::text('numeroExterior', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('numeroInterior', 'Nº Interior') !!}
                {!! Form::text('numeroInterior', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('colonia', 'Colonia') !!}
                {!! Form::text('colonia', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('delegacion', 'Delegación/Municipio') !!}
                {!! Form::text('delegacion', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('estado', 'Estado/Localidad') !!}
                {!! Form::text('estado', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('codigoPostal', 'Codigo postal') !!}
                {!! Form::text('codigoPostal', null , ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('pais_id', 'pais') !!}
                {!! Form::select('pais_id', $listaPaises , null, ['class'=> 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('user_id', 'Usuario responsable*') !!}
                {!! Form::select('user_id', $listaUsuarios , null, ['class'=> 'form-control'])!!}
            </div>

            <div class="text-center" data-provides="fileinput">
                <div class="fileinput-preview fileinput-exists content-logo">
                    <img src="/images/image_placeholder.jpg">
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
                {!! Form::submit('Añadir Negocio',['class'=> 'btn btn-primary'])!!}
                <a href = "{{route('negocios.index')}}" class='btn btn-default'>Cancelar</a>
            </div>

            {!! Form::close() !!}
            <smal>*Usuario responsable : Solo se muestran los usuarios con rol Negocio</smal>
        </div>
    </div>
@endsection
