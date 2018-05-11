
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body><nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">FaceComments</a>
        <div class="collapse navbar-collapse" id="navbarColor01">
            @if (Route::has('login'))
                <div class="top-right links">
                    <ul class="navbar-nav mr-auto">

                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/todo') }}">Home</a>
                    </li >    
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li >
                    <li class="nav-item">    
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                     </li >   
                    @endauth
                    
                        <ul class="navbar-nav mr-auto">
                 </div>
                </div>

            @endif
</nav>
<img src="images/faces.jpg" width="100%" height="90%">
@include('includes.footer')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 

<body>
</html>
