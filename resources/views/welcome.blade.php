@extends('layouts.app')
@section('content')
       
  
<!--====================================================
                         HOME
======================================================-->
<a id="topmenu"></a>
<section id="home">
       <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
           <!-- Carousel items -->
           <div class="carousel-inner">
               <div class="carousel-item active slides">
                   <div class="overlay"></div>
                   <div class="slide-1"></div>
                   <div class="hero">
                       <hgroup class="wow fadeInUp">
                           <h1>Decide con <span><a href="" class="typewrite" data-period="2000" data-type='[" Datos"]'>
                       <span class="wrap"></span></a>
                               </span>
                           </h1>
                           <h3>Toda la información de tu negocio en tiempo real<br> Accede desde una plataforma única en cualquier<br> momento y desde cualquier lugar</h3>
                       </hgroup>
                       <a href="#contactanosform" class="smooth-scrolls" style=text-decoration:none><button class="btn btn-general btn-green wow fadeInUp btnMovementTransition">Hablemos</button></a>
                   </div>
               </div>
           </div>
       </div>
   </section>

<!--====================================================
                        ABOUT
======================================================-->
<section id="about" class="career-p1 about">
    <!-- titulo -->
    <div class="container">
        <div class="row title-bar">
            <div class="col-md-12">
                <h1 class="wow fadeInUp">INTELIGENCIA DE NEGOCIOS | EL PODER DE LOS DATOS</h1>
                <div class="heading-border"></div>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Aplicamos tecnología que nos permite extraer los datos de los sistemas de gestión de tu empresa de forma simple y rápida. Los transformamos y convertimos en información relevante, te los facilitamos para su análisis de forma clara
                    y visualmente atractiva, para que puedas aprovechar todo el potencial de la información y convertirlos en conocimiento para toda tu organización.</br><b>Transforma la gestión de tu empresa y facilita el acceso a la información a todo tu equipo para tomar mejores decisiones</b></p>
            </div>
        </div>
    </div>
</section>
<!-- termina titulo -->

<!--====================================================
              BANNER BAR DATA DRIVEN
======================================================-->
<div class="overlay-thought"></div>
<section class="bg-parallax thought-bg">
<section id="about" class="career-p1 about">
    <!-- titulo -->
    <div class="container">
        <div class="row title-bar-though">
            <div class="col-md-12">
                <h1 class="wow fadeInUp">BAR DATA DRIVEN</h1>
                <p class="wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="wow fadeInUp">Inteligencia de negocios, la solución integral para mejorar los resultados de tu negocio</h2>
                </p>
                <div class="title-but"><button onclick="window.location.href='{{route('partners.index')}}'" class="btnthough btn btn-general btn-green" role="button">Conoce más</button></div>
            </div>
        </div>
    </div>
</section>
</section>

<!--====================================================
                 ABOUT-P3
======================================================-->
<a id="servicios"></a>
<section id="about" class="career-p1 about">
    <div class="container">
        <div class="row title-bar">
            <div class="col-md-12">
                <h1 class="wow fadeInUp">Desde la captura del dato, al más completo análisis de negocio</h1>
                <div class="heading-border"></div>
            </div>
        </div>
    </div>
</section>
<section id="story" class="about-p3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="story-desc">
                    <h3>VISUAL DATA | BUSINESS INTELLIGENCE</h3>
                    <div class="heading-border-light"></div>
                    <p>Respuestas rápidas a preguntas de negocio: Para poder tomar decisiones en el momento indicado es importante contar con la información a la mano, de manera sencilla y no perder tiempo en buscar y consolidar datos. Gracias al BI
                        puedes tener las respuestas en minutos de manera clara y concisa por medio de reportes de indicadores y tableros de información gráfica.<br>
                        <br><b>Unifica la información de toda la empresa en una plataforma única y multiplica tus oportunidades de negocio</b></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-himg">
                    <img src="img/home/aboutimage1-min.jpg" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="story-himg story-himg-middle-u">
                    <img src="img/home/aboutimage2-min.jpg" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-desc story-desc-middle">
                    <h3>DATA BRIDGE | INTEGRACIÓN DE SISTEMAS</h3>
                    <div class="heading-border-light"></div>
                    <p><b>Integre sus aplicaciones y datos, donde quiera que residan.</b></br>Conectamos de forma segura sistemas on-premises y basados en la nube.</br>Transformamos y modelamos los datos creando un entorno único donde poder analizar
                        todos los procesos de la empresa desde una perspectiva unificada.</br>
                        <br><b>Ahorra tiempo y dinero en la recopilación de datos y en la generación de informes. Todos los procesos de información totalmente automatizados y actualizados como lo necesites</b></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-himg story-himg-middle-l">
                    <img src="img/home/aboutimage2-min.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="story-desc">
                    <h3>DATA DRIVEN | CONSULTORIA GESTIÓN DE DATOS</h3>
                    <div class="heading-border-light"></div>
                    <p><b>Garantiza la calidad de los Datos y Genera una ventaja competitiva.</b></br>Te acompañamos en todo el proceso, desde la captura del dato al más complejo análisis de negocio. Convertimos tu compañía en una auténtica empresa Data
                        Driven sacando el máximo valor a todos los datos obtenidos en las distintas áreas de gestión, mejorando las capacidades de tu equipo en el manejo de la información y tomando decisiones basadas en datos.</br>
                        <br><b>Alinea los tres ejes de la transformación digital: Personas, Procesos y Sistemas y multiplica los beneficios de tu inversión en tecnología</b></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-himg">
                    <img src="img/home/aboutimage3-min.jpg" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--====================================================
               SERVICE-HOME
