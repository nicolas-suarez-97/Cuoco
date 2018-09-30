<?php
include_once 'php/conexion.php';

$sql_categ = 'SELECT DISTINCT categoria FROM fotos';
$gsent = $pdo->prepare($sql_categ);
$gsent->execute();
$resultado_categ = $gsent->fetchAll();

$sql_leer = 'SELECT * FROM fotos ORDER BY fecha DESC';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

?>
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Cuoco" content="Cuoco Social Network" />

        <title>Explorar</title>

        <!-- add styles -->
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <link href="css/explorar.css" rel="stylesheet" type="text/css" />
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
       <?php include 'header.php'?>

        <br>
        <div id="myBtnContainer" class="scrollmenu">
            <button class="btn" id ="todos" onclick="filterSelection('all')"> Todos</button>
            <script>

                $(document).ready(function(){
                    document.getElementById("todos").click();
                });

            </script>

            <?php foreach($resultado_categ as $categ):?>
                <button class="btn" onclick="filterSelection('<?php echo $categ['categoria'];?>')"> <?php echo $categ['categoria'];?></button>
            <?php endforeach?>
        </div>

<!-- Portfolio Gallery Grid -->

        <section id="photos">
            <?php foreach($resultado as $dato):?>

                <div class="column <?php echo $dato['categoria']?>">
                    <div class="container">
                        <div class="content">
                            <a ><img src="uploads/<?php echo $dato['nombre_foto']?>" alt="IMAGEN" style="width:100%"></a>
                            <a class="overlay" href=infoFoto.php?id=<?php echo $dato['id']?>>
                                <div class="text"><?php echo $dato['titulo']?></div>
                            </a>    
                        </div>
                    </div>

                </div>
                <!-- END GRID -->
            <?php endforeach?>
        </section>
    </body>
</html>