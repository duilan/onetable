@extends('layouts.app')

@section('titulo', 'Mesas')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Validar Reservacion</div>
            <div class="panel-body text-center">
                <h3 class="center">Codigo de reserva: </h3>
                <span id="read" class="center"></span>
                <div  class="text-center video-qrcode" id="reader"></div>
            </div>
        @endsection
        @section('scripts')
            <script>
            $('#reader').html5_qrcode(function(data){
                $('#read').html(data);

                alert('La Reservacion es correcta con codigo: ' + data);

            },
            function(error){
                $('#read_error').html(error);
            }, function(videoError){
                $('#vid_error').html(videoError);
            }
        );
        </script>
    @endsection
