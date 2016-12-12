@extends('layouts.app')

@section('titulo', 'Ajustes')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Ajustes de mesas</div>
            <div class="panel-body">
                <p>
                    <a href="{{ route('mesas.create')}}" class="btn btn-primary"> Añadir Mesa</a>
                </p>
                <table class="table table-bordered">
                  <thead>
                    <th>Nº</th>
                    <th>Identificador</th>
                    <th>Capacidad</th>
                    <th>Estatus</th>
                    <th>Accion</th>
                  </thead>
                  <tbody>
                    @foreach ($mesas as $index => $mesa)
                      <tr>
                        <td>{{++$index}}</td>
                        <td>{{$mesa->identificador}}</td>
                        <td>{{$mesa->capacidad}}</td>
                        <td>{{$mesa->status}}</td>
                        <td>
                          <a href="{{ route('mesas.edit', $mesa->id)}}" class="btn btn-sm btn-info">Editar</a>
                          {!! Form::open(['route' => ['mesas.destroy',$mesa], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                          {!! Form::submit('Eliminar',['class'=> 'btn btn-sm btn-danger'])!!}
                          {!! Form::close() !!}
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                {!! $mesas->render() !!}
            </div>
        </div>
    @endsection
