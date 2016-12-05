<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> @yield('titulo') | {{ config('app.name', 'Onetable') }}</title>
  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">
  <link href="{{asset('css/main.css')}}" rel="stylesheet">

  <!-- <link href="/css/material-kit.css" rel="stylesheet">
  <link href="/css/material-dashboard.css" rel="stylesheet"> -->

  <!-- Scripts -->
  <script src="/js/jquery.min.js"></script>
  <script>
    window.Onetable = {!! json_encode(['csrfToken' => csrf_token()]) !!}
  </script>
</head>
<body>
  <div id="app">
    @include('menu.index')
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <script src="/js/app.js"></script>
  <script src="/js/material.min.js"></script>
  <script src="/js/material-kit.js"></script>
  <script src="/js/mapa.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3Cg477hprxbKw-3bOhVM0vJyBH_i_FCk&libraries=places"></script>
  @yield('scripts')
</body>
</html>
