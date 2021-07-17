<?php 


include 'database.php';

  // GUARDAR DATOS 
  

  if($_SERVER["REQUEST_METHOD"]=="POST"){
  print_r($_POST);
  
  $id = $_POST["usuario"];

 
  $query = "DELETE FROM  tabla_usuarios WHERE  id='$id'";

  $resultado = $conn->query($query);

   if($resultado){
     header('Location:usuarios.php');
     echo 'Un datos ha sido eliminado';
  // echo "<h1><script>alert('...')</script></h1>";
  }

  }



?>