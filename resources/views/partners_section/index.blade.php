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
    <link rel="stylesheet" href="{{ URL::asset('../css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/news.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/shop.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/about.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/careers.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/services.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

</head>
<body>
    <!-- boton flotante -->
    <a href="#formulario-partners" class="btn-flotante">Hablemos</a>

    <div id="app">
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
       
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ URL::asset('img/utilities/logocookdata.png')}}" width="150px">
                </a>
                <a class="navbar-brand mx-auto" href="{{ url('/') }}">
                    <img src="{{ URL::asset('img/utilities/logo-agora.png')}}" width="100px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">  
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                </ul>
            </div>
        </nav>

         <!-- section 1-->
         <div class="row">
            <div class="col-md-2  bg-white"></div>
                <div class="col-md-8 col-sm-12 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-1.png') }}" alt="seccion1" class="seccion-partners" width="100%"> 
                </div>
            <div class="col-md-2 bg-white"></div>
        </div>
         <!-- section 2-->
         <div class="row">
            <div class="col-md-2 fondo-4"></div>
                <div class="col-md-8 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-2.png') }}" alt="seccion2" class="seccion-partners"  width="100%" > 
                </div>
            <div class="col-md-2 fondo-4"></div>
        </div>
         <!-- section 3-->
         <div class="row">
            <div class="col-md-2 bg-white"></div>
                <div class="col-md-8 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-3.png') }}" alt="seccion3" class="seccion-partners" width="100%" > 
                </div>
            <div class="col-md-2 bg-white"></div>
        </div>
         <!-- section 4-->
         <div class="row">
            <div class="col-md-2 fondo-4"></div>
                <div class="col-md-8 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-4.png') }}" alt="seccion4" class="seccion-partners" width="100%" > 
                </div>
            <div class="col-md-2 fondo-4"></div>
        </div>
        <!-- section 5-->
        <div class="row">
            <div class="col-md-2 fondo-5"></div>
                <div class="col-md-8 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-5.png') }}" alt="seccion5" class="seccion-partners" width="100%" > 
                </div>
            <div class="col-md-2 fondo-5"></div>
        </div>

<a id="formulario-partners"></a>
<div class="container p-5">
<div class="card mb-3">
    <div class="card-body">
    
        <div class="row">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                <img  src="{{ URL::asset('img/partners/form-partners.png')}}" alt="form-partners" class="img-fluid" style="height: 700px;">
            </div>
            <div class="col-md-6 pt-3 pb-3">                
                <form action=" {{ route('hablemos.store') }}" class="mb-5" method="post" id="contactForm" name="contactForm">
                @csrf
                <div class="row mb-3">
                    <input type="hidden" name="id_partner">
                    <label class="col-md-3 col-form-label text-md-end">{{ __('Nombre y apellidos') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="nombre" required>
                        @error('nombre')
                        <p><strong>{{$message}}</strong></p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label text-md-end">{{ __('Email') }}</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" id="email"  required>
                    </div>
                    @error('email')
                    <p><strong>{{$message}}</strong></p>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label text-md-end">{{ __('Teléfono') }}</label>
                    <div class="col-md-6">
                        <input input type="tel" class="form-control" name="telefono" id="telefono" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label text-md-end">{{ __('Tipo de contacto') }}</label>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example" name="contacto" required>
                            <option value="" selected disabled='disabled'>Selecciona un tipo de contacto</option>
                            @foreach($contactos as $contacto)
                                <option value="{{$contacto}}"> {{$contacto}} </option>
                            @endforeach 
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label text-md-end">{{ __('Empresa') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="empresa" id="empresa" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label text-md-end">{{ __('Cargo') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="cargo" id="cargo" required >
                    </div>
                </div>
                       <!--input province-->
                       <div class="row mb-3">
                        <label class="col-md-3 col-form-label text-md-end">{{ __('Provincia') }}</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="provincia" required>    
                                <option value="" selected disabled='disabled'>Selecciona una provincia</option>
                                    @foreach($provincias as $provincia)
                                        <option value="{{$provincia}}"> {{$provincia}} </option>
                                    @endforeach 
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label text-md-end">{{ __('Poblacion') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="poblacion" id="poblacion" required>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label text-md-end">{{ __('Codigo postal') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label text-md-end">{{ __('Servicio de interes') }}</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="asunto" required>   
                                <option value="" selected disabled='disabled'>Selecciona un servicio de interes</option>
                                @foreach($asuntos as $asunto)
                                    <option value="{{$asunto}}"> {{$asunto}} </option>
                                @endforeach
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label text-md-end">{{ __('Comentarios') }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="mensaje" id="mensaje" cols="40" rows="4" maxlength="250" placeholder="Comentanos acerca de tu interés:" required></textarea>
                        </div>
                    </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-warning">
                            {{ __('Enviar mensaje') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

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
