<?php
 include 'include/conecta.php';
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- instalando boostrap en mi documento -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>JP Capital Human</title>
  </head>
  <body>
    <!-- barra de datos -->
    <div class="row" style="background-color:rgb(33, 97, 140);">
       <div class="col-sm-2 col-md-3 col-lg-7"></div>
       <div class="col">
          <p class="text-light "><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
              <use xlink:href="library/icons/bootstrap-icons.svg#headset"/>
              </svg> Telefono: +52 55-55-55-55 &nbsp;&nbsp;|&nbsp;&nbsp; <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                  <use xlink:href="library/icons/bootstrap-icons.svg#envelope-fill"/>
              </svg> Email: contacto@rhuman </p>
       </div>
    </div>
    <!-- termina la barra de datos-->
    <!-- primera linea -->
    <div class="row">
        <div class="col">
        <!-- inicia el navbar principal -->
           <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color:rgb(33, 97, 140);" id="Menu">
               <div class="container-fluid">
                   <div class="d-flex flex-grow-1">
                        <span class="w-100 d-lg-none d-block">
                        <!-- cuando el menu sea responsive la marca se centrara --></span>
                        <a class="navbar-brand" href="#"> JP Capital Human </a>
                        <div class="w-100 text-right">
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar7">
                              <span class="navbar-toggler-icon"></span>
                           </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
                       <ul class="navbar-nav ms-auto flex-nowrap">
                          <li class="nav-item">
                             <a href="#" class="nav-link active"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#house"/>
                                 </svg> Inicio</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#pen-fill"/>
                                 </svg> Somos</a>
                          </li>
                          <!-- nuetro navdrop-->
                          <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                   <use xlink:href="library/icons/bootstrap-icons.svg#building"/>
                                   </svg> Servicios
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="#">Action</a></li>
                             <li><a class="dropdown-item" href="#">Another action</a></li>
                             <li><hr class="dropdown-divider"></li>
                             <li><a class="dropdown-item" href="#">Something else here</a></li>
                           </ul>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#chat-left-dots-fill"/>
                                 </svg> Contacto</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#person-circle"/>
                               </svg> Iniciar Sesión</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                               </svg> Registro</a>
                          </li>
                        </ul>
                     </div>
                 </div>
              </nav>
           </div>
      </div>
      <!-- termina el nav -->
      <!-- inicia slider-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" style="background-color:rgb(33, 97, 140);" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:rgb(33, 97, 140);"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="background-color:rgb(33, 97, 140);"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="img/slider1.png" class="d-block w-100" alt="slider1">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Contactanos</h5>
                  <p class="text-secondary">Somos la mejor opción para captar talento 100% cerificado.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider2.png" class="d-block w-100" alt="slider2">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">¿Necesitas un perfil especifico?</h5>
                  <p class="text-secondary">Nosotros a travez de tecnicas y procesos controlados cubrimos ese perfil.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider3.png" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Te asesoramos en la creación de</h5>
                  <p class="text-secondary">Contratos simples, administración de documentos en RH, Manual de procedimientos y mucho màs.</p>
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
      <!-- termina slider-->
      <div class="row">
          <div class="container py-3">
                <div class="col text-center">
                  <span class="text-info"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#telephone-fill"/>
                  <span style="color:#283747;"></svg> Telefono: 55 55 55 55 55 </span>| <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#envelope"/>
                      </svg></span><a href="mailto:contacto@jphuman.com" class="text-decoration-none text-info"> Email: contacto@jphuman.com </a>
                      <span class="text-info"> | <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#geo-alt"/>
                      <span class="text-info"></svg> <a href="https://www.waze.com/es/live-map/directions/mexico/estado-de-mexico/naucalpan-de-juarez/conalep-plantel-naucalpan-i?place=ChIJBU_-LvID0oURRBhJfGF1zX0&utm_campaign=waze_website&utm_medium=website_menu&utm_source=waze_website" target="_blank">Dirección: Naucalpan de Juarez Edo de Méx </a>|</span> <svg class="bi" width="17" height="17" role="img" aria-label="Tools">

                </div>
          </div>
      </div>
     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
