<?php
    include("database.php");
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $consulta="SELECT * FROM usu2 WHERE Email='$Email' and Password='$Password' ";

    $resultado=mysqli_query($conn, $consulta);

    $filas=mysqli_num_rows($resultado);
    if($filas>0){
        header("Location:http://localhost/usua/");
    }else{
        header("Location:http://localhost/usua/registro.php");
    }
    mysqli_free_result($resultado);

?>