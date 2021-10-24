<?php
 include 'include/conecta.php';
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- instalando boostrap en mi documento -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery.js"></script>
    <title>Capital Human Wordl</title>
  </head>
  <body>
    <!-- inicia el navbar principal -->
    <div class="row">
           <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color:rgb(33, 97, 140); " id="menu">
               <div class="container-fluid">
                   <div class="d-flex flex-grow-1">
                        <span class="w-100 d-lg-none d-block">
                        <!-- cuando el menu sea responsive la marca se centrara --></span>
                        <a class="navbar-brand" href="#"><img src="img/logo_principal_web.png"></a>
                        <div class="w-100 text-right">
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbarJl">
                              <span class="navbar-toggler-icon"></span>
                           </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbarJl">
                       <ul class="navbar-nav ms-auto flex-nowrap">
                          <li class="nav-item">
                             <a href="#" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#house"/>
                                 </svg> Inicio</a>
                          </li>
                          <li class="nav-item">
                             <a href="#Nostros" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#journals"/>
                               </svg> Nosotros</a>
                          </li>
                          <li class="nav-item">
                             <a href="#Servicios" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#briefcase-fill"/>
                               </svg> Servicios</a>
                          </li>
                          <!-- nuetro navdrop-->
                          <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle selectMenu" href="#Soluciones" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                   <use xlink:href="library/icons/bootstrap-icons.svg#bounding-box"/>
                                 </svg> Soluciones
                           </a>
                           <ul class="dropdown-menu menus" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="#Examenes"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#signpost-split-fill"/>
                                 </svg> Examenes Psicometricos</a></li>
                             <li><a class="dropdown-item" href="#Reclutamiento"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                                 </svg> Reclutamiento y selección</a></li>
                             <li><a class="dropdown-item" href="#Perfiles"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-break-fill"/>
                               </svg> Perfiles y descrición de puesto</a></li>
                              <li><a class="dropdown-item" href="#Organigrama"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                     <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                                  </svg> Organigrama Empresarial</a>
                              </li>
                           </ul>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#envelope-open-fill"/>
                                 </svg> Contacto</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#telephone-fill"/>
                               </svg> 55 55 55 55 55</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi text-light" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                                 </svg></a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi text-light" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                                 </svg></a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi text-light" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                                 </svg></a>
                          </li>
                        </ul>
                     </div>
                 </div>
              </nav>
      </div>
      <!-- termina el nav -->
      <!-- inicia slider-->
      <section>
      <div id="carouselExampleCaptions" class="carousel slide py-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" style="background-color:rgb(33, 97, 140);" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:rgb(33, 97, 140);"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="background-color:rgb(33, 97, 140);"></button>
        </div>
        <div class="carousel-inner py-3">
            <div class="carousel-item active">
               <img src="img/slider1.png" class="d-block w-100" alt="slider1">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Contactanos</h5>
                  <p class="text-secondary">Somos la mejor opción para captar talento 100% cerificado.</p>
                  <a href="#" class="btn btn-sm bg-primary bg-gradient text-light">Más Información</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider2.png" class="d-block w-100" alt="slider2">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">¿Necesitas un perfil especifico?</h5>
                  <p class="text-secondary">Nosotros a travez de tecnicas y procesos controlados cubrimos ese perfil.</p>
                  <a href="#" class="btn btn-sm bg-primary bg-gradient text-light">Más Información</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider3.png" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Te asesoramos en la creación de</h5>
                  <p class="text-secondary">Contratos simples, administración de documentos en RH, Manual de procedimientos y mucho màs.</p>
                  <a href="#" class="btn btn-sm bg-primary bg-gradient text-light">Más Información</a>
               </div>
            </div>
       </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:rgb(33, 97, 140);"></span>
          <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:rgb(33, 97, 140);"></span>
          <span class="visually-hidden">Next</span>
       </button>
      </div>
    </section>
      <!-- termina slider-->
      <!-- inicia barra de contacto -->
      <div class="container">
      <div class="row align-self-center">
          <div class="col-sm-12 col-md-12 col-lg-12 py-2">
              <div class="card shadow-lg">
                <div class="card-body text-center">
                      <span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#telephone-fill"/>
                      </svg></span><a href="tel:+52 55 55 55 55 55" class="text-dark text-decoration-none"> 55 55 55 55 55</a> &nbsp; 55 55 55 55 55 &nbsp;|&nbsp;&nbsp;<span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#envelope-fill"/>
                      </svg></span><a href="mailto:contacto@capitalhumanworld.com" class="text-dark text-decoration-none">&nbsp; contacto@capitalhumanworld.com</a> &nbsp; | &nbsp; <span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#geo-alt-fill"/>
                      </svg></span> <a href="https://www.waze.com/es/live-map/directions/mexico/estado-de-mexico/naucalpan-de-juarez/conalep-plantel-naucalpan-i?place=ChIJBU_-LvID0oURRBhJfGF1zX0&utm_campaign=waze_website&utm_medium=website_menu&utm_source=waze_website" target="_blank" class="text-dark text-decoration-none">Naucalpan de Juarez Edo de Méx.</a>
                </div>
              </div>
          </div>
      </div>
    </div>
    <!-- termina barra de contacto-->
    <!-- Apartado de nosotros -->
    <section id="Nostros">
        <div class="row py-5">
            <div class="col-sm-6 col-md-6 col-lg-6 text-center py-5">
                <img src="img/logo_human1.png" class="img-fluid" alt="Logo JP Human">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 bg-info py-3 shadow">
                <h2 class="text-center text-light display-6"> Nosotros</h2>
                <hr class="text-light">
                <div class="container">
                   <p class="text-light text-justify py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                   fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                   culpa qui officia deserunt mollit anim id est laborum.</p>
                   <div class="row text-center">
                       <div class="col">
                         <a data-bs-toggle="offcanvas" href="#offcanvasCalidad" class="text-decoration-none" role="button" aria-controls="offcanvasExample"><svg class="bi text-light" width="42" height="42" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#bookmark-fill"/>
                         </svg>
                         <h5 class="text-light">Calidad</h5></a>
                       </div>
                       <div class="col">
                         <a data-bs-toggle="offcanvas" href="#offcanvasServicio" class="text-decoration-none"><svg class="bi text-light" width="42" height="42" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#cup-fill"/>
                         </svg>
                         <h5 class="text-light">Servicio</h5></a>
                       </div>
                       <div class="col">
                         <svg class="bi text-light" width="42" height="42" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#shield-lock-fill"/>
                         </svg>
                         <h5 class="text-light">Seguridad</h5>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- termina apartado -->
    <!-- inician los ofcanvas-->
    <!-- calidad -->
    <div class="offcanvas offcanvas-bottom valores" tabindex="-1" id="offcanvasCalidad" aria-labelledby="offcanvasCalidadLabel">
       <div class="offcanvas-header py-2">
            <h5 class="offcanvas-title text-center text-muted" id="titulo">Calidad</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body">
          <div class=""><hr>
             <p>La calidad significa mucho para nosotros por lo tanto aportamos valor a nuestros clientes, esto es, ofrecer las mejores condiciones de nuestros servicio superiores a las que nuestros cliente espera recibir y a un precio accesible.</p>
          </div>
       </div>
    </div>
    <!-- termina calidad -->
    <!-- Servicio -->
    <div class="offcanvas offcanvas-bottom valores" tabindex="-1" id="offcanvasServicio" aria-labelledby="offcanvasCalidadLabel">
       <div class="offcanvas-header py-2">
            <h5 class="offcanvas-title text-center text-muted" id="titulo">Servicio</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body">
          <div class=""><hr>
             <p>Nos preocupamos por nuestro clientes brindandoles el mejor servicio a punto personalizado para ayudar a solucionar todas sus necesidades al alcance de nuestras soluciones.</p>
          </div>
       </div>
    </div>
    <!-- termina Servicio -->
    <!-- terminas ofcanvas-->
    <!-- inicia seccion servicios-->
    <section id="Servicios">
    <div class="container py-4">
          <div class="row mx-auto">
             <div class="col-sm-12 col-md-4 col-lg-4 py-4">
               <div class="card shadow">
                   <img src="img/rh.png" class="card-img-top" alt="Recursos Humanos">
                   <div class="card-body">
                      <h5 class="card-title text-center text-muted">Recursos Humanos</h5>
                      <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-info btn-sm d-grid gap-2 text-center text-light">Más Información</a>
                 </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 py-4">
               <div class="card shadow">
                   <img src="img/sd.png" class="card-img-top" alt="Servicios Digitales">
                   <div class="card-body">
                      <h5 class="card-title text-center text-muted">Serviciós Digitales</h5>
                      <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-info btn-sm d-grid gap-2 text-center text-light">Más Información</a>
                 </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 py-4">
               <div class="card shadow">
                   <img src="img/re.png" class="card-img-top" alt="Paqueteria Express">
                   <div class="card-body">
                      <h5 class="card-title text-center text-muted">Paqueteria Express</h5>
                      <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-info btn-sm d-grid gap-2 text-center text-light">Más Información</a>
                 </div>
                </div>
             </div>
          </div>
      </div>
    </section>
      <!-- barra social -->
      <div class="social-icons" id="s-icons">
         <ul class="navbar-nav">
            <li><a href="#" class="btn btn-primary btn-social "><svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                </svg></a></li>
            <li><a href="#" class="btn btn-info btn-social text-light"><svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                </svg></a></li>
            <li><a href="#" class="btn btn-success btn-social">
              <svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                  <use xlink:href="library/icons/bootstrap-icons.svg#whatsapp"/>
                  </svg>
            </a></li>
         </ul>
         <button class="btn btn-primary btn-social" id="btn-share" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
           <svg class="bi" width="20" height="20" role="img" aria-label="Tools">
               <use xlink:href="library/icons/bootstrap-icons.svg#share-fill"/>
           </svg>
         </button>
      </div>
     <!-- termina barra social -->
     <!-- inicia boton ir arriba -->
     <span class="ir-arriba">
       <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
           <use xlink:href="library/icons/bootstrap-icons.svg#arrow-up-circle-fill"/>
       </svg>
     </span>
     <!-- termina boton ir a rriba-->
     <section id="Soluciones" class="py-4">
        <div class="row banner">
            <div class="col-sm-4 col-md-4 col-lg-4"></div>
            <div class="col-sm-8 col-md-8 col-lg-8 text-center">
                 <div class="container">
                     <h3 class="display-5 py-3">Nuestras Soluciones</h3><hr>
                     <h5 class="text-muted align-top">Más de 1500 usuarios nos respaldan</h5>
                     <div class="text-center py-4">
                        <a href="#Examenes" class="btn bg-primary bg-gradient btn-sm text-light" id="Examenes" >Más Información</a>
                     </div>
                 </div>
            </div>
        </div>
     </section>
     <section class="py-4">
         <div class="container">
             <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <h3 class="display-6" style="color:rgb(33, 97, 140);">Examenes Psicometricos</h3>
                  <p class="text-muted text-break">Aplicación de pruebas Psicometricas y proyectivas. Es esencial para detectar la adaptabilidad de las personas que conformaran tu equipo de trabajo, evaluando la personalidad de cada individuo.</p>
                  <p class="fw-bold">Conoce los diferentes tipos de exámenes psicométricos, te apoyamos a elegir el que mejor se adapte a las necesidades de tu empresa y/o negocio.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                  <img src="img/Examenes.png" alt="Examenes psicometricos" id="Reclutamiento">
                </div>
             </div>
         </div>
     </section>
     <section id="Reclutamiento" class="py-1">
         <div class="container">
             <div class="row ">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <img src="img/personal.png" alt="Seleccion de personal">
                </div>
                <div class="col">
                    <h3 class="display-6" style="color:rgb(33, 97, 140);">Reclutamiento y selección</h3>
                  <p class="text-muted justificado">Configura a las necesidades de tu Empresa y/o negocio las faces de reclutamiento para tus proyectos o vacantes especializadas. Toma todas nustras ventajas de reclutamiento:</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#award"/>
                      </svg> Getion de candidatos
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#award"/>
                      </svg> Entrevista por competencia
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#award"/>
                        </svg> Reclutamiento Personalizado
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#award"/>
                      </svg> Selección de talento
                    </li>
                  </ul>
                </div>
             </div>
         </div>
     </section>
     <section id="Perfiles" class="py-4">
         <div class="container">
             <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <h3 class="display-6" style="color:rgb(33, 97, 140);">Perfiles y Descripciones de puestos</h3>
                  <p class="text-muted text-break">Las descripciones y perfiles de puesto te ayudan a conocer e identificar las funciones y actividades de cada empleado, con la finalidad de definir claramente lo que se espera alcanzar y el valor que agregan cada uno de los empleados para alcanzar los objetivos establecidos por la organización.</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                      </svg> Resumen del Puesto
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                      </svg> Tareas del Puesto
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                        </svg> Requerimientos
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                      </svg> Otros Aspectos
                    </li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                  <img src="img/Perfiles.png" alt="Examenes psicometricos">
                </div>
             </div>
         </div>
     </section>
     <section id="Organigrama" class="py-1">
         <div class="container">
             <div class="row ">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <img src="img/organigrama.png" alt="Seleccion de personal">
                </div>
                <div class="col">
                    <h3 class="display-6" style="color:rgb(33, 97, 140);">Organigrama Empresarial</h3>
                  <p class="text-muted text-break">Un organigrama es necesario para planificar la comunicación interna y el flujo de trabajo, por lo que estructurar un organigrama es fundamental para agilizar los procesos.</p>
                  <div class="row text-center py-3">
                      <div class="col">
                          <svg class="bi text-primary" width="35" height="35" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#diagram-3-fill"/>
                          </svg>
                      </div>
                      <div class="col">
                         <svg class="bi text-primary" width="35" height="35" role="img" aria-label="Tools">
                           <use xlink:href="library/icons/bootstrap-icons.svg#pie-chart-fill"/>
                         </svg>
                      </div>
                      <div class="col">
                        <svg class="bi text-primary" width="35" height="35" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#ui-radios"/>
                        </svg>
                      </div>
                  </div>
                </div>
             </div>
         </div>
     </section>
   <!-- termina contenido -->
   </div>
   <!-- inicia footer -->
   <footer class="text-white text-center text-lg-start bg-primary">
    <div class="container p-4">
      <div class="row mt-4">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
             <div class="container py-2">
               <img src="img/logo_human1.png" alt="Logo" style="width:300px;">
             </div>
          <div class="mt-4">
              <svg class="bi text-light" width="30" height="30" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
              </svg>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Naucalpan de Juarez</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">info@example.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 01 234 567 88</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 01 234 567 89</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <div class="form-outline form-white mb-4">
            <input type="text" id="formControlLg" class="form-control form-control-lg" />
            <label class="form-label" for="formControlLg">Search</label>
          </div>
          <h5 class="text-uppercase mb-4">Opening hours</h5>

          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8am - 1am</td>
              </tr>
              <tr>
                <td>Sunday:</td>
                <td>9am - 10pm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
   <!-- termina footer -->
     <script src="js/bootstrap.min.js"></script>
     <script src="js/main.js"></script>
  </body>
</html>