======================================================-->
<a id="beneficios"></a>
<section id="service-h">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="service-himg">
                    <iframe src="https://www.youtube.com/embed/ajBek9CWklE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-h-desc">
                    <h3>SUMATE A LOS BENEFICIOS DEL BUSINESS INTELLIGENCE</h3>
                    <div class="heading-border-light"></div>
                    <p>La tecnología es un aliado para ayudar a las empresas a lograr el crecimiento y rentabilidad esperadas, la combinación de los distintos sistemas de gestión y los beneficios de la inteligencia de negocios son el complemento
                        perfecto para que lleves a tu empresa a <b>niveles más altos de productividad y rentabilidad</b> a través de la toma de decisiones basadas en información.
                    </p>
                    <h5><br>AGILIDAD</h5>
                    <div class="heading-border-lightx2"></div>
                    <p>Haz foco en los <b>datos más relevantes</b> sin necesidad de revisar grandes cantidades de información, para poder tomar decisiones en el momento indicado es importante contar con la información a la mano de <b>manera sencilla</b>                                        y no perder tiempo en buscar y consolidar datos. Gracias al BI puedes tener las respuestas en minutos de manera clara y concisa. </p>
                    <h5><br>CONTROL</h5>
                    <div class="heading-border-lightx2"></div>
                    <p><b>Mejora la eficiencia de los procesos</b>, crea indicadores de gestión que te permitan medir los resultados de cada área y visualizarlos mediante atractivos tableros de control, que te permitan detectar rápidamente
                        las desviaciones, <b>distribuye la información de forma unificada para todo tu equipo</b> y facilita la toma de medidas correctivas con inmediatez. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====================================================
                   ABOUT-P2
======================================================-->
<section class="about-p2 bg-gradiant">
    <div class="container-fluid">
        <div class="row">
            <div class="about-p2-heading">
                <h1 class="cl-white">Toma decisiones inteligentes</h1>
                <div class="heading-border-light bg-white"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="about-p2-cont cl-white">
                    <img src="img/home/decisionesinteligentes-min.jpg" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-p2-cont cl-white wow fadeInUp" data-wow-delay="0.3s">
                    <h5>Reduce costes</h5>
                    <p class="cl-white"><br>Reduce tus <b>costes directos</b> e <b>indirectos</b>, los primeros asociados al manejo de la información de la empresa minimizando el tiempo al tratamiento y consolidación de datos y a las tareas de elaboración de reportes
                        por personal ejecutivo, los segundos derivados de un mejor análisis de control de gestión en tiempo real que permita identificar las oportunidades de mejora con inmediatez.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-p2-cont cl-white wow fadeInUp" data-wow-delay="0.5s">
                    <h5>Da un salto de calidad</h5>
                    <p class="cl-white">Potencia el uso adecuado de las herramientas de inteligencia de negocios, <b>detecta oportunidades de mejora</b>, analiza tendencias y conoce mejor a tus clientes y su comportamiento. <b>La combinación adecuada de tecnología y análisis de información puede marcar una gran diferencia</b>                            entre una empresa que logra el crecimiento y una que no lo hace, entre un servicio al cliente de excelencia o uno deficiente, entre un manejo de inventarios eficiente y la pérdida de dinero y recursos, entre el éxito o fracaso
                        de una organización.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ====================================================
                  SLIDER CLIENTES
======================================================-->
<div class="brands">
    <div class="container">
        <div class="row">
            <iframe src="slider/slider.html" width="100%" height="100px" frameborder="none"></iframe>
        </div>
    </div>
</div>
<!-- ====================================================
                  CLIENT
