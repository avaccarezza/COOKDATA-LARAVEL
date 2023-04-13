<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ URL::asset('img/utilities/favicon.ico')}}"> 
    <title>Cookdata</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm p-0 d-none d-md-block" style="background-color: #F0F0F0;" >
            <div class="container">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/') }}">decidecondatos@cookdata.io</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-dark">(+54) 11 3561 3735</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-dark">(+34) 667 316 307</span>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="{{ URL::asset('img/utilities/headerkitdigital.png')}}" width="100%">
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ URL::asset('img/utilities/logocookdata.png')}}" width="150px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                        </li>
                        @if(Request::is('/')) 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Beneficios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Contactos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Partners</a>
                        </li>
                       @endif
                    </ul>

                    <ul class="navbar-nav ms-auto">     
                    @if(Route::current()->getName() == 'customers_area.index') 
                    <!-- Right Side Of Navbar -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Soporte
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @foreach (Auth::user()->customer->apps as $aplicacion)
                            @if( $aplicacion->type_of_app == 'Soporte')
                            <a class="dropdown-item d-flex justify-content-center pt-2" href="https://cookdata.link/{{Auth::user()->customer->customer}}_APP_{{$aplicacion->app }}" target="blank">
                               {{$aplicacion->app}} 
                            </a>
                            @endif
                            @endforeach
                           
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Informes
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @foreach (Auth::user()->customer->apps as $aplicacion)
                            @if( $aplicacion->type_of_app == 'Informes')
                            <a class="dropdown-item d-flex justify-content-center pt-2" href="https://cookdata.link/{{Auth::user()->customer->customer}}_APP_{{$aplicacion->app }}" target="blank">
                               {{$aplicacion->app}} 
                            </a>
                            @endif
                            @endforeach
                           
                        </div>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Apps Mobile
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @foreach (Auth::user()->customer->apps as $aplicacion)
                            @if( $aplicacion->type_of_app == 'Aplicaciones')
                            <a class="dropdown-item d-flex justify-content-center pt-2" href="https://cookdata.link/{{Auth::user()->customer->customer}}_APP_{{$aplicacion->app }}" target="blank">
                               {{$aplicacion->app}} 
                            </a>
                            @endif
                            @endforeach
                           
                        </div>
                    </li>
                    @endif
                    
                    <!--1- funcion del IF:  muestra el elemento de Panel si el usuario es Admin
                        2- optional() es un helper, que si auth()->user() retorna null la funcion isAdmin() nunca es llamada   --> 
                        @if(optional(auth()->user())->isAdmin())  
                       
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('panel') }}" >Panel</a>
                        </li>
                        @endif
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{  asset(Auth::user()->profile_image)}}" alt="{{ Auth::user()->name }}" class="rounded-circle" width="32" height="32">
                                   
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <div class="card flex-row"><img class="card-img-left example-card-img-responsive rounded-circle m-2" src="{{ asset(Auth::user()->profile_image)}}" alt="{{ Auth::user()->name }}" width="96" height="96"/>
                                        <div class="card-body">
                                          <h4 class="card-title h5 h4-sm">{{ Auth::user()->name }}</h4>
                                          <p class="card-text">{{Auth::user()->email}}</p>
                                          <a href="{{ route('profile.index') }}">
                                            <button type="submit" class="btn btn-dark">
                                                {{ __('Ver perfil') }}
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                        <a class="dropdown-item d-flex justify-content-center pt-2" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <button type="submit" class="btn btn-dark">                                        
                                            {{ __('Cerrar Sesión') }}
                                            </button>
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
            <div class="container-fluid">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @yield('content')
                </div>
        </main>
    </div>
</body>
</html>
