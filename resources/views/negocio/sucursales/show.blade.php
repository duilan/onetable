@extends('layouts.app')

@section('titulo', 'Detalle sucursal')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Detalle Sucursal</div>
            <div class="panel-body">

                <div class="form-group"><b>Nombre:</b> {{$sucursal->nombre}}</div>
                @if ($sucursal->user)
                    <div class="form-group"><b>Responsable:</b> {{$sucursal->user->name}}</div>
                @else
                    <div class="form-group"><b>Responsable:</b> Sin responsable - <a href="#">Asignar responsable</a> </div>
                @endif
                <div class="form-group"><img src="/fotosucursales/{{ $sucursal->foto }}" class="img-responsive"></div>
                <div class="form-group">
                    {!! Form::label('coordenadaLatitud', 'Ubicacion') !!}
                    {!! Form::hidden('coordenadaLatitud', $sucursal->coordenadaLatitud)!!}
                    {!! Form::label('coordenadaLongitud', ' ') !!}
                    {!! Form::hidden('coordenadaLongitud', $sucursal->coordenadaLongitud)!!}
                    <div id="map"></div>
                </div>
                <a href = "{{route('sucursales.index')}}" class='btn btn-primary'>Regresar</a>
                <a type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#borrarModal">Eliminar</a>

                <!-- Modal -->
                <div class="modal fade" id="borrarModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="ModalLabel">Atención</h4>
                            </div>
                            <div class="modal-body">
                                <h4>¿ Esta seguro que desea eliminar la sucursal <b>{{$sucursal->nombre}}</b> ?</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                {{-- Boton Eliminar --}}
                                {!! Form::open(['route' => ['sucursales.destroy',$sucursal], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                                {!! Form::submit('Sí, Eliminar',['class'=> 'btn btn-danger'])!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script>
            $(function(){
                if ( $("#map").length > 0 ) {
                    iniciarMapa();
                    setExistMarker();
                    autoCenterMarker(10000);
                }
            });


        </script>
    @endsection
