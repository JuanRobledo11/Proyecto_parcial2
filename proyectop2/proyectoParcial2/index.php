<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qatar 2022</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        body{
            background-image: url(img/img1.jpg);
            background-repeat: no-repeat;
            background-size: 100vw 100vh;
        }

        .title, .title-jugadores{
            color: white;
            text-align:center;
        }

        .title{
            margin-bottom: 20px; 
        }

        .title-jugadores{
            margin-top: 30px;
        }

        img{
            width: 220px;
            height: 250px;
        }

        .container-img{
            display: flex;
            justify-content: center;
        }
        
        .container-promesas{
            display: flex;
            justify-content: center;
        }

        .card{
            width: 450px;
            height: 450px;
        }

        div.card > img{
            width: 286px;
            height: 196px;
        }

        div.card{
            margin-left: 50px;
            display: flex;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <h1 class="title">Grupos Qatar 2022</h1>
    <div class="container-img">
        <img src="img/grupoA.jpg" alt="Grupo A">
        <img src="img/grupoB.jpg" alt="Grupo B">
        <img src="img/grupoC.jpg" alt="Grupo C">
        <img src="img/grupoD.jpg" alt="Grupo D">
        <img src="img/grupoE.jpg" alt="Grupo E">
        <img src="img/grupoF.jpg" alt="Grupo F">
        <img src="img/grupoG.jpg" alt="Grupo G">
    </div>
    
    <h1 class="title-jugadores">Jugadores Promesas</h1>

    <div class="container-promesas">
    
        <div class="card" style="width: 18rem;">
            <img src="img/cr.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <ul>
                        <li>Edad: 37</li>
                        <li>Posicion: Delantero</li>
                        <li>Participaciones en mundiales: 2006, 2010, 2014, 2018</li>
                        <li>Partidos: 17</li>
                        <li>Goles: 7</li>
                    </ul>
                </p>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <img src="img/mbappe.jpeg" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <ul>
                        <li>Edad: 23</li>
                        <li>Posicion: Delantero</li>
                        <li>Participaciones en mundiales: 2018</li>
                        <li>Partidos: 7</li>
                        <li>Goles: 4</li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img/messi.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <ul>
                        <li>Edad: 35</li>
                        <li>Posicion: Delantero</li>
                        <li>Participaciones en mundiales: 2006, 2010, 2014, 2018</li>
                        <li>Partidos: 19</li>
                        <li>Goles: 6</li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img/neymar.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <ul>
                        <li>Edad: 30</li>
                        <li>Posicion: Delantero</li>
                        <li>Participaciones en mundiales: 2014 y 2018</li>
                        <li>Partidos: 10</li>
                        <li>Goles: 6</li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img/suarez.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <ul>
                        <li>Edad: 35</li>
                        <li>Posicion: Delantero</li>
                        <li>Participaciones en mundiales: 2010, 2014 y 2018</li>
                        <li>Partidos: 13</li>
                        <li>Goles: 7</li>
                    </ul>
                </p>
            </div>
        </div>
   
    </div>
    
    
    
    <script src="js/bootstrap.js"></script>
</body>
</html>