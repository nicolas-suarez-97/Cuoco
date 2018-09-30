<?php
include_once 'php/conexion.php';

if($_GET){
  $id = $_GET['id'];
  $sql_unico = 'SELECT * FROM fotos WHERE id=?';
  $gsent_unico = $pdo->prepare($sql_unico);
  $gsent_unico->execute(array($id));
  
  $resultado_unico = $gsent_unico->fetch();  
}

$sql_leer = 'SELECT * FROM fotos WHERE categoria=?';
//$sql_leer = 'SELECT * FROM fotos ';
$gsent = $pdo->prepare($sql_leer);
//$gsent->execute();
$gsent->execute(array($resultado_unico['categoria']));

$resultado = $gsent->fetchAll();
?>

<!DOCTYPE html>
<html lang="en" >
    <head>



        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Cuoco" content="Cuoco Social Network" />



        
        <title>Info Foto</title>


        <!-- add styles -->
        <link href="css/infoFoto.css" rel="stylesheet" type="text/css" />
        <link href="css/main.css" rel="stylesheet" type="text/css" />
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
    
      <!DOCTYPE html>

  <div class="w3-row-padding w3-content" style="max-width:1400px">
  <div class="w3-twothird">
    <a><img src="uploads/<?php echo $resultado_unico['nombre_foto'];?>" alt="ejemplo" style="width:50%" class="imagenPrin"></a>
    <br>
    <br>
    <h2><?php echo $resultado_unico['titulo'];?></h2>
    <div class="w3-justify">
      <?php echo $resultado_unico['descripcion'];?>
    </div>
    <br>
    <br>
    <div>
        <a class="button">Visitar pagina</a>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="w3-third">
    <div class="w3-container w3-light-grey">
      <h2>Te podría interesar...</h2>
      <br>
      <div class="grid-container">       
        <?php foreach($resultado as $res):?>
          <?php if($res['id']!=$resultado_unico['id']):?>
          <div class="grid-item"><a href=infoFoto.php?id=<?php echo $res['id']?>><img src="uploads/<?php echo $res['nombre_foto']?>" class="imagen"></a></div>
          <?php endif?>
        <?php endforeach?>
      </div>
    </div>
</div>
</body>
</html>
    </body>
</html>