<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de jugadores</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        h1{
            text-align: center;
            margin-bottom: 10px;
            color: white;
        }

        body{
            background-image: url("img/consultarimg.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        thead, tr, th, td{
            color: white;
        }
    </style>
</head>
<body>

    <?php
      include 'conexion.php';
      $sql = "select * from jugador";
      $datos = $conexion->query($sql);

    ?>

    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Jugadores</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                            <th>Posicion en el campo</th>
                            <th>Pais</th>
                            <th>Peso</th>
                            <th>Estatura</th>
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
                            <td><?php echo $row["fecha_nacimiento"]; ?></td>
                            <td><?php echo $row["posicion"]; ?></td>
                            <td><?php echo $row["pais"]; ?></td>
                            <td><?php echo $row["peso"]; ?></td>
                            <td><?php echo $row["estatura"]; ?></td>
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
