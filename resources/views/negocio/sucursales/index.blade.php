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

                @foreach ($sucursales as $sucursal)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail text-center">
                            <img src="{{url('fotosucursales/'.$sucursal->foto)}}" class="img-responsive">
                            <div class="caption"> <h3>{{$sucursal->nombre}}</h3>
                                @if ($sucursal->user)
                                    <p>Responsable: {{$sucursal->user->name}}</p>
                                @else
                                    <p style="background:red;color:white">Falta asignar responsable</p>
                                @endif
                                <p>{{$sucursal->descripcion}}</p>
                                <p class="btn-group btn-group-sm btn-group-justified">
                                    <a href="{{route('sucursales.show',$sucursal->id)}}" class="btn btn-default">Detalles</a>
                                    <a href="{{route('sucursales.edit',$sucursal->id)}}" class="btn btn-default">Editar</a>
                                </p>
                                <span class="label label-default">{{$sucursal->id}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
