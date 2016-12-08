@extends('layouts.app')

@section('titulo', 'Negocios')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Negocios</div>
            <div class="panel-body">
                <p>
                    <a href="{{ route('negocios.create')}}" class="btn btn-primary "> Añadir Negocio</a>
                    {!! $negocios->render() !!}
                </p>                
                @foreach ($negocios as $negocio)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail text-center">
                            <p class="text-right">
                                <span class="label label-info">{{$negocio->id}}</span>
                            </p>
                            <img src="{{url('logotipos/'.$negocio->logo)}}" class="img-responsive">
                            <div class="caption"> <h3>{{$negocio->razonSocial}}</h3>
                                <p>Responsable: {{$negocio->user->name}}</p>
                                <p>E-mail: {{$negocio->email}}</p>
                                <p>Pais: {{$negocio->pais->nombre}}</p>
                                <p class="btn-group btn-group-sm btn-group-justified">
                                    <a href="{{route('negocios.show',$negocio->id)}}" class="btn btn-default">Detalles</a>
                                    <a href="{{route('negocios.edit',$negocio->id)}}" class="btn btn-default">Editar</a>
                                </p>
                                <span class="label label-default">{{$negocio->status}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
