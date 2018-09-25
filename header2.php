<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
    <head>



        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Cuoco" content="Cuoco Social Network" />

        
        <title>Cuoco</title>

        <!-- add styles -->
        <link href="css/header.css" rel="stylesheet" type="text/css" />
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Overlock' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- add scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.masonry.min.js"></script>
        <script src="js/script.js"></script>
        
    </head>
 <body>
    <header>

        <a href=index.php id="logo"></a> 
        <nav>
        
        <a href="#" id="menu-icon"></a>
        
        
        <ul class="nav">

            <li>
                <a href=index.php><i class="fas fa-utensils"style="font-size:18px;"></i> Cocina</a>
            </li>
            <li>
                    <a href=explorar.php><i class="fas fa-rocket"style="font-size:18px;"></i> Explorar</a>
            </li>
            <li>
                    <a href=destacados.php> <i class="fas fa-star"style="font-size:18px;"></i> Destacados</a>
            </li>
            <li>
                <a href=contacto.php><i class="fas fa-comments"style="font-size:18px;"></i> Contacto</a>
            </li>
            <?php if(!isset($_SESSION['admin'])):?>
            <li>
                <a href=login.php> <i class="fas fa-sign-in-alt"style="font-size:18px;"></i> Login</a>
            </li>
            <?php else:?>
            <li>
                <a href=php/cerrar.php> <i class="fas fa-sign-out-alt "style="font-size:18px;"></i> Cerrar Sesión</a>
            </li>
            <?php endif?>
        </ul>        
      </header>
   </body>
</html>