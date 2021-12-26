<?php

include('database.php');

if (isset($_POST['save'])) {
  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Direccion = $_POST['Direccion'];
  $DNI = $_POST['DNI'];
  $Nacimiento = $_POST['Nacimiento'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  
  $query = "INSERT INTO usu2(Nombre, Apellido, Direccion, DNI, Nacimiento, Email, Password) VALUES ('$Nombre', '$Apellido', '$Direccion', '$DNI', '$Nacimiento', '$Email', SHA('$Password'))";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Error de registro.");
  }else{
    header("Location: http://localhost/usua/registro.php");
  }
}

?>