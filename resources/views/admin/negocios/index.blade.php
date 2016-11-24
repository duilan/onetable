@extends('layouts.app')

@section('titulo', 'Negocios')

<!-- Main -->
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Administración</div>
        <div class="panel-body">
            <h1>Negocios</h1>
            <a href="{{ route('negocios.create')}}" class="btn btn-primary"> Añadir Negocio</a>
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Razon Social</th>
                    <th>Logo</th>
                    <th>Usuario</th>
                    <th>E-mail</th>
                    <th>Pais</th>
                    <th>Estado</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($negocios as $negocio)
                        <tr>
                            <td>{{$negocio->id}}</td>
                            <td>{{$negocio->razonSocial}}</td>
                            <td>{{$negocio->user->name}}</td>
                            <td>{{$negocio->logo}}</td>
                            <td>{{$negocio->email}}</td>
                            <td>{{$negocio->pais->nombre}}</td>
                            <td>{{$negocio->status}}</td>
                            <td>
                                <a href="{{route('negocios.edit',$negocio->id)}}" class="btn btn-sm btn-default">Editar</a>

                                {!! Form::open(['route' => ['negocios.destroy',$negocio], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                                {!! Form::submit('Eliminar',['class'=> 'btn btn-sm btn-danger'])!!}
                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $negocios->render() !!}
        </div>
    </div>
@endsection
