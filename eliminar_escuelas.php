<?php 

 require 'database.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){

    	$id = $_POST["escuela"];

  

    $query = "DELETE FROM  tabla_escuela WHERE id='$id'";

    $resultado = $conn->query($query);

    if($resultado){
         header('Location:escuelas.php');
   echo "<h1><script>alert('Se ha borrdo un dato con exito.')</script></h1>";

  } 
  
    }






 ?>