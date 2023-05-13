<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ URL::asset('img/utilities/favicon.ico')}}"> 
    <title>Cookdata</title>
    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="{{ URL::asset('../css/about.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/careers.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/carousel-slider.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/com-soon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/contact.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/faq.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/news.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/pricing.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/project.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/services.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/shop.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/single-product.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/team.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/testimonials.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500" rel="stylesheet">
    <!-- Whatsapp widget -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">



    <!-- Scripts -->
    <script src="{{ URL::asset('../js/custom.js') }}" defer></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<!--Global JavaScript -->
<script src="../js/jquery/jquery.min.js"></script>
<script src="../js/popper/popper.min.js"></script>
<script src="../js/wow/wow.min.js"></script>
<script async src="../js/carousel-slider.js"></script>

<!-- Plugin JavaScript -->
<script src="../js/jquery-easing/jquery.easing.min.js"></script>
<script src={{ URL::asset('../js/custom.js')}}></script>

<!--JS Form -->
<script async src="../js/jquery.validate.min.js"></script>
<script async src="../js/main.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
</head>
<body>

    <div id="app">
        @if(Request::is('/'))
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm p-0 d-none d-md-block position-relative z-3" style="background-color: #F0F0F0;" >
            <div class="container">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="mailto:decidecondatos@cookdata.io">decidecondatos@cookdata.io</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" target="blank" href="https://wa.me/34667316307/">(+54) 11 3561 3735</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" target="blank" href="https://wa.me/34667316307/">(+34) 667 316 307</a>

                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm z-index-3" data-toggle="affix">
            <div class="container">
                <img src="{{ URL::asset('img/utilities/headerkitdigital.png')}}" width="100%">
            </div>
        </nav>
        @endif
        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            
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
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#beneficios">Beneficios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clientes">Clientes</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contactos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWhiteDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Partners
                            </a>
                            <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarWhiteDropdownMenuLink">
                              <li><a class="dropdown-item" href="{{ route('partners_section.index')}}">Agora</a></li> 
                            </ul>
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
                            @foreach (Auth::user()->customer->apps as $app)
                            @if( $app->type_of_app == 'Soporte')
                            <a class="dropdown-item d-flex justify-content-center pt-2" href="https://{{$app->path}}" target="blank">
                                {{$app->app}}
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
                            @foreach (Auth::user()->customer->apps as $app)
                            @if( $app->type_of_app == 'Informes')
                            <a class="dropdown-item d-flex justify-content-center pt-2" href="https://{{$app->path}}" target="blank">
                                {{$app->app}}
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
                            @foreach (Auth::user()->customer->apps as $app)
                            @if( $app->type_of_app == 'Aplicaciones')
                            <a class="dropdown-item d-flex justify-content-center pt-2" href="https://{{$app->path}}" target="blank">
                                {{$app->app}}
                            </a>
                            @endif
                            @endforeach
                        </div>
                      
                    </li>
                   {{-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            prueba
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @foreach (Auth::user()->customers as $customer)
                          
                            <a class="dropdown-item d-flex justify-content-center pt-2" href="https://{{$app->path}}" target="blank">
                                {{$apps = $apps->merge($customer->apps)}}
                            </a>
                         
                            @endforeach
                        </div>
                      
                    </li>--}}
                    @elseif(Route::current()->getName() == 'customers_area.show')
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Soporte
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @foreach (Auth::user()->customers as $customer)
                            @foreach ($customer->apps as $app) 
                            @if( $app->type_of_app == 'Soporte')         
                           <a class="dropdown-item d-flex justify-content-center pt-2" href="https://{{$app->path}}" target="blank">
                            {{$app->app}}
                            </a>
                            @endif
                            @endforeach
                            @endforeach
                        </div>
                      
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Informes
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @foreach (Auth::user()->customers as $customer)
                            @foreach ($customer->apps as $app) 
                            @if( $app->type_of_app == 'Informes')         
                           <a class="dropdown-item d-flex justify-content-center pt-2" href="https://{{$app->path}}" target="blank">
                            {{$app->app}}
                            </a>
                            @endif
                            @endforeach
                            @endforeach
                        </div>
                      
                    </li>
                   <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Apps Mobile
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @foreach (Auth::user()->customers as $customer)
                            @foreach ($customer->apps as $app) 
                            @if( $app->type_of_app == 'Aplicaciones')  
                           <a class="dropdown-item d-flex justify-content-center pt-2" href="https://{{$app->path}}" target="blank">
                            {{$app->app}}
                            </a>
                            @endif
                            @endforeach
                            @endforeach
                        </div>                    
                    </li>                   
                    @endif
   
                    @if(optional(auth()->user())->isConsultant() && Request::is('customers_area/*') )
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Clientes
                        </a>
                        <div class="dropdown-menu dropdown-menu-end"  aria-labelledby="navbarDropdown">
                            
                            @foreach ( Auth::user()->customers as $customer )
                                <a class="dropdown-item d-flex justify-content-center pt-2" href="{{ route('customers_area.show',  $customer->customer) }}"   >
                                    {{ $customer->customer}}
                                </a>
                            @endforeach
                            
                        </div>
                    </li>     
                   @endif
                   {{--@if(optional(auth()->user())->isConsultant() && !Request::is('customers_area/*'))  
                    <li class="nav-item">
                        @foreach ( Auth::user()->customers as $customer )
                            <a class="nav-link" href="{{ route('customers_area.show',  $customer->customer )}}" >Area de consultores</a>
                            @break
                        @endforeach
                        </li>--}} 
                        @if(optional(auth()->user())->isConsultant() && !Request::is('customers_area/*') ) 
                        <li class="nav-item">
                            @foreach ( Auth::user()->customers as $customer )
                            <a class="nav-link" href="{{ route('customers_area.show', $customer->customer) }}" >Area de consultores</a>
                            @break
                            @endforeach
                        </li>
                    @elseif(optional(auth()->user())->isUser() && !Request::is('customers_area') ) 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('customers_area.index') }}" >Area de clientes</a>
                        </li>
                         
                        
                    @endif
                    <!--1- funcion del IF:  muestra el elemento de Panel si el usuario es Admin
                        2- optional() es un helper, que si auth()->user() retorna null la funcion isAdmin() nunca es llamada   --> 
                        @if(optional(auth()->user())->isAdmin())  
                       
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}" >Panel</a>
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
                                            <button type="submit" class="btn btn-warning">
                                                {{ __('Ver perfil') }}
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                        <a class="dropdown-item d-flex justify-content-center pt-2" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <button type="submit" class="btn btn-warning">                                        
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
@unless(Request::is('/') || Request::is('customers_area') || Request::is('customers_area/*') ||  Request::is('panel') )
        <main class="py-4">
            <div class="container-fluid">
                @endunless
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
    @unless(Request::is('/'))
    </div>
    @endunless
 <!--====================================================
                      FOOTER
