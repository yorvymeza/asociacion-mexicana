<?php 
  session_start();
 include  'database.php';
 ?>
<!DOCTYPE html>
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
							<li><a class="w-500 c-blanco" href="#app">Inicio</a></li>
							<li><a class="w-500 c-blanco" href="#app">Asistencia</a></li>
							<li><a class="w-500 c-blanco" href="#app">Agregar Usuario</a></li>
							<li><a class="w-500 c-blanco" href="#app">Areas</a></li>
							<li><a class="w-500 c-blanco" href="#feautures">Graficas</a></li>
							<li><a class="w-500 c-blanco" href="#feautures">Eventos</a></li>
							<li><a class="w-500 c-blanco" href="#feautures">Escuelas</a></li>
							<li><a class="w-500 b-verde" href="index.php">Login</a></li>
						</ul>
					</div>	
				</div>
			</div>
			<!--Center Main Container-->
			<div class="row vh100 cis">
				<div class="cmc col-12">
					<!--Formulariod e Inicio de sesion-->
					<div class="container-fluid pt-4">
						<div class="row ">
							<!--Medidas Responsives-->
							<div class="col-0 col-sm-2 col-md-3 col-lg-4"></div>
							<div class="col-12 col-sm-8 col-md-6 col-lg-4">

								<div class="form">
	                <form id="Ingresar" 
	           action="validar.php" method="POST">
										<div class="text text-center mt-4">
											<h3>Bienvenid@</h3>
											<p>Inicia Sesion</p>
										</div>

										<div class="camp cp1">
											<label for="user">Usuario</label>
<input id="user" type="text" name="email" placeholder="admin" required>
										</div>
										<div class="camp cp2 mt-3">
											<label for="pass">Contrase??a</label>
<input id="pass" type="password" name="password" placeholder="******" required>
										</div>
										<div id="TextoLogin" class="text-center mt-1">

											<br>

										</div>
			<div id="BtnLogin" class="boton text-center mt-3">
					<button type="submit" value="Ingresa">Ingresa</button>
										</div>
									</form>
								</div>
							</div>
							<div class="col-0 col-sm-2 col-md-3 col-lg-4"></div>
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