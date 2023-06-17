<?php
session_start();
require_once('php/conexion.php');

$conexion = connect_db();
$usuario = isset( $_SESSION["nombre_trabajador"] ) ? $_SESSION["nombre_trabajador"] : 'usuario no logueado';
$resCiudades = mysqli_query($conexion, "SELECT * FROM ciudades");
$resCiudadesLimit = mysqli_query($conexion, "SELECT * FROM ciudades ORDER BY CIU_visitas DESC LIMIT 3");
$resTransportes = mysqli_query($conexion, "SELECT * FROM transportes");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- SITE TITTLE -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Inicio Cicerone</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/fontawesome-5.15.2/css/all.min.css" rel="stylesheet" />
  <link href="assets/plugins/fontawesome-5.15.2/css/fontawesome.min.css" rel="stylesheet" />
  <link href="assets/plugins/listtyicons/style.css" rel="stylesheet" />
  <link href="assets/plugins/menuzord/css/menuzord.css" rel="stylesheet" />

  <link href="assets/plugins/selectric/selectric.css" rel="stylesheet" />
  <link href="assets/plugins/dzsparallaxer/dzsparallaxer.css" rel="stylesheet" />

  <link href="assets/plugins/map/css/map.css" rel="stylesheet" />
  <link href="assets/css/newstyle.css" rel="stylesheet" />
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- GOOGLE FONT -->
  <!-- font-family: 'Mulish', sans-serif; -->
  <!-- font-family: 'Poppins', sans-serif; -->
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- CUSTOM CSS -->
  <link href="assets/css/style.css" rel="stylesheet" id="option_style" />

  <!-- <link rel="stylesheet" href="assets/css/default.css" id="option_color"> -->

  <!-- FAVICON -->
  <link href="assets\img\LogoPeque.png" rel="shortcut icon" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="body" class="up-scroll">
  <!-- Preloader -->
  <div id="preloader" class="smooth-loader-wrapper">
    <div class="smooth-loader">
      <div class="loader1">
        <div class="loader-target">
          <div class="loader-target-main"></div>
          <div class="loader-target-inner"></div>
        </div>
      </div>
    </div>
  </div>

<!-- Modal-------------------------------------------------------- -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="llegaCotizacion">
        ...
      </div>
    </div>
  </div>
