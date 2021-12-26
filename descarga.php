<?php
    include("database.php");
    $usuarios = "SELECT * FROM usu2";
    header("Content-type: application/vnd.ms-excel; charsert=iso-8859-1");
    header("content-Disposition: attachment; filename=datos-usuario.xls");
?>
<table border="1">
    <caption>Datos de usuario</caption>

    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>DNI</th>
        <th>Nacimiento</th>
        <th>Email</th>
        <th>Fregistro</th>
    </tr>




    <?php 
    $query = "SELECT * FROM usu2";
    $result_pru = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result_pru)) { ?>
        
        <tr>
            <td><?php echo $row["Nombre"];?></td>
            <td><?php echo $row["Apellido"];?></td>
            <td><?php echo $row["Direccion"];?></td>
            <td><?php echo $row["DNI"];?></td>
            <td><?php echo $row["Nacimiento"];?></td>
            <td><?php echo $row["Email"];?></td>
            <td><?php echo $row["Fregistro"];?></td>
        </tr> 

    <?php } mysqli_free_result($result_pru);?>  
        
                    
</table>
