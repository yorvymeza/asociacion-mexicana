  <?php 

  require 'database.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
    	// print_r($_POST);
    	$nombre = $_POST['nombre'];
    	$fecha = $_POST['fecha'];
    	$ultima_fecha = $_POST['ultima_fecha'];
    	$ciudad = $_POST['ciudad'];
    	$estado = $_POST['estado'];
    	$area_de_texto = $_POST['area_de_texto'];

    $query = "INSERT INTO tabla_eventos (nombre,fecha,ultima_fecha,ciudad,estado,area_de_texto) 
    VALUES('$nombre','$fecha','$ultima_fecha
    ','$ciudad','$estado','$area_de_texto')";


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
	    <link rel="icon" href="img/favicon.png" type="asses/image/x-icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	    <!-- Font Awesome -->
	    <link rel="stylesheet" type ="assets/text/css" href="css/font-awesome.css"> 
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
						<li><a class="w-500 c-blanco" href="graficas.html">Graficas</a></li>
						<li><a class="w-500 c-amarillo" href="eventos.php">Eventos</a></li>
						<li><a class="w-500 c-blanco" href="escuelas.php">Escuelas</a></li>
						<li><a class="w-500 b-verde" href="logout.php">Cerrar</a></li>
					</ul>
				</div>	
			</div>


	</div>
	<!--Center Main Container(nodal)-->
	<div class="row cis noidal hd">
		<div class="cmc col-12" style="background: #35353557; height:100vh;">
			<!--Formulariod e Inicio de sesion-->
			<div class="container-fluid pt-4">
				<div class="row ">
					<!--Medidas Responsives-->
					<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>
					<div class="col-12 col-sm-10 col-md-8 col-lg-8">
						<div class="form">
							<form  method="POST" 
			    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
								<div class="text text-center mt-4">
									<h3>Evento 1</h3>
									<p>Participantes Inscritos</p>
								</div>
								<div class="container-fluid">
									<!--Participante-->
									<div class="row mt-4">
										<div class="col-3 camp-u cp1">
											<label class="w-500 c-gris" for="user">Nombre</label>
<input id="user" type="text" name="user" placeholder="Anderson" disabled="disabled">
										</div>
										<div class="col-3 camp-u cp1">
	<label class="w-500 c-gris" for="user">Escuela</label>

        

<input id="user" type="text" name="user" placeholder="Escuela 1" disabled="disabled">
										</div>
										<div class="col-3 camp-u cp1">
											<label class="w-500 c-gris" for="user">Nivel</label>
<input id="user" type="text" name="user" placeholder="2do Dan" disabled="disabled">
										</div>
										<div class="col-3 camp-u cp1">
											<label class="w-500 c-gris" for="user">Edad</label>
<input id="user" type="text" name="user" placeholder="20" disabled="disabled">
										</div>
									</div>
									<!--Participante-->
									<div class="row mt-4">
										<div class="col-3 camp-u cp1">
											<label class="w-500 c-gris" for="user">Nombre</label>
<input id="name" type="text" name="name" placeholder="Anderson" disabled="disabled">
										</div>
										<div class="col-3 camp-u cp1">
											<label class="w-500 c-gris" for="user">Escuela</label>
<input id="escuela" type="text" name="escuela" placeholder="Escuela 1" disabled="disabled">
										</div>
										<div class="col-3 camp-u cp1">
											<label class="w-500 c-gris" for="user">Nivel</label>
<input id="grado" type="text" name="grado" placeholder="2do Dan" disabled="disabled">
										</div>
										<div class="col-3 camp-u cp1">
											<label class="w-500 c-gris" for="user">Edad</label>
<input id="edad" type="text" name="edad" placeholder="20" disabled="disabled">
										</div>
									</div>

								</div>
								<div id="btn-mod-c" class="mt-5 text-center mt-3">
									<button class="w-500 b-rojo">Cerrar</button>	
								</div>
							</form>
						</div>
					</div>
					<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>
				</div>
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
					<div class="col-7">
						<div class="form">
							<form  method="POST" 
			    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >

								<div class="text text-center mt-4">
									<h3>Eventos</h3>
									<p>Administra Eventos</p>
								</div>
								<div class="container-fluid">
									<div class="row">
										<div class="col-12 camp-u cp1">
											<label class="w-500 c-gris" for="user">Selecciona un Evento</label>
					<select>
							<?php 
  $query = "SELECT * FROM tabla_eventos";

  $resultado = $conn->query($query);
  foreach ($resultado as $fila) {
        ?><option>
       <?php echo $fila["nombre"]?></option><?php
    }
    
       ?>

<!-- 
	<option>Escuela 1</option>
	<option>Escuela 2</option> -->

					</select>
										</div>
									</div>
	<!-- Primera tabla EVENTOS Administra Eventos... -->
									<div class="row mt-4">
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Nombre</label>
<input id="nombre" type="text" name="nombre" placeholder="Evento 1">
										</div>
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Fecha de Inicio</label>
<input id="dates" type="date" disable="disable" name="fecha" placeholder="00-00-0000">

										</div>
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Fecha de Finalizacion</label>
<input id="ultima_fecha" type="date" disable="disable" name="ultima_fecha" placeholder="00-00-0000">
											
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-4 camp-u cp1">
							<label class="w-500 c-gris" for="user">Area de Ejecucion</label>


					<select id="area" name="area">
<?php 
  $query = "SELECT * FROM areas";

  $resultado = $conn->query($query);
  foreach ($resultado as $fila) {
        ?><option value="<?php echo $fila["id"]?>">
       <?php echo $fila["name"]?></option><?php
    }
    
       ?>

   </select>
			
						</div>
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Ciudad</label>
<input id="ciudad" type="text" disable="disable" name="ciudad" placeholder="Ciudad">

										</div>
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Estado</label>
<input id="estado" type="text" disable="disable" name="estado" placeholder="Estado">
											</div>
									</div>
									<div class="row mt-4">
										<div class="col-12 camp-u cp1">
											<label class="w-500 c-gris" for="user">??Alguna Nota?</label>
<input id="area_de_texto" type="text" name="area_de_texto" placeholder="Espacio en blanco para alguna nota rapida">
										</div>
									</div>
								</div>
								<div id="BtnLogin" class="mt-5 text-center mt-3">
									<input type="submit"  class="w-500 b-verde" id="agregar" value="Agregar" name="submit">	
								</div>
							</form>
						</div>
					</div>
					<!--<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>-->
					<!--Lado Derecho-->
					<div class="col-5">
						<div class="form" style="height:95%;">
							<form  method="POST" 
			    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >

								<div class="text text-center mt-4">
									<h3>Eventos</h3>
									<p>A??ade Participantes</p>
								</div>
								<div class="container-fluid">
									<div class="row">
										<div class="col-12 camp-u cp1">
											<label class="w-500 c-gris" for="user">Selecciona un Evento</label>
				<select>

					       	<?php 
  $query = "SELECT * FROM tabla_eventos";

  $resultado = $conn->query($query);
  foreach ($resultado as $fila) {
        ?><option>
       <?php echo $fila["nombre"]?></option><?php
    }
       ?>
				<!-- <option>Evento 1</option>
				<option>Evento 2</option> -->
				</select>
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-12 camp-u cp1">
			<label class="w-500 c-gris" for="user">Selecciona una Escuela</label>

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
									<div class="row mt-4">
										<div class="col-8 camp-u cp1">
							<label class="w-500 c-gris" for="user">Checkea los participantes</label>

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
						<div class="col-4 text-center mt-4">
							<a id="btn-ver-m" class="w-500 b-verde">Verificar</a>
										</div>
									</div>
								</div>
								<div id="BtnLogin" class="mt-5 btns-es text-center mt-3">
									<button class="w-500 b-verde">Agregar</button>
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
	
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="assets/js/mdb.min.js"></script>
	<!-- Your custom scripts (optional) -->
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
	<script>
	  new WOW().init();
	</script>
</body>
</html>