</div>

  <div class="main-wrapper">
    <section class="banner" style="background-image: url('assets/img/background/banner-img1.jpg')">
      <!-- HEADER -->
      <header class="header">
        <nav class="nav-menuzord navbar-sticky">
          <div class="container clearfix">
            <div id="menuzord" class="menuzord menuzord-responsive">
              <a href="index.html" class="menuzord-brand">
                <img src="assets\img\LogoPrin.png" width="200" height="64" />
                <svg class="logo-svg" version="1.1" xmlns="assets\img\LogoPrin.png" width="140" height="44"></svg>
              </a>
              <div class="float-right btn-wrapper"></div>
              <ul class="menuzord-menu menuzord-right">
                <li class="active">
                  <a href="javascript:0">Inicio</a>
                </li>
                <li class="">
                  <a href="javascript:0">Ciudades</a>
                  <div class="megamenu">
                    <div class="megamenu-row">
                      <div class="col4">
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading"></h5>
                          </li>
                          <li>
                            <a href="prox.html">Amazonas</a>
                          </li>
                          <li>
                            <a href="prox.html">Ancash</a>
                          </li>
                          <li>
                            <a href="prox.html">Apurimac</a>
                          </li>
                          <li>
                            <a href="prox.html">Arequipa</a>
                          </li>
                          <li>
                            <a href="prox.html">Ayacucho</a>
                          </li>
                          <li>
                            <a href="prox.html">Cajamarca</a>
                          </li>
                          <li>
                            <a href="cusco.html">Cusco</a>
                          </li>
                          <li>
                            <a href="prox.html">Huancavelica</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col4">
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading"></h5>
                          </li>
                          <li>
                            <a href="prox.html"> Huanuco</a>
                          </li>
                          <li>
                            <a href="prox.html"> Ica</a>
                          </li>
                          <li>
                            <a href="prox.html"> Junin</a>
                          </li>
                          <li>
                            <a href="trujillo.html"> La Libertad</a>
                          </li>
                          <li>
                            <a href="prox.html"> Lambayeque</a>
                          </li>
                          <li>
                            <a href="Lima.html"> Lima</a>
                          </li>
                          <li>
                            <a href="prox.html"> Loreto</a>
                          </li>
                          <li>
                            <a href="prox.html"> Madre de Dios</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col4">
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading"></h5>
                          </li>
                          <li>
                            <a href="prox.html">Moquegua</a>
                          </li>
                          <li>
                            <a href="prox.html">Pasco</a>
                          </li>
                          <li>
                            <a href="prox.html">Piura </a>
                          </li>
                          <li>
                            <a href="prox.html">Puno</a>
                          </li>
                          <li>
                            <a href="prox.html">San Martín</a>
                          </li>
                          <li>
                            <a href="prox.html">Tacna</a>
                          </li>
                          <li>
                            <a href="prox.html">Tumbes</a>
                          </li>
                          <li>
                            <a href="prox.html">Ucayali</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="">
                  <a href="javascript:0">Categorías</a>
                  <ul class="dropdown">
                    <li><a href="transporte.html">Transporte</a></li>
                    <li><a href="prox.html">Lugares Turísticos</a></li>
                    <li><a href="prox.html">Hoteles</a></li>
                    <li><a href="prox.html">Restaurantes</a></li>
                  </ul>
                </li>

                <li class="">
                  <a href="blog.html">Reseñas</a>
                </li>
                <li class="">
                  <a href="javascript:0">Usuario</a>
                  <ul class="dropdown">
                    <li><a href="prox.html"><?php echo $usuario; ?></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <!-- MAP SECTION -->
      <div class="titulo" style="height: 50vh" id="titulolima"></div>

      <!-- ====================================
———	LOCATION SEARCH ONE
===================================== -->
      <div class="py-7 py-md-0 bg-light">
        <div class="container position-relative px-md-0">
          <div class="search-box">
            <form id="formCotizacion" onsubmit="event.preventDefault(); obtenerCotizacion(this)">
              <div class="form-group mb-md-0">
                <input type="date" name="fecha" class="form-control" data-validate placeholder="Ingresa una fecha" data-mask="00/00/0000" maxlength="10" />
              </div>

              <div class="select-default">
                <select class="select-location" data-validate name="ciudad" >
                  <option selected disabled>Seleccione su destino</option>
                  <?php foreach ($resCiudades as $ciudad) : ?>
                    <option value="<?php echo $ciudad["CIU_id"] ?>"><?php echo $ciudad["CIU_nombre"] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              
              <div class="select-default">
                <select class="select-location" data-validate name="presupuesto">
                  <option value="50-100">50 - 100</option>
                  <option value="100-200">100 - 200</option>
                  <option value="200-500">200 - 500</option>
                  <option value="500-1000">500 - 1000</option>
                  <option value="1000-2000">1000 - 2000</option>
                  <option value="2000-5000">2000 - 5000</option>
                  <option value="5000+">[>]5000</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
          </div>
        </div>
      </div>

      <!-- ====================================
