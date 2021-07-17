<?php 

  require 'database.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
    	// print_r($_POST);
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $repetir_clave = $_POST["repetir_clave"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $tipo_de_usuario = $_POST['tipo_de_usuario'];

    
  $query = "INSERT INTO tabla_usuarios (nombre, clave, repetir_clave, correo, telefono,tipo_de_usuario)
  VALUES ('$nombre', '$clave', 
  '$repetir_clave', '$correo', '$telefono', '$tipo_de_usuario')";


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
				<div class="row ">
					<!--Medidas Responsives-->
					<div class="col-0 col-sm-1 col-md-2 col-lg-2"></div>
					<div class="col-12 col-sm-10 col-md-8 col-lg-8">
						<div class="form">
			<form  method="POST" 
			    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >

			    
								<div class="text text-center mt-4">
									<h3>Administrar Usuarios</h3>
									<p>Ingresa los datos</p>
								</div>
								<div class="container-fluid">
									<div class="row">
		<div class="col-4 camp-u cp1">
<label class="w-500 c-gris" for="user">Usuario</label>
<input id="nombre" type="text" name="nombre" placeholder="Usuario">
          
			</div>
										<div class="col-4 camp-u cp1">
<label class="w-500 c-gris" for="user">Contraseña</label>
<input  type="password" id="clave" name="clave" placeholder="********">
										</div>
										<div class="col-4 camp-u cp1">
<label class="w-500 c-gris" for="user">Repite Contraseña</label>
<input type="password" id="repetir_clave" name="repetir_clave" placeholder="********">
										</div>
									</div>
									
									<div class="row mt-4">
					<div class="col-4 camp-u cp1">
<label class="w-500 c-gris" for="user">Tipo de Usuario</label>
				  
			<select id="validar" name="tipo_de_usuario">

	
			<option>Administrador</option>
		    <option>Maestro</option>									
			</select>
					
										</div>
										<div class="col-4 camp-u cp1">
<label class="w-500 c-gris" for="user">Correo</label>
<input id="correo" type="text" name="correo" placeholder="ejemplo@gmail.com" required>
										</div>
  <div class="col-4 camp-u cp1">

<label class="w-500 c-gris" for="user">Telefono</label>
<input id="telefono" type="text" name="telefono" placeholder="000 000 0000">
		</div> 
		
      </div>
									
			<div class="row mt-5">
			<div class="col camp-u cp1">

      
		
	   </div>
	</div>

					   			
								</div>
<div id="BtnLogin" class="mt-5 text-center mt-3">


		
									
								</div>
<div class="row mt-5">

	<div class="col camp-u cp1">

		<label class="w-500 c-gris" for="user">Eliminar Usuario Existente</label>


  
  	</form>

	<form action="eliminar_usuario.php" id="deleter" method="POST">
<select id="usuario" name="usuario">
<?php 
  $query = "SELECT * FROM tabla_usuarios";

  $resultado = $conn->query($query);
  foreach ($resultado as $fila) {
        ?><option value="<?php echo $fila["id"]?>">
       <?php echo $fila["nombre"]?></option><?php
    }
    
       ?>

 </select>							
</form>

  </div>
</div>
	
                 <br>
             <button type="button" onclick="(()=>{ console.log(document.querySelector('#deleter'));document.querySelector('#deleter').submit()  })() " class="w-500 b-rojo">Eliminar</button>
        
        <input type="submit"  class="w-500 b-verde" id="agregar" value="Agregar" name="submit">
 
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

