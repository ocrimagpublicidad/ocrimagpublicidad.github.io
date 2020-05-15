<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="img/cubo.png">
    <title>Ocrimag Publicidad</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modal -->
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>

    <script>
      function validarPassword(){
        texto = prompt("Para ver la página introduzca su contraseña");
        if(texto==="asd1"){
          alert("Password correcta");
        }else{
          alert("Password incorrecta");
          validarPassword();
        }
      }
    </script>

  </head>
  <body>

    <SCRIPT>validarPassword();</SCRIPT>

    <!-- Modal -->
    <div class="modal fade pt-4" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog pt-3">
        <div class="modal-content p-md-5 p-3">
          <div class="row justify-content-center text-center">
            <div class="col-12 px-0">
              <h5>¡FELIZ CUMPLEAÑOS MAMITA!</h5>
              <video src="img/video.mp4" class="img-fluid py-3" controls autoplay></video>
              <p>¿Ya quieres ver tu regalo?</p>
              <a href="#" data-dismiss="modal" class="btn btn-danger" style="border: none; border-radius: 320px; background-color: #d4d800;">Dale clic aquí</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Section Start -->
    <header id="inicio" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="#inicio" class="navbar-brand page-scroll"><img class="py-md-2 py-0 logo" src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#nosotros">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#servicios">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#planes">Planes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portafolio">Portafolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contactos">Contactos</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#nosotros">Nosotros</a>
            </li>
            <li>
              <a class="page-scroll" href="#servicios">Servicios</a>
            </li>
            <li>
              <a class="page-scroll" href="#planes">Planes</a>
            </li>
            <li>
              <a class="page-scroll" href="#portafolio">Portafolio</a>
            </li>
            <li>
              <a class="page-scroll" href="#contactos">Contactos</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Ocrimag Publicidad</h1>
              <p class="lead wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Modelando propósitos</p>
              <a href="#contactos" class="btn btn-common wow fadeInUp page-scroll" data-wow-duration="1000ms" data-wow-delay="400ms">Contactar</a>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!-- Nosotros Section Start -->
    <section id="nosotros" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Nosotros</h2>
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
            <b>OCRIMAG publicidad,</b>  empresa dinámica con gente profesional y <br class="d-md-inline-block d-none">gran desempeño en el área de Diseño y Comunicación Visual.
          </p>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lnr lnr-bullhorn"></i>
              </div>
              <h4>Nuestra Misión</h4>
              <p>Colaborar con nuestros clientes modelando sus propósitos comerciales publicitarios y/o particulares; ejecutados con eficientes alternativas comunicacionales y responsabilidad empresarial”</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.5s">
              <div class="icon">
                <i class="lnr lnr-rocket"></i>
              </div>
              <h4>Nuestra Visión</h4>
              <p>Ser una empresa representativa, ícono de excelencia en productos y servicios publicitarios.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Nosotros Section End -->

    <!-- Services Section Start -->
    <section id="servicios" class="section fondito">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Nuestros Servicios</h2>
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
            Con invaluables características como la honestidad, cortesía, dedicación, puntualidad, <br class="d-md-inline-block d-none">esfuerzo, seriedad y calidad; nuestros directores de cuenta están prestos a acudir <br class="d-md-inline-block d-none">a la hora y lugar solicitado para poder observar, escuchar, sugerir y cotizar <br class="d-md-inline-block d-none">con montajes, previos a cualquier aprobación de material requerido.
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 pb-3">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <h4>Imagen Corporativa</h4>
              <p>Definición de identidad y valores de una empresa en pequeños formatos.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 pb-3">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.5s">
              <h4>Publicidad estática</h4>
              <p>Rotulación exterior con o sin luz que permiten su visualización a distancia.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 pb-3">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.7s">
              <h4>Brandeo Móvil</h4>
              <p>Comunicación visual en medios de transporte de manera masiva y efectiva.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 pb-3">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <h4>Modelado 3D</h4>
              <p>Creación tridimencional de personales, objetos y locaciones.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 pb-3">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.5s">
              <h4>Fotografía</h4>
              <p>Fotografía profesional de productos, modelos, eventos, etc.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 pb-3">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.7s">
              <h4>Multimedia</h4>
              <p>Animación 2D, producción y postproducción de video.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 pb-md-0 pb-3">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <h4>Páginas Web</h4>
              <p>Desarrollo web adaptable a cualquier dispositivo con aquitectura UX/UI.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 pb-md-0 pb-3">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.5s">
              <h4>SEO & SEM</h4>
              <p>Posicionamiento en los motores de búsqueda de forma orgánica y/o pagada.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.7s">
              <h4>Redes Sociales</h4>
              <p>Presencia de marca con mantenimiento en las diferentes plataformas sociales.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->
    <div class="fondito text-center">
      <hr>
    </div>

    <!-- Start Pricing Table Section -->
    <div id="planes" class="section pricing-section fondito">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.5s">Nuestros Planes</h2>
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.5s">¡Todas las marcas deben tener presencia en las redes sociales!<br>Mira lo que tenemos preparado para tí.</p>
        </div>

        <div class="row pricing-tables align-items-end">
          <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Básico</h2>
                <span>$250</span>
                <ul>
                  <li>Manejo de 1 red social.<br>(Facebook o Instagram)</li>
                  <li>3 Publicaciones semanales.<br>(Lunes a Viernes)</li>
                  <li>Generación de 1 campaña<br>pagada al mes.</li>
                  <li>Generación de 1 gif al mes.</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="https://api.whatsapp.com/send?phone=593995251125&text=¡Buen día! Quiero contratar el Plan-Basic, " target="_blank" class="btn btn-common2">Contratar</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay="0.5s">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Esencial</h2>
                <span>$400</span>
                <ul>
                  <li>Manejo de 2 redes sociales.<br>(Facebook o Instagram)</li>
                  <li>3 Publicaciones semanales.<br>(Lunes a Viernes)</li>
                  <li>Generación de 1 campaña<br>pagada al mes.</li>
                  <li>Generación de 1 material interactivo al mes. (Miniclip o gif)</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="https://api.whatsapp.com/send?phone=593995251125&text=¡Buen día! Quiero contratar el Plan-Medium, " target="_blank" class="btn btn-common">Contratar</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.7s">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Avanzado</h2>
                <span>$750</span>
                <ul>
                  <li>Manejo de 3 redes sociales.<br>(Facebook - Instagram - Opcional)</li>
                  <li>7 Publicaciones semanales.<br>(Lunes a Domingo)</li>
                  <li>Generación de 2 campañas<br>pagadas al mes.</li>
                  <li>Generación de 1 video promocional al mes.</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="https://api.whatsapp.com/send?phone=593995251125&text=¡Buen día! Quiero contratar el Plan-Premiun, " target="_blank" class="btn btn-common2">Contratar</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Pricing Table Section -->

    <!-- Portfolio Section -->
    <section id="portafolio" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.2s">          
          <h2 class="section-title">Nuestro Portafolio</h2>
          <p class="section-subtitle">Mira un poco de nuestro trabajo satisfactorio.</p>
        </div>
        <div class="row">          
          <div class="col-md-12 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.5s">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common2" data-filter="all">
                Todo 
              </a>
              <a class="filter btn btn-common2" data-filter=".impresion">
                Impresión digital
              </a>
              <a class="filter btn btn-common2" data-filter=".letreros">
                Letreros
              </a>
              <a class="filter btn btn-common2" data-filter=".exhibidores">
                Exhibidores
              </a>
              <a class="filter btn btn-common2" data-filter=".senaletica">
                Señalética
              </a>
              <a class="filter btn btn-common2" data-filter=".promocionales">
                Promocionales
              </a>
              <a class="filter btn btn-common2" data-filter=".brandeo">
                Brandeo
              </a>
              <a class="filter btn btn-common2" data-filter=".pared">
                Pared decorativa
              </a>
              <a class="filter btn btn-common2" data-filter=".ventanal">
                Ventanal decorativa
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.7s">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix impresion">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-id.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-id.jpg">
                    <h6 class="pt-3">Trípticos</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix impresion">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-id.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-id.jpg">
                    <h6 class="pt-3">Flyers</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix impresion">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-id.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-id.jpg">
                    <h6 class="pt-3">Catálogos</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix impresion">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/4-id.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/4-id.jpg">
                    <h6 class="pt-3">Dípticos</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix impresion">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/5-id.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/5-id.jpg">
                    <h6 class="pt-3">Habladores</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix impresion">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/6-id.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/6-id.jpg">
                    <h6 class="pt-3">Flyers</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix impresion">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/7-id.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/7-id.jpg">
                    <h6 class="pt-3">Troquelado</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix impresion">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/8-id.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/8-id.jpg">
                    <h6 class="pt-3">Cuadros</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix impresion">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/9-id.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/9-id.jpg">
                    <h6 class="pt-3">Troquelado</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix letreros">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-l3d.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-l3d.jpg">
                    <h6 class="pt-3">Letras 3D</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix letreros">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-l3d.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-l3d.jpg">
                    <h6 class="pt-3">Letras 3D</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix letreros">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-l3d.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-l3d.jpg">
                    <h6 class="pt-3">Letras 3D</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix letreros">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-lcl.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-lcl.jpg">
                    <h6 class="pt-3">Caja de luz</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix letreros">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-lcl.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-lcl.jpg">
                    <h6 class="pt-3">Templado</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix letreros">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-lcl.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-lcl.jpg">
                    <h6 class="pt-3">Caja de luz</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix letreros">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-l.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-l.jpg">
                    <h6 class="pt-3">Lona cocida</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix letreros">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-l.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-l.jpg">
                    <h6 class="pt-3">Portón</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix letreros">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-l.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-l.jpg">
                    <h6 class="pt-3">Gigantografía</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix exhibidores">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-e.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-e.jpg">
                    <h6 class="pt-3">Roll Up</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix exhibidores">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-e.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-e.jpg">
                    <h6 class="pt-3">Exhibidor exterior</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix exhibidores">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-e.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-e.jpg">
                    <h6 class="pt-3">Roll Up</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix exhibidores">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/4-e.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/4-e.jpg">
                    <h6 class="pt-3">Exhibidor de escritorio</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix exhibidores">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/5-e.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/5-e.jpg">
                    <h6 class="pt-3">Roll Up de escritorio</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix exhibidores">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/6-e.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/6-e.jpg">
                    <h6 class="pt-3">Exhibidor de escritorio</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix senaletica">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-sc.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-sc.jpg">
                    <h6 class="pt-3">Señalética corporativa</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix senaletica">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-sc.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-sc.jpg">
                    <h6 class="pt-3">Señalética</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix senaletica">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-sc.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-sc.jpg">
                    <h6 class="pt-3">Señalética corporativa</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix senaletica">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/4-sc.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/4-sc.jpg">
                    <h6 class="pt-3">Señalética corporativa</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix senaletica">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/5-sc.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/5-sc.jpg">
                    <h6 class="pt-3">Señalética</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix senaletica">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/6-sc.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/6-sc.jpg">
                    <h6 class="pt-3">Señalética corporativa</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix promocionales">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-p.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-p.jpg">
                    <h6 class="pt-3">Colgantes decorativos</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix promocionales">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-p.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-p.jpg">
                    <h6 class="pt-3">Identificadores</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix promocionales">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-p.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-p.jpg">
                    <h6 class="pt-3">Tazas personalizadas</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix promocionales">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/4-p.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/4-p.jpg">
                    <h6 class="pt-3">Identificador de escritorio</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix promocionales">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/5-p.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/5-p.jpg">
                    <h6 class="pt-3">Llaveros</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix promocionales">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/6-p.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/6-p.jpg">
                    <h6 class="pt-3">Camisetas</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix brandeo">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-bmo.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-bmo.jpg">
                    <h6 class="pt-3">Brandeo móvil</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix brandeo">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-bmo.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-bmo.jpg">
                    <h6 class="pt-3">Brandeo móvil</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix brandeo">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-bmo.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-bmo.jpg">
                    <h6 class="pt-3">Brandeo móvil</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix brandeo">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-bmu.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-bmu.jpg">
                    <h6 class="pt-3">Brandeo en muebles</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix brandeo">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-bmu.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-bmu.jpg">
                    <h6 class="pt-3">Brandeo en muebles</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix brandeo">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-bmu.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-bmu.jpg">
                    <h6 class="pt-3">Brandeo en muebles</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix pared">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-pd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-pd.jpg">
                    <h6 class="pt-3">Vinil decorativo</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix pared">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-pd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-pd.jpg">
                    <h6 class="pt-3">Vinil impreso</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix pared">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-pd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-pd.jpg">
                    <h6 class="pt-3">Vinil decorativo</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix pared">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/4-pd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/4-pd.jpg">
                    <h6 class="pt-3">Vinil decorativo</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix pared">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/5-pd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/5-pd.jpg">
                    <h6 class="pt-3">Vinil impreso</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix pared">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/6-pd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/6-pd.jpg">
                    <h6 class="pt-3">Vinil decorativo</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ventanal">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/1-vd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/1-vd.jpg">
                    <h6 class="pt-3">Ventanal interior</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ventanal">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/2-vd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/2-vd.jpg">
                    <h6 class="pt-3">Ventanal exterior</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ventanal">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/3-vd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/3-vd.jpg">
                    <h6 class="pt-3">Ventanal exterior</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ventanal">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/4-vd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/4-vd.jpg">
                    <h6 class="pt-3">Ventanal interior</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ventanal">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/5-vd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/5-vd.jpg">
                    <h6 class="pt-3">Ventanal exterior</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ventanal">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portafolio/6-vd.jpg" alt="" />  
                  <a class="overlay lightbox pt-5" href="img/portafolio/6-vd.jpg">
                    <h6 class="pt-3">Ventanal exterior</h6>
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <!-- testimonial Section Start -->
    <div id="clientes" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <h3 class="text-center pb-5 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.2s">Nuestros Clientes</h3>
        <div class="row justify-content-md-center">
          <div class="col-md-12 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.5s">
            <div class="touch-slider owl-carousel owl-theme">
              <div class="testimonial-item moviendo1">
                <img src="img/clientes/1-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/2-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo2">
                <img src="img/clientes/3-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/4-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo1">
                <img src="img/clientes/5-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/6-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo2">
                <img src="img/clientes/7-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/8-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo1">
                <img src="img/clientes/9-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/10-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo2">
                <img src="img/clientes/11-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/12-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo1">
                <img src="img/clientes/13-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/14-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo2">
                <img src="img/clientes/15-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/16-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo1">
                <img src="img/clientes/17-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/18-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo2">
                <img src="img/clientes/19-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/20-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo1">
                <img src="img/clientes/21-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/22-lc.jpg" class="ml-md-5 ml-4" />
              </div>
              <div class="testimonial-item moviendo2">
                <img src="img/clientes/23-lc.jpg" class="mr-md-5 mr-4" />
                <img src="img/clientes/24-lc.jpg" class="ml-md-5 ml-4" />
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
    <!-- testimonial Section Start -->

    <!-- Contact Section Start -->
    <section id="contactos" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0.2s">
              <div class="contact-us">
                <h3>Contáctanos</h3>
                <div class="contact-address">
                  <p class="phone">Teléfono: <span>(+593) 099 525 1125</span></p>
                  <p class="email">Correo: <a href="mailto:ocrimag@yahoo.es"><span>ocrimag@yahoo.es</span></p></a>
                </div>
                <div class="social-icons">
                  <ul>
                    <li class="facebook"><a href="https://www.facebook.com/ocrimag" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/ocrimag" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li class="whatsapp"><a href="https://api.whatsapp.com/send?phone=593995251125&text=¡Buen día! Ayúdame con " target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="0.5s">
              <div class="contact-block">
                <?php
                  if(!$_POST){
                ?>
                <form id="contactForm" method="POST" action="index.php">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required data-error="Por favor, escribe tu nombre">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Correo" id="email" class="form-control" name="name" required data-error="Por favor, escribe tu correo">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Mensaje" rows="8" data-error="Por favor, escribe tu requerimiento" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Enviar</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
                <?php
                  } else {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $message = $_POST["message"];
                    $EmailTo = "victorjativa@hotmail.com";
                    $Subject = "Mensaje de la WEB";
                    $Body = "";
                    $Body .= "Nombre: ";
                    $Body .= $name;
                    $Body .= "\n";
                    $Body .= "Correo: ";
                    $Body .= $email;
                    $Body .= "\n";
                    $Body .= "Mensaje: ";
                    $Body .= $message;
                    $Body .= "\n";
                    $success = mail($EmailTo, $Subject, $Body, "From:".$email);
                    if ($success && $errorMSG == ""){
                      echo "Enviado";
                    } else {
                      echo "Ocurrio un problema";
                    }
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="text-center text-white pt-3">Ocrimag Publicidad &copy; 2020</p>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#inicio" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/smoothscroll.js"></script>    
    <script src="js/jquery.slicknav.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>

  </body>
</html>