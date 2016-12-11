@extends('layouts.app')

@section('titulo', 'Añadir sucursal')

<!-- Main -->
@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Añadir Sucursal</div>
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
                {!! Form::open(['route' => 'sucursales.store', 'method'=>'POST' , 'files' => true]) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre o identificador') !!}
                    {!! Form::text('nombre', null , ['class'=> 'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('coordenadaLatitud', 'Ubicacion') !!}
                    {!! Form::hidden('coordenadaLatitud', null , ['class'=> 'form-control'])!!}
                    {!! Form::label('coordenadaLongitud', ' ') !!}
                    {!! Form::hidden('coordenadaLongitud', null , ['class'=> 'form-control'])!!}
                    <div id="map"></div>
                    <input id="buscarUbicacion" class="controls" type="text" placeholder="Buscar">
                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripción') !!}
                    {!! Form::textarea('descripcion', null , ['class'=> 'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('foto', 'Fotografia') !!}
                    {!! Form::file('foto')!!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Añadir Negocio',['class'=> 'btn btn-primary'])!!}
                    <a href = "{{route('sucursales.index')}}" class='btn btn-default'>Cancelar</a>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
@endsection

@section('scripts')
    <script>
        $(function(){
            if ( $("#map").length > 0 ) {
                iniciarMapa();
                addListenerMarker();
                searchBox();
                setExistMarker();
            }
        });
    </script>
@endsection
