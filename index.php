<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126410717-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126410717-1');
</script>

<?php
include_once 'php/conexion.php';
$sql_leer = 'SELECT * FROM fotos ORDER BY fecha DESC';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();


?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Cuoco" content="Cuoco Social Network" />

        
        <title>Cuoco</title>

        <!-- add styles -->
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <link href="css/header.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
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
           
        <?php if(isset($_SESSION['admin'])):?>
            <div class="container">
                <div class="row">
                    <div class="column">
                        <h1 style="color:black; text-transform:uppercase;margin:1cm;"  align="center">Bienvenido <?php echo $_SESSION['admin']?> </h1>                     
                    </div>
                    <div class ="row" align="center">   
                        <a href=subir.php class="button">Subir Contenido</a>
                    </div>
                </div>
            </div>
        <br>
        <?php endif?>
        <!-- main container -->
        <div class="main_container" >

            <?php foreach($resultado as $dato):?>
            <div class="pin">
                <div class="holder">
                    <a class="image ajax" href=infoFoto.php?id=<?php echo $dato['id']?> title="<?php echo $dato['titulo'];?>" pin_id="<?php echo $dato['id']?>">

                        <img alt="Photo number 1" src="uploads/<?php echo $dato['nombre_foto'];?>">
                    </a>
                </div>
            </div>
            <?php endforeach?>

        </div>
    </body>
</html>