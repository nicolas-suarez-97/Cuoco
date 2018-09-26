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
        <link href="css/subir.css" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Overlock' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- add scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.masonry.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    
  <body class="wrap">
      <?php include 'header2.php'?>
 
          
		<div class="container">
			<div style="text-align:center">
			  <h2>Subir Contenido</h2>
			</div>
			<div class="row">
			  <div class="column">
				<div style="width:100%;height:500px"> <img src="images/no-image.png"></div>
			  </div>
			  <div class="column">
				<form action="php/subir_plato.php" method="POST" enctype="multipart/form-data">
                    <label for="fname">Título</label>                    
                    <input type="text" id="fname" name="titulo"  required>
                    
                    <label for="lname">Link</label>
                    <input type="text" id="lname" name="enlace"  required>														  				  
                    
                    <label for="subject">Descripción</label>
                    <textarea id="subject" name="descripcion"  style="height:170px"></textarea required>

                    <label for="lname">Categoría</label>
                    <input type="text" id="lname" name="categ"  required>	
                    
                    <input type="file" name="file">
                    <input type="submit" name="submit" value="Subir" >
                </form>
			  </div>
			</div>
		</div>
		  
	</body>
		  
</html>
