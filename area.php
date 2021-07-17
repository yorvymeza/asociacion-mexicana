  <?php 
  
  include 'database.php';

  // GUARDAR DATOS 

  if($_SERVER["REQUEST_METHOD"]=="POST"){
   
    $name = $_POST['name'];
    $foto = $_POST['foto'];
    $disponible = $_POST['disponible'];

    $query = "INSERT INTO areas (name, foto, disponible)
    VALUES ('$name','$foto','$disponible')";

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
						<li><a class="w-500 c-blanco" href="asistencia.php">Asistencia</a></li>
						<li><a class="w-500 c-blanco" href="usuarios.php">Agregar Usuario</a></li>
						<li>
				<a class="w-500 c-blanco" href="area.php">Areas</a>
						</li>
						<li><a class="w-500 c-blanco" href="graficas.php">Graficas</a></li>
						<li><a class="w-500 c-blanco" href="eventos.php">Eventos</a></li>
						<li><a class="w-500 c-blanco" href="escuelas.php">Escuelas</a></li>
						<a class="w-500 b-verde" href="logout.php">Cerrar</a>
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
					<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>
					<div class="col-12 col-sm-10 col-md-8 col-lg-8">
						<div class="form">
					<div class="text text-center mt-4">
									<h3>Areas</h3>
									<p>Administracion de Areas</p>
								</div>
								<div class="container-fluid">
									<div class="row">
										<div class="col camp-u cp1">
						<label class="w-500 c-gris" for="user" >

						Selecciona un Area</label>			
<form action="eliminar_area.php" id="deleter" method="POST">
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
</form>			

 </div>
 	</div>
						
		<form id="Ingresar" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
								
					<div class="row mt-4">
						<div class="col-4 camp-u cp1">
						<label class="w-500 c-gris" for="user">Nombre del Area</label>
<input  type="text" name="name" id="name"  placeholder="Ejemplo1" required>
					</div>
			<div class="col-4 camp-u cp1">
					<label class="w-500 c-gris" for="user">¿Fotos?</label>
<input  type="file" disable="disable" name="foto" id="foto" required>

<!-- <input class="file-1" id="user" type="file" name="file" placeholder=""> -->
					</div>
										<div class="col-4 camp-u cp1">
							<label class="w-500 c-gris" for="user">¿Disponible?</label>
					<select name="disponible">

						<?php 
  $query = "SELECT * FROM areas";

  $resultado = $conn->query($query);
  foreach ($resultado as $fila) {
        ?><option>
       <?php echo $fila["disponible"]?></option><?php
    }
       ?>

					</select>

				</div>
				</div>
									
<div class="row mt-4 text-center">
<div class="col-4 camp-u cp1">
	
     
	<img src="assets/img/area.jpg" height="160px">
	<!-- Codigo para cargar la img con php -->

</div>


<div class="col-4 camp-u cp1">
 
    
	<img src="assets/img/area.jpg" height="160px">								 
	
</div>

										
<div class="col-4 camp-u cp1">
	
    
	<img src="assets/img/area.jpg" height="160px">								 

</div>

</div>

</div>
<div id="BtnLogin" class="mt-5 text-center mt-3">
						 

  <button type="button" onclick="(()=>{ console.log(document.querySelector('#deleter'));document.querySelector('#deleter').submit()  })() " class="w-500 b-rojo">Eliminar</button> 

<input type="submit"  class="w-500 b-verde" id="agregar" value="Agregar" name="submit">

									
				</div>
							</form>
						</div>
					</div>
					<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>
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