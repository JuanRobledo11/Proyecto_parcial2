<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugador Eliminado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
</body>
</html>





<?php
    include 'menu.php';
    include 'conexion.php';

    $id = $_GET["id"];

    $sql = "DELETE FROM jugador WHERE id=" . $id;

    if($conexion->query($sql) === TRUE){
        echo "<h1 style='text-align:center; font-size: 35px; margin-top: 30px;'>Se eliminó el registro con ID"  .$id. "";
        echo " <a href='consultarDatos.php'>Regresar</a></h1>";
        echo "<center><img src='img/like.png'><center>";
    } else {
        echo "Ocurrió un error: " . $conexion->error ."<br>";
        echo "<a href='consultarDatos.php'>Regresar</a>";
    }

?>
