@extends('layouts.app')
@section('content')
<!--====================================================
                       HOME-P
======================================================-->
<div id="home-p" class="home-p pages-head1 text-center">
  <div class="container">
      <h1 class="wow fadeInUp" data-wow-delay="0.1s"><h2>{{Auth::user()->customer->customer}}</h2></h1>
  </div>
  <!--/end container-->
</div>
    <!--====================================================
                      NEWS DETAILS
======================================================-->
<section id="single-news-p1" class="single-news-p1">
  <div class="container">
      <div class="row">

          <!-- left news details -->
          <div class="col-md-8">
              <div class="single-news-p1-cont">
                  <div class="single-news-img">
                      <img src="../img/news/newsgestiondatos.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="single-news-desc">
                      <h3>Por qué la gestión de datos tiene tanto valor a futuro</h3>
                      <ul class="list-inline">
                          <li>Publicado: <span class="text-theme-colored2">07 Junio 2020</span></li>
                          <li>Por: <span class="text-theme-colored2">Martín Carniglia</span></li>
                      </ul>
                      <hr>
                      <div class="bg-light-gray">
                          <p>Cada vez más empresas se animan a dar el salto exponencial, que la explotación de datos habilita. El problema es que la cantidad de recursos formados está muy por debajo de la demanda.</p>
                          <blockquote class="blockquote">
                              <p class="mb-0">Potenciados por la digitalización, los múltiples puntos de contacto que existen entre una marca y su consumidor han incrementado exponencialmente la cantidad de información generada, convirtiendo a la data en un activo
                                  central en la estrategia de cualquier compañía que busque alcanzar una ventaja competitiva a nivel producto, servicios o procesos..</p>
                              <p class="mb-0">Hablamos de Big Data, y necesitamos ingenieros de información. Queremos desarrollar Business Intelligence, y solo podemos hacerlo gracias a los analistas de Datos. Nos entusiasmamos con el potencial del machine learning
                                  o la inteligencia artificial, pero no podremos aplicarla sin el expertise de los Data Scientists.</br>
                                  </br>
                                  Hoy nos encontramos con un panorama a nivel global donde existe un talento excelente especializado en Data Science, pero a la vez muy escaso. América latina, y especialmente Argentina, se ha convertido en un mercado extremadamente atractivo en términos
                                  de costo-eficiencia para empresas de otros países que buscan este tipo de talento. Esto hace que muchas personas especializadas en data y tecnología tengan la oportunidad de trabajar desde sus casas para clientes
                                  en Estados Unidos, Europa o Asia. Entonces, a la escasez y la sobre-demanda, se suma la extremada dificultad para retener este tipo de perfiles.</p>
                              </br>
                              <footer class="blockquote-footer">Ver la nota completa
                                  <cite title="Source Title">en el <a href="https://www.ambito.com/opiniones/empresas/por-que-la-gestion-datos-tiene-tanto-valor-futuro-n5107787" target="_blank">siguiente enlace externo</a></cite>
                              </footer>
                          </blockquote>
                      </div> 
                  </div>
              </div>
              <hr>
          </div>

          <!-- Right news details -->
          <div class="col-md-4">
              <div class="small-news-box">
                  <h3 class="pb-2">Otras noticias</h3>
                  <a href="https://www.america-retail.com/transformacion-digital/transformacion-digital-el-acelerado-crecimiento-de-la-digitalizacion-del-ecommerce-en-argentina/" target="_blank">
                      <div class="right-side-sn-cont">
                          <img src="../img/news/newsright1.jpg" alt="news1" class="img-fluid">
                          <p>Transformación Digital: el crecimiento de la digitalización en Argentina</p>
                          <small><fa class="fa-watch"> 19 junio, 2020</fa></small>
                      </div>
                  </a>
                  <a href="https://espacionegocios.com.ar/mejorar-calidad-relaciones-voz-16010/" target="_blank">
                      <div class="right-side-sn-cont">
                          <img src="../img/news/newsright3.jpg" alt="" class="img-fluid">
                          <p>Cómo mejorar la calidad de tus relaciones personales y laborales</p>
                          <small><fa class="fa-watch"> 19 junio, 2020</fa></small>
                      </div>
                  </a>
                  <a href="https://espacionegocios.com.ar/7-aplicaciones-gestion-de-proyectos-15992/" target="_blank">
                      <div class="right-side-sn-cont">
                          <img src="../img/news/newsright4.jpg" alt="" class="img-fluid">
                          <p>Estas son las 7 aplicaciones de gestión de proyectos más utilizadas</p>
                          <small><fa class="fa-watch"> 17 junio, 2020</fa></small>
                      </div>
                  </a>
                  <a href="https://espacionegocios.com.ar/tendencias-business-intelligence-2020-15160/" target="_blank">
                      <div class="right-side-sn-cont">
                          <img src="../img/news/newsright2.jpg" alt="news2" class="img-fluid">
                          <p>Cuatro tendencias que pisaran fuerte en Business Intelligence durante 2020</p>
                          <small><fa class="fa-watch"> 2 marzo, 2020</fa></small>
                      </div>
                  </a>
              </div>
              <div class="card">
                  <div class="desc-comp-offer-cont">
                  </div>
              </div>
          </div>
      </div>
</section>

@endsection