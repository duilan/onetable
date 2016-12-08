@extends('layouts.app')

@section('titulo', 'Tipos de Insumo')

<!-- Main -->
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Tipos de Insumos</div>
        <div class="panel-body">
            <h1>Categorias de Insumo</h1>
            <p>
                <a href="{{ route('insumoTipos.create')}}" class="btn btn-primary"> Crear categoria</a>
            </p>
            <table class="table table-bordered">
                <thead>
                    <th>Nº</th>
                    <th>Nombre</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($insumoTipos as $index => $insumoTipo)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$insumoTipo->nombre}}</td>
                            <td>
                                <a href="{{route('insumoTipos.edit',$insumoTipo->id)}}" class="btn btn-sm btn-default">Editar</a>
                                {!! Form::open(['route' => ['insumoTipos.destroy',$insumoTipo], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                                {!! Form::submit('Eliminar',['class'=> 'btn btn-sm btn-danger'])!!}
                                {!! Form::close() !!}

                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $insumoTipos->render() !!}
        </div>
    </div>
@endsection