———	BROWSER CATEGORI AREA
===================================== -->
      <section class="pt-md-10 sec-pb-70 pb-6 bg-light">
        <div class="container">
          <div class="section-title pt-md-8">
            <h2>Explora las categorias</h2>
            <p>
              Explora lugares del Perú y conecta con las experiencias de
              personas
            </p>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="card bg-transparent">
                <div class="card-body">
                  <div class="icon-md">
                    <i class="icon-listy icon-car-1"></i>
                  </div>
                  <h3 class="h5 fw-normal mb-3">Transporte</h3>
                  <ul class="list-unstyled list-gray mb-0">
                    <li class="pb-1">
                      <a href="transporte.html">Transporte</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card bg-transparent">
                <div class="card-body">
                  <div class="icon-md">
                    <i class="icon-listy icon-neighborhood"></i>
                  </div>
                  <h3 class="h5 fw-normal mb-3">Hoteles</h3>
                  <ul class="list-unstyled list-gray mb-0">
                    <li class="pb-1"><a href="prox.html">Hoteles</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card bg-transparent">
                <div class="card-body">
                  <div class="icon-md">
                    <i class="icon-listy"></i>
                    <img src="assets\img\turismo.png" width="60px" />
                  </div>
                  <h3 class="h5 fw-normal mb-3">Lugares turísticos</h3>
                  <ul class="list-unstyled list-gray mb-0">
                    <li class="pb-1">
                      <a href="prox.html">Lugares turísticos</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card bg-transparent">
                <div class="card-body">
                  <div class="icon-md">
                    <i class="icon-listy"></i>
                    <img src="assets\img\resenas.png" width="50px" />
                  </div>
                  <h3 class="h5 fw-normal mb-3">Reseñas</h3>
                  <ul class="list-unstyled list-gray mb-0">
                    <li class="pb-1"><a href="blog.html">Reseñas</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card bg-transparent">
                <div class="card-body">
                  <div class="icon-md">
                    <i class="icon-listy"></i>
                    <img src="assets\img\resta.png" width="60px" />
                  </div>
                  <h3 class="h5 fw-normal mb-3">Restaurantes</h3>
                  <ul class="list-unstyled list-gray mb-0">
                    <li class="pb-1"><a href="prox.html">Restaurantes</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- ====================================