======================================================-->
<a id="clientes"></a>
<section id="client" class="client">
    <div class="container">
        <div class="row title-bar">
            <div class="col-md-12">
                <h1 class="wow fadeInUp">CUSTOMER SUCCESS</h1>
                <div class="heading-border"></div>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Clientes que ya están experimentando los beneficios de utilizar herramientas de inteligencia de negocios en la gestión de su negocio</p>
            </div>
        </div>
        <div class="container">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <p>Integración de sistemas on premise y cloud de cuatro ERP diferentes. Desarrollo de tableros de control de gestión para grupo gastronomico multimarca operador de aeropuertos en argentina gerenciador de marcas Hard Rock Café, LePain Quotidien, KFC, Havanna Café, Natural Market,<br>Alma Café y La Strada</p>
                            <img src="img/client/arribos-min.jpg">
                            <div id="image-caption">Grupo Arribos</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Consolidación de datos de cuatro puntos de venta de gastronomía y cinco tiendas retail, implementación ERP de gestión compras y contabilidad. Desarrollo de tableros de control operativos</p>
                            <img src="img/client/hrdcafe-min.jpg" class="img-fluid">
                            <div id="image-caption">Hard Rock Café</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Parrilla líder en Buenos Aires con presencia en ocho países y más de quince establecimientos en Latino América. Diseño de tableros de control de ventas. Consultoría de gestión Data Driven</p>
                            <img src="img/client/lacabrera-min.jpg" class="img-fluid">
                            <div id="image-caption">La Cabrera</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Cadena de steakhouse americana con más de un millar de establecimientos, diseño de tableros de control de gestión directiva y consolidación de información con otros establecimientos del grupo de la marca Fausto.</p>
                            <img src="img/client/outback-min.jpg" class="img-fluid">
                            <div id="image-caption">Outback</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Fabricante e importador mayorista de material de electrónica de consumo a grandes cadenas de distribución. Tablero de gestión comercial con análisis de las líneas de producto. Desarrollo de plataforma de recolección de datos y análisis de trade marketing para control de posicionamiento de producto en los distribuidores.</p>
                            <img src="img/client/tagwood-min.jpg" class="img-fluid">
                            <div id="image-caption">Tagwood</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Distribuidor de material de construcción con presencia en Buenos Aires, desarrollo de tableros de gestión comercial, compras, stocks, finanzas y dashboard dirección.</p>
                            <img src="img/client/construnort-min.jpg" class="img-fluid">
                            <div id="image-caption">Construnort</div>
                        </div>
                    </div>
                </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class='fa fa-arrow-left'></i> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <i class='fa fa-arrow-right'></i> </a>
            </div>
        </div>
    </div>
</section>

<!--====================================================
                CONTACT HOME
