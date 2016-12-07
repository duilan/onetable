@extends('layouts.app')

@section('titulo', 'Sucursales')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Sucursales Vips</div>
            <div class="panel-body">

                <p>
                    <a href="{{ route('sucursales.create')}}" class="btn btn-primary "> Añadir Sucursal</a>
                    {!! $sucursales->render() !!}
                </p>

                <div class="row list-group">
                @foreach ($sucursales as $index => $sucursal)
                    <div class="item  col-xs-4 col-lg-4">
                        <div class="thumbnail text-center">
                            <img class="group list-group-image" src="{{url('fotosucursales/'.$sucursal->foto)}}">
                            <div class="caption">
                                <h3 class="group inner list-group-item-heading">
                                    {{$sucursal->nombre}}
                                </h3>
                                @if ($sucursal->user)
                                    <p>Responsable: {{$sucursal->user->name}}</p>
                                @else
                                    <p style="background:red;color:white">Falta asignar responsable</p>
                                @endif
                                <p class="group inner list-group-item-text " style="min-height:80px;max-height:80px">
                                    {{$sucursal->descripcion}}
                                </p>
                                <p class="btn-group btn-group-sm btn-group-justified">
                                    <a href="{{route('sucursales.show',$sucursal->id)}}" class="btn btn-default">Detalles</a>
                                    <a href="{{route('sucursales.edit',$sucursal->id)}}" class="btn btn-default">Editar</a>
                                </p>
                                <span class="label label-default">{{$index+1}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    @endsection
