<?php include("database.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <!-- vista css-->
    <link rel="stylesheet" href="vistausunv.css">
    

</head>
    <div class="div">
    
        <a href="http://localhost/usua/"> <img class="avatar" src="logos/logo.png" alt="logo"></a>
        <form action="form.php" method="POST">
    
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" placeholder="Nombre">
            <label for="Apellido">Apellido</label>
            <input type="text" name="Apellido" placeholder="Apellido">
            <label for="Direccion">Direccion</label>
            <input type="text" name="Direccion" placeholder="Ingresar Direccion">
            <label for="DNI">DNI</label>
            <input type="text" name="DNI" placeholder="Ingresar DNI">
            <label for="Nacimiento">Fecha de nacimiento</label>
            <input type="text" name="Nacimiento" placeholder="DD/MM/AAAA">
            <label for="Email">Email</label>
            <input type="text" name="Email" placeholder="Ingresar Email">
            <label for="Password">Password</label>
            <input type="password" name="Password" placeholder="Ingresar Password">
            

            <input type="submit" class="btn btn-success btn-block" name="save" value="Ingresar formulario">
        </form>
    </div>
<body>
    
</body>
</html>