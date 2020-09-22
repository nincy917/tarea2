<?php
$conexion-mysquli_connect("localhost","root","","bdd_login");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
    <td>Usuario</td>
    <td>Nombre</td>
    <td>Contrasenia</td>
   </tr>

    <?php    
    $sql="SELECT * FROM usuario";
    $result = mysqli_query($conexion,$sql);

    while ($mostrar=mysqli_fetch_array($result)){
    ?>

    <tr>
    <td><?php echo $mostrar["Usuario"]?></td>
    <td><?php echo $mostrar["Nombre"]?></td>
    <td><?php echo $mostrar["Contrasenia"]?></td>
    </tr>
    <?php
    }
    ?>


    </table>
</body>
</html>