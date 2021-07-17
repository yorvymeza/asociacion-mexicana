<?php

  require 'database.php';
  header('Location:admin.php');
    session_start();

  $message = ''; // Variable GLOBAL

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO login (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario';
    } else {
      $message = 'Lo sentimos, debe haber un problema al crear su cuenta';
    }
  }
?>