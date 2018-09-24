<!DOCTYPE html>
<html lang="en" >
    <head>



        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Cuoco" content="Cuoco Social Network" />

        
        <title>Registro</title>

        <!-- add styles -->
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <link href="css/registro.css" rel="stylesheet" type="text/css" />
        <link href="css/header.css" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Overlock' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- add scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.masonry.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body class="wrap">

        <!--HEADER-->
        <?php include 'header2.php'?>

        <form action="php/agregar_usuario.php" method ="POST">
                <div class="imgcontainer">
                  <img src="images/sombrero.png" alt="Avatar" class="avatar">
                </div>
              
                <div class="row" align="center">
                  <label for="nombre"><b>Nombre</b></label>
                </div>
                <div class="row" align="center">
                  <input type="text" placeholder="Ingresa tu nombre" name="nombre" required>
                </div>
                <div class="row" align="center">
                  <label type="text"><b>Email</b></label>
                </div>
                <div class="row" align="center">
                  <input type="text" placeholder="Ingresa tu email" name="email" required>
                </div>
                <div class="row" align="center">
                    <label for="psw"><b>Contraseña</b></label>
                 </div>
                <div class="row" align="center">
                    <input type="password" placeholder="Ingresa tu contraseña" name="contrasena" required>
                </div>
                <div class="row" align="center">
                        <label for="psw"><b>Contraseña Nuevamente</b></label>
                </div>
                <div class="row" align="center">
                        <input type="password" placeholder="Ingresa nuevamente tu contraseña" name="contrasena2" required>
                </div>
                <div class ="row" align="center">             
                  <button type="submit"> Registrarme</button>
                </div>

                <div class="row" align="center" p style="font-size:15px">
                    <h2 style="color: rgba(255, 255, 255, 0)">.</h2>
                </div>
                <div class ="row" align="center">             
                    <a href=login.php class="button">Inciar Sesión</a>
                </div>
              </form>
    </body>
</html>