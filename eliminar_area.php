 <?php 
  
  include 'database.php';

  // GUARDAR DATOS 

  if($_SERVER["REQUEST_METHOD"]=="POST"){
  // print_r($_POST);
  
  $id = $_POST["area"];

 
  $query = "DELETE FROM  areas WHERE  id='$id'";

  $resultado = $conn->query($query);

  if($resultado){
     header('Location:area.php');
     echo 'Un datos ha sido eliminado';
  // echo "<h1><script>alert('...')</script></h1>";
  } 

  }
  

  ?>