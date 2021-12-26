<?php include("database.php")?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>

        <!-- vista css-->
        <link rel="stylesheet" href="vista.css">

    </head>




    <body>

        <div class="div">
            <a href="http://localhost/usua/"> <img class="avatar" src="logos/logo.png" alt="logo"></a>
            <h1>Inicio de sesión</h1>
            
            <form action="validar.php" method="POST">    
                <!--NOMBRE-->
                <label for="Email">Email</label>

                <input type="text" name="Email" placeholder="Ingresar email">

                <!--CONTRASEÑA-->
                
                <label for="Password">Contraseña</label>
                <input type="Password" name="Password" placeholder="Ingresar password">
                

                <!--Boton de ingreso-->

                <input type="submit" class="btn btn-success btn-block" value="Ingresar">
            </form> 
            <a href="#">¿Olvidaste tu contraseña?</a>
            <a href="http://localhost/usua/usuarionv.php">Usuario nuevo</a> 
                
        </div>

        
    </body>

    </html>