———	LISTING
===================================== -->
    <section class="pt-7 pt-md-10">
      <div class="container">
        <div class="section-title">
          <h2>Top destinos más buscados</h2>
          <p>Estos son los destinos más buscados por los usuarios</p>
        </div>
        <div class="row justify-content-center">
          <?php foreach ($resCiudadesLimit as $ciudad) : ?>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-0 card-hover-overlay">
                <div class="position-relative">
                  <img class="card-img rounded-0 lazyestload img_16_10" 
                  data-src="archivos/<?php echo $ciudad["CIU_imagen"] ?>" 
                  src="archivos/<?php echo $ciudad["CIU_imagen"] ?>" alt="Card image cap" />
                  <div class="card-img-overlay">
                    <ul class="list-inline list-inline-rating">
                      <li class="list-inline-item">
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="far fa-star" aria-hidden="true"></i>
                      </li>
                    </ul>
                    <h3>
                      <a href="ciudades/<?php echo $ciudad["CIU_nombre"] ?>" style="text-transform: uppercase;">
                        <?php echo $ciudad["CIU_nombre"] ?>
                        <i class="fas fa-check-circle" aria-hidden="true"></i>
                      </a>
                    </h3>
                    <p class="text-white">
                      <?php echo $ciudad["CIU_aeropuerto"] ?>
                    </p>
                  </div>
                </div>

                <div class="card-footer bg-transparent">
                  <ul class="list-unstyled d-flex mb-0 py-2">
                    <li>
                      <button class="btn-like px-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite this listing">
                        <i class="far fa-heart text-primary" aria-hidden="true"></i>
                        <span>8 k</span>
                      </button>
                    </li>
                    <li class="ms-auto">
                      <a class="px-2" href="#">Visitar</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>

        <div class="text-center pt-5">
          <a href="prox.html" class="btn btn-primary">Explora más</a>
        </div>
      </div>
    </section>

    <!-- ====================================
      ———	transporte
      ===================================== -->
    <section class="pt-7 pt-md-10">
      <div class="container">
        <div class="section-title">
          <h2>Transportes disponibles</h2>
          <p>Estos son los vehiculos destinados para brindarte un servicio de calidad</p>
        </div>
        <div class="row justify-content-center">
          <?php foreach ($resTransportes as $transporte) : ?>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-0">
                <div class="position-relative">
                  <img class="card-img rounded-0 lazyestload img_16_10" data-src="archivos/<?php echo $transporte["TRANS_imagen"] ?>" 
                  src="archivos/<?php echo $transporte["TRANS_imagen"] ?>" alt="Card image cap" />
                </div>

                <div class="card-footer bg-transparent">
                  <ul class="list-unstyled d-flex mb-0 py-2">
                    <li>
                      <button class="btn-like px-2" style="font-weight: bold;" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite this listing">
                        <i class="far fa-heart text-primary" aria-hidden="true"></i>
                        <span><?php echo $transporte["TRANS_descripcion"] ?></span>
                      </button>
                    </li>
                    <li class="ms-auto">
                      <a class="px-2" href="#">S/ <?php echo $transporte["TRANS_precio"] ?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>

        <div class="text-center pt-5">
          <a href="#" class="btn btn-primary">Explora más</a>
        </div>
      </div>
    </section>
  </div>
  <!-- element wrapper ends -->

  <!-- footer -->
  <footer class="pt-7 pt-md-10 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-xs-12">
          <img src="assets\img\LogoPrin.png" width="200" height="64" />
          <svg class="logo-svg" version="1.1" xmlns="assets\img\LogoPrin.png" width="140" height="44"></svg>

          <p class="text-muted pt-1 pb-3">
            Somos una plataforma de orientación de viajes a través del Perú,
            ofreciendo a millones de turistas una visión general y completa
            del destino que quieren explorar brindando información de vuelos,
            restaurantes, hospedaje, lugares turísticos, además de reseñas de
            otros viajeros que ayudarán a tomar una mejora decisión. Lo que
            nos diferencia de otras plataformas es que de acuerdo al
            presupuesto del viajero se le brindarán las mejores opciones
            posibles facilitando la planificación sin importar el tipo de
            viaje.
          </p>
          <ul class="list-unstyled text-muted">
            <li class="mb-3">
              <i class="fas fa-phone-alt me-3" aria-hidden="true"></i>
              <a class="text-muted" href="tel:+51-976-884-126">+51 976 884 126</a>
            </li>
            <li class="mb-3">
              <i class="fas fa-envelope me-3" aria-hidden="true"></i>
              <a class="text-muted" href="mailto:info@listy.com">info@cicerone.com</a>
            </li>
          </ul>

          <hr />

          <div class="row pb-md-6">
            <div class="col-sm-7 col-xs-12 align-self-center order-3 order-md-0">
              <p class="copy-right mb-0 pb-4 pb-md-0 text-center text-md-start">
                Copyright &copy; <span id="copy-year"></span>. All Rights
                Reserved by
                <a href="" target="_blank"> Caramel</a>
              </p>
            </div>

            <div class="col-sm-5 col-xs-12 d-flex align-items-center">
              <div class="ms-md-auto mx-auto mx-md-0 mt-3 mb-5 my-md-0">
                <a class="icon-sm icon-default icon-border hover-bg-primary hover-border-primary rounded-circle ms-0" href="#facebook">
                  <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </a>
                <a class="icon-sm icon-default icon-border hover-bg-primary hover-border-primary rounded-circle ms-2" href="#twitter">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a class="icon-sm icon-default icon-border hover-bg-primary hover-border-primary rounded-circle ms-2" href="#pinterest">
                  <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                </a>
                <a class="icon-sm icon-default icon-border hover-bg-primary hover-border-primary rounded-circle ms-2" href="#linkedin">
                  <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JAVASCRIPTS -->
  <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/plugins/menuzord/js/menuzord.js"></script>

  <script src="assets/plugins/selectric/jquery.selectric.min.js"></script>
  <script src="assets/plugins/dzsparallaxer/dzsparallaxer.js"></script>

  <script src="assets/plugins/smoothscroll/SmoothScroll.js"></script>
  <script src="assets/plugins/lazyestload/lazyestload.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY"></script>
  <script src="assets/plugins/map/js/markerclusterer.js"></script>
  <script src="assets/plugins/map/js/rich-marker.js"></script>
  <script src="assets/plugins/map/js/infobox_packed.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/funciones.js"></script>

  <script>
    var d = new Date();
    var year = d.getFullYear();
    document.getElementById("copy-year").innerHTML = year;
  </script>
  <script src="assets/js/listty.js"></script>
</body>

</html>