======================================================-->
<a id="contacto"></a>
<div class="overlay-contact-h" id="contactanosform"></div>
<section id="contact-h" class="bg-parallax contact-h-bg">
    <div class="content">
        <div class="container">
            <div class="row align-items-stretch justify-content-center no-gutters">
            <div class="col-md-12">
                <div class="form h-100 contact-wrap p-5">
                <h3 class="text-center">Continuemos la conversación</h3>
                <br><br>
                <form class="mb-5" method="post" id="contactForm" name="contactForm">
                    <div class="row">
                    <div class="col-md-4 form-group mb-3">
                        <input type="text" class="form-control inputchanged" name="name" id="name" placeholder="Nombre *">
                    </div>
                    <div class="col-md-4 form-group mb-3">
                        <input type="email" class="form-control inputchanged" name="email" id="email"  placeholder="Email *">
                    </div>
                    <div class="col-md-4 form-group mb-3">
                        <input type="celular" class="form-control inputchanged" name="phone" id="phone"  placeholder="Número de celular">
                    </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 form-group mb-3">
                            <select class="form-control upabit dropdownModf" data-type="text" name="pais" id="pais">
                                <option selected disabled>País</option>
                                <option value="España">España</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Chile">Chile</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Guayana Francesa">Guayana Francesa</option>
                                <option value="Granada">Granada</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guayana">Guayana</option>
                                <option value="Haití">Haití</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="México">México</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Panamá">Panamá</option>
                                <option value="Perú">Perú</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="República Dominicana">República Dominicana</option>
                                <option value="Surinam">Surinam</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Venezuela">Venezuela</option>
                            </select>
                        </div>
                    <div class="col-md-4 form-group mb-3">
                        <input type="text" class="form-control inputchanged" name="empresa" id="empresa" placeholder="Empresa">
                    </div>
                    <div class="col-md-4 form-group mb-3">
                        <select class="form-control upabit dropdownModf" data-type="text" name="cantidadempleados" id="cantidadempleados">
                            <option selected disabled>Cantidad de empleados</option>
                            <option value="0-5">0-5</option>
                            <option value="5-20">5-20</option>
                            <option value="20-50">20-50</option>
                            <option value="50-100">50-100</option>
                            <option value="Más de 100">Más de 100</option>
                        </select>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-md-4 form-group mb-3">
                        <select class="form-control upabit dropdownModf" data-type="text" name="sectoractividad" id="sectoractividad">
                            <option selected disabled>Sector de actividad</option>
                            <option value="Agricultura - plantaciones, otros sectores rurales">Agricultura - plantaciones, otros sectores rurales</option>
                            <option value="Alimentación - bebidas - tabaco">Alimentación - bebidas - tabaco</option>
                            <option value="Comercio">Comercio</option>
                            <option value="Construcción">Construcción</option>
                            <option value="Educación">Educación</option>
                            <option value="Fabricación de material de transporte">Fabricación de material de transporte</option>
                            <option value="Función pública">Función pública</option>
                            <option value="Hotelería, restauración, turismo">Hotelería, restauración, turismo</option>
                            <option value="Industrias químicas">Industrias químicas</option>
                            <option value="Ingenieria mecánica y eléctrica">Ingenieria mecánica y eléctrica</option>
                            <option value="Medios de comunicación - cultura - gráficos">Medios de comunicación - cultura - gráficos</option>
                            <option value="Minería (carbón, otra minería)">Minería (carbón, otra minería)</option>
                            <option value="Petroleo y producción de gas - refinación de petroleo">Petroleo y producción de gas - refinación de petroleo</option>
                            <option value="Producción de metales básicos">Producción de metales básicos</option>
                            <option value="Servicios de correos y de telecomunicaciones">Servicios de correos y de telecomunicaciones</option>
                            <option value="Servicios de salud">Servicios de salud</option>
                            <option value="Servicios financieros - servicios profesionales">Servicios financieros - servicios profesionales</option>
                            <option value="Servicios públicos (agua - gas - electricidad)">Servicios públicos (agua - gas - electricidad)</option>
                            <option value="Silvicultura - madera - celulosa - papel">Silvicultura - madera - celulosa - papel</option>
                            <option value="Textiles - vestido - cuero - calzado">Textiles - vestido - cuero - calzado</option>
                            <option value="Transporte (inluyendo aviación civil - ferrocarriles - transporte por carretera)">Transporte (inluyendo aviación civil - ferrocarriles - transporte por carretera)</option>
                            <option value="Transporte marítimo - puertos - pesca - transporte interior">Transporte marítimo - puertos - pesca - transporte interior</option>
                        </select>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <select class="form-control upabit dropdownModf" data-type="text" name="cargo" id="cargo">
                            <option selected disabled>Cargo</option>
                            <option value="CEO - Director Ejecutivo">CEO - Director Ejecutivo</option>
                            <option value="Responsable operativo - COO - Director de Operaciones">Responsable operativo - COO - Director de Operaciones</option>
                            <option value="Responsable de ventas - Director Comercial - CSO">Responsable de ventas - Director Comercial - CSO</option>
                            <option value="Responsable de marketing - CMO - Director de Marketing">Responsable de marketing - CMO - Director de Marketing</option>
                            <option value="Responsable de las Personas - CHRO - Director de Recursos Humanos">Responsable de las Personas - CHRO - Director de Recursos Humanos</option>
                            <option value="Éxito del cliente - Customer Success (CS)">Éxito del cliente - Customer Success (CS)</option>
                            <option value="Responsable Financiero - CFO - Director Financiero">Responsable Financiero - CFO - Director Financiero</option>
                            <option value="Otros">Otros</option>
                        </select>
                    </div>
                    </div>
                    <br><br>
                    <div class="row mb-4">
                    <div class="col-md-12 form-group mb-3">
                        <textarea class="form-control inputchanged" name="message" id="message" cols="30" rows="4"  placeholder="Mensaje"></textarea>
                    </div>
                    </div>
                    <div class="row justify-content-center">
                    <div class="col-md-5 form-group text-center submitform-button">
                        <input type="submit" value="Enviar" class="btn-form btn-block btn-primary rounded-0 py-2 px-4">
                        <span class="submitting"></span>
                    </div>
                    </div>
                </form>
    
                <div id="form-message-warning mt-4"></div> 
                <div id="form-message-success">
                    El formulario ha sido enviado, muchas gracias!
                </div>
    
                </div>
            </div>
            </div>
        </div>
    
        </div>
    </div>
</section>

@endsection