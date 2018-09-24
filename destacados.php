<!DOCTYPE html>
<html lang="en" >
    <head>



        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Cuoco" content="Cuoco Social Network" />

        
        <title>Destacados</title>

        <!-- add styles -->
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <link href="css/header.css" rel="stylesheet" type="text/css" />
        <link href="css/destacados.css" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Overlock' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- add scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.masonry.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    
    <body class="wrap">

        <!--HEADER-->
        <?php include 'header.php'?>

        <div class="row">
                <div class="column" id="child1">
                        <img src="photos/pic1.jpg" alt="restaurante" class="avatar">
                </div>
                <div class="column" id="parent1">
                       <h3 style="color:orange;"> Restaurante del mes</h3>
                       <p>El mejor restaurante del mes es __________ ha sido clasificado con 5 estrellas por parte de bl balblablabalbaalba </p>
                       <a href=infoFoto.php class="button"><i class="fas fa-info-circle"></i></a>
                </div>
                <div class="column" id="child2">
                        <img src="photos/pic2.jpg" alt="Comida" class="avatar">
                </div>
                <div class="column" id="parent2">
                        <h3 style="color:orange;">  Chef del mes</h3>
                        <p>El mejor Chef del mes es __________ ha sido clasificado con 5 estrellas por parte de bl balblablabalbaalba</p>
                        <a href=infoFoto.php class="button"><i class="fas fa-info-circle"></i></a>
                </div>
                    
                <div class="column" id="child3">
                        <img src="photos/pic3.jpg" alt="Chef" class="avatar">
                </div>
                <div class="column" id="parent3">
                        <h3 style="color:orange;">  Plato del mes</h3>
                        <p>El mejor Plato del mes es __________ ha sido clasificado con 5 estrellas por parte de bl balblablabalbaalba</p>
                        <a href=infoFoto.php class="button"><i class="fas fa-info-circle"></i></a>
                </div>
            </div>
    
    </body>
</html>