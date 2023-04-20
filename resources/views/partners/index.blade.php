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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::asset('img/utilities/logocookdata.png')}}" width="150px">
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
            <a class="navbar-brand navbar-nav mx-auto" href="{{ url('/') }}">
                <img src="{{ URL::asset('img/utilities/logo-agora.png')}}" width="100px">
            </a>
        </nav>

         <!-- section 1-->
         <div class="row">
            <div class="col-md-2 bg-white"></div>
                <div class="col-md-8 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-1.png') }}" alt="seccion1" class="seccion-partners" width="1290"> 
                </div>
            <div class="col-md-2 bg-white"></div>
        </div>
         <!-- section 2-->
         <div class="row">
            <div class="col-md-2 fondo-4"></div>
                <div class="col-md-8 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-2.png') }}" alt="seccion2" class="seccion-partners"  width="1290" > 
                </div>
            <div class="col-md-2 fondo-4"></div>
        </div>
         <!-- section 3-->
         <div class="row">
            <div class="col-md-2 bg-white"></div>
                <div class="col-md-8 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-3.png') }}" alt="seccion3" class="seccion-partners" width="1290" > 
                </div>
            <div class="col-md-2 bg-white"></div>
        </div>
         <!-- section 4-->
         <div class="row">
            <div class="col-md-2 fondo-4"></div>
                <div class="col-md-8 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-4.png') }}" alt="seccion4" class="seccion-partners" width="1290" > 
                </div>
            <div class="col-md-2 fondo-4"></div>
        </div>
        <!-- section 5-->
        <div class="row">
            <div class="col-md-2 fondo-5"></div>
                <div class="col-md-8 p-0">
                    <img src="{{ URL::asset('img/partners/seccion-5.png') }}" alt="seccion5" class="seccion-partners" width="1290" > 
                </div>
            <div class="col-md-2 fondo-5"></div>
        </div>

       <!-- formulario-->
       <a id="formulario-partners"></a>
       <div class="container p-5">
        <div class="row justify-content-center">           
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-12">
                        <img src="{{ URL::asset('img/partners/form-partners.png')}}" alt="form-partners" class="img-fluid" >
                    </div>
                    <div class="col-md-6">  
        <form action=" {{ route('hablemos.store') }}" class="mb-5" method="post" id="contactForm" name="contactForm">
            @csrf
            <div class="row">
                <input type="hidden" name="id_partner">
                    <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="nombre" id="name" placeholder="Nombre y apellidos" required>
                @error('nombre')
                <p><strong>{{$message}}</strong></p>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="col-md-12  form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
              @error('email')
              <p><strong>{{$message}}</strong></p>
              @enderror
            </div>
            <div class="row">
              <div class="col-md-12  form-group">
                <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
              </div>
            </div>
            <div class="row">
            <label  class="tit-form-partner">Tipo de contacto</label>
                <div class="wrapper-contacto col-md-12  form-group"> 
                <input type="radio" name="contacto" id="option-1" value="Distribuidor" checked>
                <input type="radio" name="contacto" id="option-2" value="Cliente">
                    <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                        <span>Distribuidor</span>
                    </label>
                    <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                        <span>Cliente</span>
                    </label>
                </div>
            </div>
            <hr style="border-top:1px solid #ccc";/> 
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Empresa">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo">
              </div>
            </div>
            <div class="row">
            <label  class="tit-form-partner">Selecciona una provincia</label>
              <div class="col-md-12 form-group">
                <select name="provincia" class="select-form-partner custom-select">
                <option selected disabled='disabled'>Provincia</option>
                <option> Madrid </option>
                {{-- <?php foreach($provincias as $provincia): ?>
                    <option> <?=$provincia?> </option>
                    <?php endforeach; ?>--}}
                </select>
              </div>
            </div>
            <hr style="border-top:1px solid #ccc";/> 
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="poblacion" id="poblacion" placeholder="Poblacion">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" placeholder="Codigo Postal">
              </div>
            </div>
            <div class="row">
                <label  class="tit-form-partner">Servicio de interés</label>
                <div class="wrapper-asunto col-md-12  form-group"> 
                    <input type="radio" name="asunto" id="option-3" value="Datawow Saas" checked>
                    <input type="radio" name="asunto" id="option-4" value="Desarrollo a Medida">
                        <label for="option-3" class="option option-3">
                        <div class="dot"></div>
                        <span>Datawow SaaS</span>
                        </label>
                        <label for="option-4" class="option option-4">
                            <div class="dot"></div>
                        <span>Desarrollo a Medida</span>
                        </label>
                </div>
            </div>     
            <hr style="border-top:1px solid #ccc";/>       
             <div class="row">
              <div class="col-md-12 form-group">
                <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="7" maxlength="250" placeholder="Comentanos acerca de tu interés:" required></textarea>
              </div>
              @error('mensaje')
              <p><strong>{{$message}}</strong></p>
              @enderror
            </div>  
            <div class="row">
                <div class="col-12">
                <input type="submit" value="Enviar Mensaje" class="form-btn" name="enviar">
              <span class="submitting"></span>
             
              </div>
            </div>
          </form>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>
