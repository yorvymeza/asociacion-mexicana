<?php 
 require 'database.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
  // print_r($_POST);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$categoria = $_POST['categoria'];
$nivel = $_POST['nivel'];
$permiso = $_POST['permiso'];
$foto = $_POST['foto'];
$sexo = $_POST['sexo'];
$escuela = $_POST['escuela'];


$query = "INSERT INTO  tabla_participantes(nombre,
apellido, fecha, altura,peso,categoria,nivel, permiso,foto,sexo,escuela) 
VALUES ('$nombre', '$apellido','$fecha','$altura','$peso', '$categoria', '$nivel','$permiso','$foto','$sexo','$escuela')";



  $resultado = $conn->query($query);

  if($resultado){

   echo "<h1><script>alert('Los datos han sido guardados con exito.')</script></h1>";

  } else{

  	 echo "<h1><script>alert('Los datos no han sido guardados.')</script></h1>";
  }

 



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
	    <link rel="stylesheet" type ="text/css" href="css/font-awesome.css"> 
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

							<form id="Ingresar" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

								<div class="text text-center mt-4">
									<h3>Agregar Participantes</h3>
									<p>Ingresa los datos</p>
								</div>
								<div class="container-fluid">
									<div class="row mt-4">
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Nombre</label>
<input id="nombre" type="text" name="nombre" placeholder="Nombre">
										</div>
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Apellido</label>
<input id="apellido" type="text" name="apellido" placeholder="Apellido">
										</div>
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Fecha de Nacimiento</label>
<input id="fecha" type="date" disable="disable" name="fecha" placeholder="00-00-0000">
										</div>
									</div>
									<div class="row mt-4">
				
									<div class="col-4 camp-u cp1">
 <label class="w-500 c-gris" for="user">Sexo</label>

<select name="sexo" id="sexo" style="width:100px;">

<option selected="selected" value="Masculino">Hombre</option>
<option value="Feminino">Mujer</option>

</select>


		<!-- <label class="w-500 c-gris" for="user">Sexo</label>
                   <select>
	                   <option>Hombre</option>
	                   <option>Mujer</option>
	                 </select>
 -->



						
					</div>
						<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Altura(cm)</label>
<input id="altura" type="text" disable="disable" name="altura" placeholder="Estatura">

										</div>
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Peso(Kg)</label>
<input id="peso" type="text" disable="disable" name="peso" placeholder="Peso">
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Categoria</label>
<input id="categoria" type="text" disable="disable" name="categoria" placeholder="Categoria">

										</div>
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Nivel</label>
<input id="nivel" type="text" disable="disable" name="nivel" placeholder="Nivel">

										</div>
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Tipo de Permisos</label>
<input id="permiso" type="text" disable="disable" name="permiso" placeholder="Permisos">
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-4 camp-u cp1">
				<label class="w-500 c-gris" for="user">Tipo</label>
											<select>
												<option>Tipo 1</option>
												<option>Tipo 2</option>
											</select>
				</div>
							<div class="col-4 camp-u cp1">
		<label class="w-500 c-gris" for="user">Escuela</label>

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
										<div class="col-4 camp-u cp1">
											<label class="w-500 c-gris" for="user">Foto</label>
<input id="foto" type="file" disable="disable" name="foto" placeholder="Selecciona" required>


<!-- <input class="file-1" id="user" type="file" name="file" placeholder="">
			 -->							</div>
									</div>
								</div>
								<div id="BtnLogin" class="mt-5 text-center mt-3">
