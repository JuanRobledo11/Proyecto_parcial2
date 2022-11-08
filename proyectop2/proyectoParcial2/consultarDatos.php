<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>

    <?php
      include 'conexion.php';
      $sql = "select * from juegos";
      $datos = $conexion->query($sql);
    ?>

    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">

            <h1 class="title" style="text-align:center; padding-bottom: 20px">Lista de deseos</h1>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Empresa Desarrolladora</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Fecha de lanzamiento</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 
                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["empresa_desarrolladora"]; ?></td>
                            <td><?php echo $row["descripcion"]; ?></td>
                            <td><?php echo $row["precio"]; ?></td>
                            <td><?php echo $row["fecha_salida"]; ?></td>
                            <td>
                                <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                                <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>