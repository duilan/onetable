@extends('layouts.app')

@section('titulo', 'Editar Mesa')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Editar mesa</div>
            <div class="panel-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!! Form::open(['route' => ['ajustes.update', $mesa], 'method'=>'PATCH']) !!}

                <div class="form-group">
                    {!! Form::label('identificador', 'Identificador') !!}
                    {!! Form::text('identificador',  $mesa->identificador , ['class'=> 'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('capacidad', 'Capacidad - Asientos') !!}
                    {!! Form::text('capacidad',  $mesa->capacidad , ['class'=> 'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'Estado') !!}
                    {!! Form::select('status', ['libre'=>'Libre','ocupada'=>'Ocupada','fueradeservicio'=>'Fuera de servicio'] ,$mesa->status , ['class'=> 'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Guardar cambios',['class'=> 'btn btn-primary'])!!}
                    <a href = "{{route('ajustes.index')}}" class='btn btn-default'>Cancelar</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    @endsection
