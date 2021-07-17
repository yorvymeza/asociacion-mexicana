<?php 
 include  'database.php';
  session_start();
  

 ?>
<!Doctype html>
<html class="h-100">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Asociacion Mexicana de MDK</title>
	    <!-- Icon -->
	    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	    <!-- Font Awesome -->
	    <link rel="stylesheet" type ="text/css" href="assets/css/font-awesome.css"> 
	    <!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <!-- Material Design Bootstrap -->
	    <link rel="stylesheet" href="assets/css/mdb.min.css">
	    <!-- Your custom styles (optional) -->
	    <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<!--<script type="text/javascript">
		if((screen.width < 500)){
			window.location.href = 'index-m.html';
		};
	</script>
	This web has been created by Anderson Velasquez-->
<body>
<!--Inicio del proyecto-->
<div class="container-fluid">
	<!--Preloader-->
	<!--header-->
	<div class="header row align-items-center p-1 bg-negro box-s1">
		<!--Logo-->
		<!--Lado Izquierdo del header(Logo)-->
			<div class="col-3">
				<div class="header-img pl-4 pb-2 pt-2">
					<img src="assets/img/logo.png" alt="SOS SEGURIN" height="50px">
				</div>
			</div>
			<!--Lado derecho del header-->
			<div class="col-9">
				<div class="header-menu pr-4 text-right">
					<ul class="ul l-h l-m-h-1">
						<li><a class="w-500 c-blanco" href="">Inicio</a></li>
						<li><a class="w-500 c-blanco" href="">Asistencia</a></li>
						  <li>
					      <a class="w-500 c-blanco" href="usuarios.php">Agregar Usuario
							</a>
						 </li>
						<li>
							<a class="w-500 c-blanco" href="area.php">Areas</a>
						</li>
						<li><a class="w-500 c-blanco" href="#feautures">Graficas</a></li>
						<li><a class="w-500 c-blanco" href="#feautures">Eventos</a></li>
						<li><a class="w-500 c-blanco" href="#feautures">Escuelas</a></li>
						<li>
							
							<a class="w-500 b-verde" href="logout.php">Cerrar</a>

						</li>
					</ul>
				</div>	
			</div>
	</div>
	<!--Center Main Container-->
	<div class="row vh100 cis">

		<div class="cmc col-12">
			<!--Formulariod e Inicio de sesion-->
			<div class="container-fluid pt-4">
				<!--Linea de cards-------------------------------------->
				<div class="row">
					<!--Medidas Responsives
					<div class="col-0 col-sm-2 col-md-3 col-lg-4"></div>-->
					<!--Card-->
					<div class="col-3 ">
						<div class="form fops">
							<div class="text text-center">
								<h3>Graficas</h3>
								<p>Edita Graficas</p>
							</div>
							<div class="text-center">
								<img src="assets/img/iconos/estadisticas.png" height="70px">
							</div>
						</div>
					</div>
					<!--Card-->
					<div class="col-3 ">
						<div class="form fops">
							<div class="text text-center">
								<h3>Usuarios</h3>
								<p>Edita Usuarios</p>
							</div>
							<div class="text-center">
								<img src="assets/img/iconos/usuarios.png" height="70px">
							</div>
						</div>
					</div>
					<!--Card-->
					<div class="col-3 ">
						<div class="form fops">
							<div class="text text-center">
								<h3>Areas</h3>
								<p>Edita Areas</p>
							</div>
							<div class="text-center">
								<img src="assets/img/iconos/areas.png" height="70px">
							</div>
						</div>
					</div>
					<!--Card-->
					<div class="col-3 ">
						<div class="form fops">
							<div class="text text-center">
								<h3>Eventos</h3>
								<p>Controla Eventos</p>
							</div>
							<div class="text-center">
								<img src="assets/img/iconos/eventos.png" height="70px">
							</div>
						</div>
					</div>
					<!--<div class="col-0 col-sm-2 col-md-3 col-lg-4"></div>-->
				</div>
				<!--Linea de cards-------------------------------------->
				<div class="row">
					<!--Medidas Responsives
					<div class="col-0 col-sm-2 col-md-3 col-lg-4"></div>-->
					<!--Card-->
					<div class="col-3 ">
						<div class="form fops">
							<div class="text text-center">
								<h3>Participantes</h3>
								<p>Administra Participantes</p>
							</div>
							<div class="text-center">
								<img src="assets/img/iconos/participantes.png" height="70px">
							</div>
						</div>
					</div>
					<!--Card-->
					<div class="col-3 ">
						<div class="form fops">
							<div class="text text-center">
								<h3>Escuelas</h3>
								<p>Edita Escuelas</p>
							</div>
							<div class="text-center">
								<img src="assets/img/iconos/escuelas.png" height="70px">
							</div>
						</div>
					</div>
					<!--Card-->
					<div class="col-3 ">
						<div class="form fops">
							<div class="text text-center">
								<h3>Asistencias</h3>
								<p>Marca Asistencias</p>
							</div>
							<div class="text-center">
								<img src="assets/img/iconos/asistencia.png" height="70px">
							</div>
						</div>
					</div>
					<!--Card-->
					<div class="col-3 ">
						<div class="form fops">
							<div class="text text-center">
								<h3>Salir</h3>
								<p>Salir del sistema</p>
							</div>
							<div class="text-center">
								<img src="assets/img/iconos/salir.png" height="70px">
							</div>
						</div>
					</div>
					<!--<div class="col-0 col-sm-2 col-md-3 col-lg-4"></div>-->
				</div>
			</div>
		</div>
	</div>


</div>
<!-- Final del proyecto -->
	<!-- jQuery -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="assets/js/mdb.min.js"></script>
	<!-- Your custom scripts (optional) -->
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script>
	  new WOW().init();
	</script>
</body>
</html>