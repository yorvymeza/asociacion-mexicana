<?php 
   $server = 'localhost';
   $username = 'root';
   $password = '';
   $database = "asociacion-mexicana";


try {

		$conn = new PDO("mysql:
   		             host=$server; 
   		             dbname=$database;
   		             $username;", 
   		              $username,
   		              $password);
	
} catch (PDOException $e) {
	// echo 'Error':.$e->getMessage());
	 die ( 'Error de conexión:' . $e-> getMessage ());
}


 ?>