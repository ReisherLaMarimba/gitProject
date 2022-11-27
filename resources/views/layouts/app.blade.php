<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'App Peliculas') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
    
        .container .card-body .card-img{ 
            
   
        }
       
    
        #navbar{
            background-color:#141414 !important;
            
        }
        .a1{
            color: #AAA !important;
            font-family: 'Open Sans', sans-serif;            
        }
        .a1:hover{
            color: #FFF !important;
        }
        .a2{
	        font-weight: normal;
        }
        .div1{
            display:inline-block;
            margin-top: 420px;
            margin-left: 300px;
        }
        .div1 h1{
            font-weight: 600;
	        font-size: 3.12em;
            color: white;
        }
        .div1 p{
            font-weight: bold;
	        font-size: 1.3em;
	        line-height: 1.75em;
	        max-width: 50%;
        }

       
        .navbar-light .navbar-nav .nav-link {
    color: white;
}
        .navbar-light .navbar-nav .nav-link{
            
            background-color:gray;
            
            border:1px solid #000000;
            padding:1px 1px;
            text-decoration:none;
            display:inline-block;
            font-size:15px;
            margin-top:9px;
            border-radius:12px;
        }
    .h-100{
       
    }
    .col-md-8{
display:contents;
}
.navbar-light .navbar-brand:before {
    position: absolute;
  left: 0;
  bottom: 0;
  width: 60px;
  height: 2px;
  content: "";
  background-color: #c50000;

}
.navbar-light .navbar-brand span{
    font-size: 13px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 4px;
  line-height: 3em;
  padding-left: 0.25em;
  color: rgba(0, 0, 0, 0.4);
  padding-bottom: 10px;
  text-decoration:overline;
  text-decoration-color:red;
}
.alt-navbar-light .navbar-brand:before{
    text-align:center;
    left:50%; margin-left:-30p
}


    </style>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/lib...">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href= "scss/_navbar.scss" rel="stylesheet">
</head>
<body>
    <div id="app" class="body">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"  id="navbar">
            <div class="container">
                <a class="navbar-brand a1 a2" href="{{ url('/') }}">
                         {{ config('', 'App De Pelis') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                    <ul class="navbar-nav mr-auto">
                    </ul>

                  
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link a1" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link a1" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                          
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/peliculas/create') }}">
                                        Agregar
                                    </a>
                                  
                                    <a class="dropdown-item" href="{{ url('/usuarios/dashboard') }}">
                                       Panel de admin
                                    </a>
                               

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
        
            @yield('content')
        </main>
    </div>
</body>
</html>
