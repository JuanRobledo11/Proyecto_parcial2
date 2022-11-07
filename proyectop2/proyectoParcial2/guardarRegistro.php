<?php 
    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $empresa_desarrolladora = $_POST["empresa_desarrolladora"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $fecha_salida = $_POST["fecha_salida"];

    $sql = "UPDATE juegos SET nombre='".$nombre."', empresa_desarrolladora = '".$empresa_desarrolladora."', descripcion='".$descripcion."', precio='".$precio."', fecha_salida='".$fecha_salida."'"."WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>