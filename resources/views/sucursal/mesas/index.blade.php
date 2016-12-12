@extends('layouts.app')

@section('titulo', 'Mesas')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Mesas</div>
            <div class="panel-body">
                <span class="label label-success">Libre</span>
                <span class="label label-warning">Reservada</span>
                <span class="label label-danger">Ocupada</span>
                <span class="label label-default">Fuera de servicio</span>
                <div class="row">
                    @foreach ($mesas as $index => $mesa)
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                            <div class="content-mesa">
                                <div class=" mesa {{ 'mesa-'.$mesa->status}}">
                                    @if ($mesa->status=='reservada')
                                        <a href="{{route('mesas.show',$mesa->id)}}" class="btn mesa">{{$mesa->identificador}}</a>
                                    @else
                                        <a class="btn " data-toggle="modal" data-target="#editaMesa{{$mesa->id}}">{{$mesa->identificador}}</a>
                                    @endif
                                </div>
                                <div class="caption-mesa">
                                    <span>{{ $mesa->capacidad }} Sillas</span>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="editaMesa{{$mesa->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="ModalLabel">Editar estado de la mesa</h4>
                                    </div>
                                    <div class="modal-body">
                                        {!! Form::open(['route' => ['mesas.update',$mesa], 'method'=>'PATCH', 'class'=>'form-delete']) !!}
                                        <div class="form-group">
                                            {!! Form::label('status', 'Estado') !!}
                                            {!! Form::select('status', ['libre'=>'Libre','ocupada'=>'Ocupada','fueradeservicio'=>'Fuera de servicio'] ,$mesa->status , ['class'=> 'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::submit('Guardar',['class'=> 'btn btn-primary'])!!}
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