<button class="w-500 b-verde">Agregar</button>
									
								</div>
							</form>
						</div>
					</div>
					<!--<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>-->
					<!--Lado Derecho-->
					<div class="col-6">
						<div class="" style="height:95%;">
							<div class="container-fluid">
								<!--Botones de accion o cambio-->
								<div class="row">
									<div class="col-6 align-self-center text-left">
										<div class="arrow-ch">
											<<<
										</div>
									</div>
									<div class="col-6 align-self-center text-right">
										<div class="arrow-ch">
											>>>
										</div>
									</div>
								</div>
								<!--Card de usuario-->
								<div class="row form mt-4">
									<!--Foto-->
									<div class="col-2 align-self-center text-center camp-u cp1">
										<img src="assets/img/participant/1.jpg" height="50px">

									</div>

									
									<!--Informacion personal-->
									<div class="col-10">
										<div class="container-fluid">
											<!--Secciones 1 de 4-->
											<div class="row w-500 c-blanco bg-verde">
												<div class="col-7 text-left">Alissa Navarez</div>
												<div class="col-5 text-right">Control #1</div>
											</div>
											<!--Secciones 2 de 4-->
											<div class="row w-500 c-gris ">
												<div class="col-6 text-left">20 años </div>
												<div class="col-6 text-right">Categoria Watter</div>
											</div>
											<!--Secciones 3 de 4-->
											<div class="row w-500 c-blanco bg-verde">
												<div class="col-6 text-left">Hombre</div>
												<div class="col-6 text-right">201 cm, 85 Kg</div>
											</div>
											<!--Secciones 4 de 4-->
											<div class="row w-500 c-gris">
												<div class="col-3 text-left">4to DAN</div>
												<div class="col-9 text-right">Torneo 25 Años Invierno, (Formas)</div>
											</div>
										</div>
									</div>
								</div>
								<!--Card de usuario-->
								<div class="row form mt-4">
									<!--Foto-->
									<div class="col-2 align-self-center text-center camp-u cp1">
										<img src="assets/img/participant/1.jpg" height="50px">
									</div>
									<!--Informacion personal-->
									<div class="col-10">
										<div class="container-fluid">
											<!--Secciones 1 de 4-->
											<div class="row w-500 c-blanco bg-verde">
												<div class="col-7 text-left">Alissa Navarez</div>
												<div class="col-5 text-right">Control #1</div>
											</div>
											<!--Secciones 2 de 4-->
											<div class="row w-500 c-gris ">
												<div class="col-6 text-left">20 años </div>
												<div class="col-6 text-right">Categoria Watter</div>
											</div>
											<!--Secciones 3 de 4-->
											<div class="row w-500 c-blanco bg-verde">
												<div class="col-6 text-left">Hombre</div>
												<div class="col-6 text-right">201 cm, 85 Kg</div>
											</div>
											<!--Secciones 4 de 4-->
											<div class="row w-500 c-gris">
												<div class="col-3 text-left">4to DAN</div>
												<div class="col-9 text-right">Torneo 25 Años Invierno, (Formas)</div>
											</div>
										</div>
									</div>
								</div>
								<!--Card de usuario-->
								<div class="row form mt-4">
									<!--Foto-->
									<div class="col-2 align-self-center text-center camp-u cp1">
										<img src="assets/img/participant/1.jpg" height="50px">
									</div>
									<!--Informacion personal-->
									<div class="col-10">
										<div class="container-fluid">
											<!--Secciones 1 de 4-->
											<div class="row w-500 c-blanco bg-verde">
												<div class="col-7 text-left">Alissa Navarez</div>
												<div class="col-5 text-right">Control #1</div>
											</div>
											<!--Secciones 2 de 4-->
											<div class="row w-500 c-gris ">
												<div class="col-6 text-left">20 años </div>
												<div class="col-6 text-right">Categoria Watter</div>
											</div>
											<!--Secciones 3 de 4-->
											<div class="row w-500 c-blanco bg-verde">
												<div class="col-6 text-left">Hombre</div>
												<div class="col-6 text-right">201 cm, 85 Kg</div>
											</div>
											<!--Secciones 4 de 4-->
											<div class="row w-500 c-gris">
												<div class="col-3 text-left">4to DAN</div>
												<div class="col-9 text-right">Torneo 25 Años Invierno, (Formas)</div>
											</div>
										</div>
									</div>
								</div>
								<!--Card de usuario-->
								<div class="row form mt-4">
									<!--Foto-->
									<div class="col-2 align-self-center text-center camp-u cp1">
										<img src="assets/img/participant/1.jpg" height="50px">
									</div>
									<!--Informacion personal-->
									<div class="col-10">
										<div class="container-fluid">
											<!--Secciones 1 de 4-->
											<div class="row w-500 c-blanco bg-verde">
												<div class="col-7 text-left">Alissa Navarez</div>
												<div class="col-5 text-right">Control #1</div>
											</div>
											<!--Secciones 2 de 4-->
											<div class="row w-500 c-gris ">
												<div class="col-6 text-left">20 años </div>
												<div class="col-6 text-right">Categoria Watter</div>
											</div>
											<!--Secciones 3 de 4-->
											<div class="row w-500 c-blanco bg-verde">
												<div class="col-6 text-left">Hombre</div>
												<div class="col-6 text-right">201 cm, 85 Kg</div>
											</div>
											<!--Secciones 4 de 4-->
											<div class="row w-500 c-gris">
												<div class="col-3 text-left">4to DAN</div>
												<div class="col-9 text-right">Torneo 25 Años Invierno, (Formas)</div>
											</div>
										</div>
									</div>
								</div>
							</div>
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