======================================================-->
<footer>
    <div id="footer-s1" class="footer-s1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About Us -->
                    <div class="col-md-3 col-sm-6">
                        <div>
                            <a href="#topmenu" class="smooth-scrolls">
                                <img src="{{ URL::asset('img/utilities/logo-transparente.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- End About Us -->

                    <!-- Recent News -->
                    <div class="col-md-3 col-sm-6">
                        <div class="heading-footer">
                            <h2>Links útiles</h2>
                        </div>
                        <ul class="list-unstyled link-list">
                            <li>
                                <a class="smooth-scrolls" href="{{ url('/') }}">Inicio</a>
                                <i class="fa fa-angle-up"></i>
                            </li>
                            @if(Request::is('/')) 
                            <li>
                                <a class="smooth-scrolls" href="#servicios">Servicios</a>
                                <i class="fa fa-angle-up"></i>
                            </li>
                            <li>
                                <a class="smooth-scrolls" href="#clientes">Clientes</a>
                                <i class="fa fa-angle-up"></i></i>
                            </li>
                            <li>
                                <a class="smooth-scrolls" href="#beneficios">Beneficios</a>
                                <i class="fa fa-angle-up"></i>
                            </li>
                            <li>
                                <a class="smooth-scrolls" href="#contacto">Contacto</a>
                                <i class="fa fa-angle-up"></i>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#login-modal">Area de Clientes</a>
                            </li>
                            @endif
                            <!-- <li><a href="#">Business Intelligence</a><i class="fa fa-angle-right"></i></li>  hay que arreglar link cuando esté la página -->
                            <!-- <li><a href="#">Contáctanos</a><i class="fa fa-angle-right"></i></li>  -->
                        </ul>
                    </div>
                    <!-- End Recent list -->

                    <!-- Latest Tweets -->
                    <div class="col-md-3 col-sm-6">
                        <div class="heading-footer">
                            <h2>Contáctanos</h2>
                        </div>
                        <address class="address-details-f">
                            <b>España</b><br>
                            Av Condesa de Chinchon, 11<br>
                            28660 Boadilla del Monte<br>
                            Madrid<br>
                            <i class="fa fa-phone"></i> (+34) 667 316 307<br>
                            <i class="fa fa-envelope-o"></i> <a href="mailto:decidecondatos@cookdata.io"
                                class="">decidecondatos@cookdata.io</a>
                        </address>
                        <ul class="list-inline social-icon-f top-data">
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="heading-footer-invisible">
                            <h2><br></h2>
                        </div>
                        <address class="address-details-f">
                            <b>Argentina</b><br>
                            Las Camelias 3324<br>
                            1669 - Pilar<br>
                            Buenos Aires<br>
                            <i class="fa fa-phone"></i> (+54) 11 3561 3735<br>
                            <i class="fa fa-envelope-o"></i> <a href="mailto:decidecondatos@cookdata.io"
                                class="">decidecondatos@cookdata.io</a>
                        </address>
                        <ul class="list-inline social-icon-f top-data">
                        </ul>
                    </div>
                    <!-- End Latest Tweets -->
                </div>
            </div>
            <!--/container -->
        </div>
    </div>

    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="footer-copyrights">
                        <p>Copyright &copy; 2021 All Rights Reserved by Cookdata.</br><a
                                href="{{ route('politics.index')}}">Privacy Policy</a> <a
                                href="{{ route('terms.index')}}">Terms of Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="home" role="button">
    <i class="fa fa-angle-up"></i>
</a> -->
</footer>
</body>
</html>
