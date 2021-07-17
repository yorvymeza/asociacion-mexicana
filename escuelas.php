<?php 

 require 'database.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
       $escuela = $_POST['escuela'];
       $direction = $_POST['direction'];
       $manager = $_POST['manager'];
       $texto_para_escribir = $_POST['texto_para_escribir'];



       $query = "INSERT INTO tabla_escuela (escuela,direction, manager,texto_para_escribir) 
       VALUES('$escuela','$direction','$manager','$texto_para_escribir')";

       $resultado = $conn->query($query);

   
  }


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
	    <link rel="stylesheet" type ="assets/text/css" href="assets/css/font-awesome.css"> 
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
						<li><a class="w-500 c-blanco" href="index.php">Inicio</a></li>
						<li><a class="w-500 c-blanco" href="asistencia.php">Asistencia</a></li>
						<li><a class="w-500 c-blanco" href="participantes.php">Participantes</a></li>
						<li><a class="w-500 c-blanco" href="usuarios.php">Agregar Usuario</a></li>
						<li><a class="w-500 c-blanco" href="area.php">Areas</a></li>
						<li><a class="w-500 c-blanco" href="graficas.php">Graficas</a></li>
						<li><a class="w-500 c-amarillo" href="eventos.php">Eventos</a></li>
						<li><a class="w-500 c-blanco" href="escuelas.php">Escuelas</a></li>
						<li><a class="w-500 b-verde" href="logout.php">Cerrar</a></li>
					</ul>
				</div>	
			</div>

			
	</div>
	<!--Center Main Container-->
	<div class="row vh100 cis">
		<div class="cmc col-12">
			<!--Formulariod e Inicio de sesion-->
			<div class="container-fluid pt-4">
				<div class="row">
					<!--Medidas Responsives
					<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>-->
					<!--Lado izquierdo-->
					<div class="col-6">
						<div class="form">
			<form  method="POST" 
			    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

								<div class="text text-center mt-4">
									<h3>Escuelas</h3>
									<p>Añade Escuelas</p>
								</div>
								<div class="container-fluid">
									<div class="row">
										<div class="col-12 camp-u cp1">
											<label class="w-500 c-gris" for="user">Nombre de la Escuela</label>
<input id="escuela" type="text" name="escuela" placeholder="Nombre de la escuela">
										</div>
										<div class="col-12 mt-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Direccion de la escuela</label>
<input id="direction" type="text" name="direction" placeholder="Ingrese la direccion">
										</div>
										<div class="col-12 mt-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Selecciona un Estudiante</label>
	<input id="manager" type="text" name="manager" placeholder="Director">
										</div>
										<div class="col-12 mt-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">¿Alguna Nota?</label>
		<input  type="text" name="texto_para_escribir" placeholder="Espacio en blanco para alguna nota rapida">

		<!-- <textarea name="texto"></textarea> -->
										</div>
									</div>
								</div>
								<div id="BtnLogin" class="mt-5 text-center mt-3">

			<!-- <button class="w-500 b-verde">Agregar</button> -->

<input type="submit"  class="w-500 b-verde" id="agregar" value="Agregar" name="submit">
									
								</div>
							</form>

							
						</div>
					</div>
					<!--<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>-->
					<!--Lado Derecho-->
					<div class="col-6">
						<div class="form" style="height:95%;">

							<form  method="POST" 
			               action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">


								<div class="text text-center mt-4">
									<h3>Escuelas</h3>
									<p>Administra Participantes</p>
								</div>
								<div class="container-fluid">
									<div class="row">
										<div class="col-12 camp-u cp1">
											<label class="w-500 c-gris" for="user">Selecciona un Escuela</label>
						<form action="eliminar_escuela.php" id="deleter" method="POST">
											
					   <select id="escuela" name="escuela">
					   	<?php 
					   	$query = "SELECT * FROM tabla_escuela";

					   	$resultado = $conn->query($query);
					   	foreach ($resultado as $fila) {
					   		?><option>
					   			<?php echo $fila["escuela"]?></option><?php
					   		}

					   		?>
							<!-- <option>Escuela 1</option>
						    <option>Escuela 2</option> -->
						</select>
						</form>	
						</div>
							</div>
									<div class="row mt-4">
										<div class="col-12 camp-u cp1">
					<label class="w-500 c-gris" for="user">Selecciona un participante</label>
											<select>

												<?php 
					   	$query = "SELECT * FROM tabla_escuela";

					   	$resultado = $conn->query($query);
					   	foreach ($resultado as $fila) {
					   		?><option>
					   			<?php echo $fila["manager"]?></option><?php
					   		}

					   		?>
										
								</select>

										</div>
									</div>
								</div>
								<div id="BtnLogin" class="mt-5 btns-es text-center mt-3">
			<!-- <button class="w-500 b-verde">Agregar</button> -->

			<input type="submit"  class="w-500 b-verde" id="agregar" value="Agregar" name="submit">

			
			<button type="button" onclick="(()=>{ console.log(document.querySelector('#deleter'));document.querySelector('#deleter').submit()  })() " class="w-500 b-rojo">Eliminar</button> 


			<!-- <button class="w-500 b-amarillo">Actualizar</button> -->
                 
            <a href="actualizar_escuelas.php?id=<?php echo $fila['id'];?>" class="w-500 b-rojo">Actualizar</a>

								</div>
							</form>
						</div>
					</div>
					<!--<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>-->
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