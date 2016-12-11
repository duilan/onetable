@extends('layouts.app')

@section('titulo', 'Editar sucursal')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Editar Sucursal</div>
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
                @if (!$sucursal->user_id)
                    <div class="alert alert-danger">
                        <ul>
                            Esta sucursal aun no tiene responsable asignado , seleccione uno y guarde
                        </ul>
                    </div>
                @endif
                {!! Form::open(['route' => ['sucursales.update', $sucursal], 'method'=>'PATCH' , 'files' =>true]) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre o identificador') !!}
                    {!! Form::text('nombre', $sucursal->nombre , ['class'=> 'form-control' , 'required'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('user_id', 'Usuario responsable') !!}
                    {!! Form::select('user_id', $listaUsuarios , $sucursal->user_id , ['class'=> 'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('coordenadaLatitud', 'Ubicacion') !!}
                    {!! Form::hidden('coordenadaLatitud', $sucursal->coordenadaLatitud , ['class'=> 'form-control' , 'required'])!!}
                    {!! Form::label('coordenadaLongitud', ' ') !!}
                    {!! Form::hidden('coordenadaLongitud', $sucursal->coordenadaLongitud , ['class'=> 'form-control' , 'required'])!!}
                    <div id="map"></div>
                    <input id="buscarUbicacion" class="controls" type="text" placeholder="Buscar">
                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripción') !!}
                    {!! Form::textarea('descripcion', $sucursal->descripcion , ['class'=> 'form-control' , 'required'])!!}
                </div>

                <div class="text-center" data-provides="fileinput">
                    <div class="fileinput-preview fileinput-exists content-foto-sucursal">
                        <img src="/fotosucursales/{{ $sucursal->foto }}">
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
                    autoCenterMarker(10000);
                }
            });
        </script>
    @endsection
