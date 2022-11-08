<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir jugador</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        .form{
            background-color: #fff;
            margin: auto;
            width: 90%;
            max-width: 500px;
            padding: 4.5em 3em;
            border-radius: 10px;
            box-shadow: 0 5px 10px -5px rgb(0 0 0 / 30%);
        }

        h1{
            text-align: center;
            color: black;
            font-size: 50px;
        }

        body{
            background-image: url("img/estadio.jpg");
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Añadir jugador</h1>
                <form method="post" action="guardarDatos.php" class="form" style="background: rgba(248,80,50,1);">

                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" name="fecha_nacimiento">
                    </div>

                    <div class="form-group">
                        <label for="">Posicion:</label>
                        <input type="text" class="form-control" name="posicion">
                    </div>

                    <div class="form-group">
                        <label for="">Pais:</label>
                        <input type="text" class="form-control" name="pais">
                    </div>

                    <div class="form-group">
                        <label for="">Peso:</label>
                        <input type="text" class="form-control" name="peso">
                    </div>

                    <div class="form-group">
                        <label for="">Estatura:</label>
                        <input type="text" class="form-control" name="estatura">
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
