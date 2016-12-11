@extends('layouts.app')

@section('titulo', 'Insumos')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Insumos</div>
            <div class="panel-body">
                <p>
                    <a href="{{ route('insumos.create')}}" class="btn btn-primary"> Crear Insumo</a>
                </p>
                @if (!count($insumos))
                    <div class="alert alert-info">
                        No ha registrado insumos
                    </div>
                @else
                    <table class="table table-bordered text-center">
                        <thead>
                            <th>Nº</th>
                            <th>Nombre</th>
                            <th>Foto</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </thead>
                        <tbody>
                            @foreach ($insumos as $index => $insumo)
                                <tr>
                                    <td>{{++$index}}</td>
                                    <td>{{$insumo->nombre}}</td>
                                    <td><img class="thumbnail-foto-insumo" src="{{url('fotoinsumos/'.$insumo->foto)}}"></td>
                                    <td>{{$insumo->descripcion}}</td>
                                    <td>${{$insumo->precio}}</td>
                                    <td>
                                        <a href="{{route('insumos.edit',$insumo->id)}}" class="btn btn-sm btn-default">Editar</a>
                                        {!! Form::open(['route' => ['insumos.destroy',$insumo], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                                        {!! Form::submit('Eliminar',['class'=> 'btn btn-sm btn-danger'])!!}
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {!! $insumos->render() !!}
                @endif
            </div>
        </div>
    @endsection
