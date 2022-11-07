<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        .form{
            background-color: #fff;
            margin: auto;
            width: 90%;
            max-width: 700px;
            padding: 4.5em 3em;
            border-radius: 10px;
            box-shadow: 0 5px 10px -5px rgb(0 0 0 / 30%)
        }
    </style>

</head>
<body>
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM juegos WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Videojuego</h1><hr>
                
                <form method="post" action="guardarRegistro.php" class="form">
                    
                <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $registro["nombre"]; ?>" type="text" class="form-control" name="nombre" placeholder="Teclea el titulo">
                    </div>

                <div class="form-group">
                    <label for="">Empresa Desarrolladora:</label>
                    <input value="<?php echo $registro["empresa_desarrolladora"]; ?>" type="text" class="form-control" name="empresa_desarrolladora">
                </div>
                    
                <div class="form-group">
                    <label for="">Descripción:</label>
                    <textarea value="<?php echo $registro["descripcion"]; ?>" name="descripcion" cols="30" rows="5" class="form-control" placeholder="Ingresar una pequeña reseña"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Precio:</label>
                    <input value="<?php echo $registro["precio"]; ?>" type="number" class="form-control" name="precio">
                </div>

                 <div class="form-group">
                    <label for="">Fecha de salida:</label>
                    <input value="<?php echo $registro["fecha_salida"]; ?>" type="date" class="form-control" name="fecha_salida">
                </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>

