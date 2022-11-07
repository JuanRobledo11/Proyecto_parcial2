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
        textarea{
            resize: none;
        }

        h1{
            text-align: center;
        }

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
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Videojuego</h1><hr>

                <form method="post" action="guardarDatos.php" class="form">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Empresa Desarrolladora:</label>
                        <input type="text" class="form-control" name="empresa_desarrolladora">
                    </div>

                    <div class="form-group">
                        <label for="">Descripción:</label>
                        <textarea name="descripcion" cols="30" rows="5" class="form-control" placeholder="Ingresar una pequeña reseña"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="number" class="form-control" name="precio" placeholder="Teclea el precio">
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de salida:</label>
                        <input type="date" class="form-control" name="fecha_salida">
                    </div>
                    <center>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar" class="enviar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                    <center>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
