@extends('layouts.app')

@section('titulo', 'Detalle Negocio')

<!-- Main -->
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Detalle Negocio</div>
        <div class="panel-body">
            <div class="form-group"><b>logo:</b> <img src="/logotipos/{{ $negocio->logo}}" class="img-responsive"></div>
            <div class="form-group"><b>pais:</b> {{$negocio->pais->nombre}}</div>
            <div class="form-group"><b>user:</b> {{$negocio->user->name}}</div>
            <div class="form-group"><b>razonSocial:</b> {{$negocio->razonSocial}}</div>
            <div class="form-group"><b>rfc:</b> {{$negocio->rfc}}</div>
            <div class="form-group"><b>email:</b> {{$negocio->email}}</div>
            <div class="form-group"><b>calle</b> {{$negocio->calle}}</div>
            <div class="form-group"><b>numeroExterior:</b> {{$negocio->numeroExterior}}</div>
            <div class="form-group"><b>numeroInterior:</b> {{$negocio->numeroInterior}}</div>
            <div class="form-group"><b>colonia:</b> {{$negocio->colonia}}</div>
            <div class="form-group"><b>delegacion:</b> {{$negocio->delegacion}}</div>
            <div class="form-group"><b>estado:</b> {{$negocio->estado}}</div>
            <div class="form-group"><b>codigoPostal:</b> {{$negocio->codigoPostal}}</div>
            <div class="form-group"><b>status:</b> {{$negocio->status}}</div>
            <a href = "{{route('negocios.index')}}" class='btn btn-primary'>Regresar</a>
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
                            <h4>¿ Esta seguro que desea eliminar el negocio <b>{{$negocio->razonSocial}}</b> ?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            {{-- Boton Eliminar --}}
                            {!! Form::open(['route' => ['negocios.destroy',$negocio], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                            {!! Form::submit('Sí, Eliminar',['class'=> 'btn btn-danger'])!!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
