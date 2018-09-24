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
<div id="myBtnContainer" clas="wrap">
  <button class="btn" id ="todos" onclick="filterSelection('all')"> Todos</button>
  <script>

      $(document).ready(function(){
          document.getElementById("todos").click();
      });

  </script>
  <button class="btn" onclick="filterSelection('frutas')"> Frutas </button>
  <button class="btn" onclick="filterSelection('restaurantes')"> Restaurantes </button>
  <button class="btn" onclick="filterSelection('hamburguesas')"> Hamburguesas</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class=row>
  <div class="column frutas">
    <div class="content">
      <a href=infoFoto.php><img src="photos/pic1.jpg" alt="Frutas" style="width:100%"></a>
      <h4>Fruits</h4>
      <p>Las frutas son ricas</p>
    </div>
  </div>
  <div class="column frutas">
    <div class="content">
      <a href=infoFoto.php><img src="photos/pic2.jpg" alt="Frutas" style="width:100%"></a>
      <h4>Frutas </h4>
      <p>Para el desayuno</p>
    </div>
  </div>
  <div class="column frutas">
    <div class="content">
      <a href=infoFoto.php><img src="photos/pic5.jpg" alt="Frutas" style="width:100%"></a>
      <h4>Frutitas</h4>
      <p>Las frutas para snacks</p>
    </div>
  </div>

  <div class="column restaurantes">
    <div class="content">
      <a href=infoFoto.php><img src="photos/pic4.jpg" alt="restaurantes" style="width:100%"></a>
      <h4>Retstorante</h4>
      <p>yum yum restaurante!</p>
    </div>
  </div>
  <div class="column restaurantes">
    <div class="content">
      <a href=infoFoto.php><img src="photos/pic10.jpg" alt="restaurantes" style="width:100%"></a>
      <h4>Paletas</h4>
      <p>Restaurantes de paletas</p>
    </div>
  </div>
  <div class="column restaurantes">
    <div class="content">
      <a href=infoFoto.php><img src="photos/pic8.jpg" alt="restaurantes" style="width:100%"></a>
      <h4>Para engordar</h4>
      <p>Delicioso restaurante para engordar</p>
    </div>
  </div>

  <div class="column hamburguesas">
    <div class="content">
      <a href=infoFoto.php><img src="photos/pic7.jpg" alt="hamburguesas" style="width:100%"></a>
      <h4>Sandwich</h4>
      <p>Sandwich que parece hamburguesa</p>
    </div>
  </div>
  <div class="column hamburguesas">
    <div class="content">
      <a href=infoFoto.php><img src="photos/pic4.jpg" alt="hamburguesas" style="width:100%"></a>
      <h4>Sushi</h4>
      <p>¿Hamburguesa de sushi? mira donde puedes conseguirla</p>
    </div>
  </div>
  <div class="column hamburguesas">
    <div class="content">
      <a href=infoFoto.php><img src="photos/pic9.jpg" alt="hamburguesas" style="width:100%"></a>
      <h4>Woah!</h4>
      <p>Las hamburguesas mas saludables que puedas comer</p>
    </div>
  </div>
<!-- END GRID -->
</div>
    </body>
</html>