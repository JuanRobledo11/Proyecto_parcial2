<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugador guardado con exito</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
</body>
</html>

<?php
    include 'menu.php';
    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $posicion = $_POST["posicion"];
    $pais = $_POST["pais"];
    $peso = $_POST["peso"];
    $estatura = $_POST["estatura"];

    $sql = "UPDATE jugador SET nombre='".$nombre."', fecha_nacimiento = '".$fecha_nacimiento."', posicion = '".$posicion."', pais = '".$pais."', peso = '".$peso."', estatura = '".$estatura."'"."WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "<h1 style='text-align:center; font-size: 35px; margin-top: 30px;'>Registro guardado con éxito <a href='consultarDatos.php'>Regresar</a></h1>";
        echo "<center><img src='img/like.png'><center>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>
