@extends('layouts.app')

@section('titulo', 'Paises')

<!-- Main -->
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Administración</div>
        <div class="panel-body">
            <h1>Paises</h1>
            <a href="{{ route('paises.create')}}" class="btn btn-primary"> Añadir Pais</a>
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($paises as $pais)
                        <tr>
                            <td>{{$pais->id}}</td>
                            <td>{{$pais->nombre}}</td>
                            <td>
                                <a href="{{route('paises.edit',$pais->id)}}" class="btn btn-sm btn-default">Editar</a>                                
                                {!! Form::open(['route' => ['paises.destroy',$pais], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                                {!! Form::submit('Eliminar',['class'=> 'btn btn-sm btn-danger'])!!}
                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $paises->render() !!}
        </div>
    </div>
@endsection
