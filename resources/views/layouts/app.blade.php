<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HealthyFood') }}</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body id="app-layout">
    
      
    @include('layouts._admin._nav')
      
    <main>
      @if(Session::has('mensagem'))
      <div class="container">
        <div class="row">
          <div class="card {{Session::get('mensagem')['class']}}">
            <div align="center" class="card-content">
              {{ Session::get('mensagem')['msg'] }}
            </div>
          </div>
        </div>        
      </div>

      @endif
       @yield('content')
    </main>

     @include('layouts._admin._footer')
        
    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>
</body>
</html>
