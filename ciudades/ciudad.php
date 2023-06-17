<?php 
require_once("php/conexion.php");
$conexion = connect_db();
// Obtener la ruta
$route = $_SERVER['REQUEST_URI'];

// Dividir la ruta en segmentos
$segments = explode('/', $route);

// Obtener la ciudad , verificar la URL 
$nombreCiudad = isset($segments[3]) ? $segments[3] : '';

$consulta = "SELECT * FROM ciudades WHERE CIU_nombre = '$nombreCiudad'";
$descripcionCiudad =  mysqli_fetch_assoc(mysqli_query($conexion, $consulta))["CIU_descripcion"];
$nombreCiudad =  mysqli_fetch_assoc(mysqli_query($conexion, $consulta))["CIU_nombre"];
$imagenCiudad =  mysqli_fetch_assoc(mysqli_query($conexion, $consulta))["CIU_imagen"];

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trujillo-Ciudad</title>

    <!-- PLUGINS CSS STYLE -->
    <link href='../assets/plugins/fontawesome-5.15.2/css/all.min.css' rel='stylesheet'>
    <link href='../assets/plugins/fontawesome-5.15.2/css/fontawesome.min.css' rel='stylesheet'>
    <link href='../assets/plugins/listtyicons/style.css' rel='stylesheet'>
    <link href='../assets/plugins/menuzord/css/menuzord.css' rel='stylesheet'>

    <link href='../assets/plugins/selectric/selectric.css' rel='stylesheet'>
	  
    <link href='../assets/plugins/selectric/selectric.css' rel='stylesheet'>
    
    <script src="../assets/js/script.js"></script>
    
    
    <link href="../assets/css/newstyle.css" rel="stylesheet">
    
    
    
    

    <!-- GOOGLE FONT --><!-- font-family: 'Mulish', sans-serif; --><!-- font-family: 'Poppins', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" id="option_style">

    <!-- <link rel="stylesheet" href="assets/css/default.css" id="option_color"> -->

    <!-- FAVICON -->
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

  <body id="body" class="up-scroll">

    <div class="main-wrapper">
      <!-- HEADER -->
      <header class="header">
        <nav class="nav-menuzord navbar-sticky">
          <div class="container clearfix">
            <div id="menuzord" class="menuzord menuzord-responsive">

              <a href="index.html" class="menuzord-brand">
                  
                 <img src="../assets\img\LogoPrin.png" width="200" height="64">
                <svg class="logo-svg" version="1.1" xmlns="assets\img\LogoPrin.png" width="140" height="44">
              </a>
             
              <ul class="menuzord-menu menuzord-right">
                <li class="">
                  <a href="index.html">Inicio</a>
                 
                </li>
                <li class="">
                  <a href="javascript:0">Ciudades</a>
                  <div class="megamenu">
                    <div class="megamenu-row">
                      <div class="col4">
                        
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading">
                              
                              
                            </h5>
                          </li>
                          <li>
                            <a href="listing-grid-right-sidebar-without-map.html">Amazonas</a>
                          </li>
                          <li>
                            <a href="listing-grid-fullwidth-without-map.html">Ancash</a>
                          </li>
                          <li>
                            <a href="listing-list-right-sidebar-without-map.html">Apurimac</a>
                          </li>
                          <li>
                            <a href="listing-list-fullwidth-without-map.html">Arequipa</a>
                          </li>
              <li>
                            <a href="listing-list-right-sidebar-without-map.html">Ayacucho</a>
                          </li>
              <li>
                            <a href="listing-list-right-sidebar-without-map.html">Cajamarca</a>
                          </li>
              <li>
                            <a href="listing-list-right-sidebar-without-map.html">Cusco</a>
                          </li>
              <li>
                            <a href="listing-list-right-sidebar-without-map.html">Huancavelica</a>
                          </li>
            
                        </ul>
                      </div>
                      <div class="col4">
                        
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading">
                              
                              
                            </h5>
                          </li>
                          <li>
                            <a href="Lima.html"> Huanuco</a>
                          </li>
                          <li>
                            <a href="listing-list-right-sidebar.html"> Ica</a>
                          </li>
                          <li>
                            <a href="listing-list-fullwidth.html"> Junin</a>
                          </li>
              <li>
                            <a href="listing-list-fullwidth.html"> La Libertad</a>
                          </li>
              <li>
                            <a href="listing-list-fullwidth.html"> Lambayeque</a>
                          </li>
              <li>
                            <a href="Lima.html"> Lima</a>
                          </li>
              <li>
                            <a href="listing-list-fullwidth.html"> Loreto</a>
                          </li>
              <li>
                            <a href="listing-list-fullwidth.html"> Madre de Dios</a>
                          </li>
              
                        </ul>
                      </div>
                      <div class="col4">
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading">
                              
                              
                            </h5>
                          </li>
                          <li>
                            <a href="listing-store.html">Moquegua</a>
                          </li>
                          <li>
                            <a href="listing-vendor.html">Pasco</a>
                          </li>
                          <li>
                            <a href="listing-event.html">Piura </a>
                          </li>
                          <li>
                            <a href="listing-rental.html">Puno</a>
                          </li>
                          <li>
                            <a href="listing-reservation.html">San Martín</a>
                          </li>
                          <li>
                            <a href="listing-service.html">Tacna</a>
                          </li>
              <li>
                            <a href="listing-service.html">Tumbes</a>
                          </li>
              <li>
                            <a href="listing-service.html">Ucayali</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
            
                </li>

                <li class="">
                  <a href="javascript:0">Categorías</a>
                  <ul class="dropdown">
                    <li><a href="contact-us.html">Transporte</a></li>
                    <li><a href="terms-of-services.html">Lugares Turísticos</a></li>
                    <li><a href="how-it-works.html">Hoteles</a></li>
                    <li><a href="user-profile.html">Restaurantes</a></li>
                  </ul>
                </li>

                <li class="">
                  <a href="blog.html">Reseñas</a>
                </li>
                <li class="active">
                  <a href="javascript:0">Usuario</a>
                  <ul class="dropdown">
                    <li>
                      <a href="javascript:0">Usuario</a>
                      <ul class="dropdown dropdown-lg-left">
                        <li><a href="profile-user.html">Perfil</a></li>
                      </ul>
                    </li>
                    <li>
                    </li>
                    <li><a href="login.html">Iniciar</a></li>
                    <li><a href="sign-up.html">Crear cuenta</a></li>
                    <li><a href="message-users.html">centro de ayuda</a></li>
                  </ul>

              </ul>

            </div>
          </div>
        </nav>
      </header>
  


    </div>
	  
	  
  <div class="titulo" id="titulolima"><?php echo $nombreCiudad ?></div>
    <section class="imagen" id="imalima">
	  <img  src="../archivos/<?php echo $imagenCiudad ?>"  alt="imagenlima"/> 
	  </section>
	  
	  <section class="text" id="textrux">
	  <p id="parrafo"><?php echo $descripcionCiudad ?> </p>
	  </section>
	  
	  
	  <div class="row">
			<div class="col-md-6 newancho">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md" href="listings-half-screen-map-list.html">
							<i class="icon-listy icon-car-1"></i>
						</div>
						<h3 class="h5 fw-normal mb-3">Transporte </h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Transporte</a></li>
							
						</ul>
					</div>
				</div>
			</div>

			

			<div class="col-md-6 newancho">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy icon-neighborhood"></i>
						</div>
						<h3 class="h5 fw-normal mb-3">Hoteles</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Hoteles</a></li>
						
						</ul>
					</div>
				</div>
			</div>

		

			<div class="col-md-6 newancho">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy"></i>
              <img src="../assets\img\resta.png" width="60px">
						</div>
						<h3 class="h5 fw-normal mb-3">Restaurante</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Restaurantes</a></li>
						
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 newancho">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy"></i>
              <img src="../assets\img\resenas.png" width="50px">
						</div>
						<h3 class="h5 fw-normal mb-3">Reseñas</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Reseñas</a></li>
							
						</ul>
					</div>
				</div>
			</div>



			<div class="col-md-6 newancho">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy"></i>
              <img src="../assets\img\turismo.png" width="70 "height="70">
						</div>
						<h3 class="h5 fw-normal mb-3">Lugares turisticos</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Lugares turisticos</a></li>
					
						</ul>
					</div>
				</div>
			</div>
		</div>

	   <script src='../assets/plugins/jquery/jquery-3.4.1.min.js'></script>
    <script src='../assets/plugins/bootstrap/js/bootstrap.bundle.js'></script>
    <script src='../assets/plugins/menuzord/js/menuzord.js'></script>

    <script src='../assets/plugins/selectric/jquery.selectric.min.js'></script>
    
    
    
    
    
    
    
    
    <script src='../assets/plugins/smoothscroll/SmoothScroll.js'></script>
    <script src='../assets/plugins/lazyestload/lazyestload.js'></script>
    
 
    
    <script src='../assets/js/listty.js'></script>
  
	  
  </body>
</html>