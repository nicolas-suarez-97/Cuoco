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
        <link href="css/contacto.css" rel="stylesheet" type="text/css" />
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
			  <h2>Contactanos</h2>
			</div>
			<div class="row">
			  <div class="column">
				<div style="width:100%;height:500px"> <img src="photos/pic2.jpg"></div>
			  </div>
			  <div class="column">
				<form action="php/agregar_contacto.php" method="POST">
				  <label for="fname">Nombre Completo</label>
					<?php if(!isset($_SESSION['admin'])):?>
						<input type="text" id="fname" name="nombre_usu" placeholder="Escribe tu nombre">
						<label for="lname">Email</label>
				  	<input type="text" id="lname" name="email_usu" placeholder="Escribe tu email">
					<?php else:?>
						<input type="text" id="fname" name="nombre_usu" placeholder="Escribe tu nombre" >
						<label for="lname">Email</label>
				  	<input type="text" id="lname" name="email_usu" placeholder="Escribe tu email" value=<?php echo $_SESSION['admin']?>>
					<?php endif?>
				  
				  <label for="country">Motivo de contacto</label>
				  <select id="country" name="motive">
					<option value="elegir"> -- Elige aquí -- </option>
					<option value="sugerencia">Sugerencia</option>
					<option value="queja">Queja</option>
					<option value="pregunta">Pregunta</option>
					<option value="comentarios">Cometarios</option>
				  </select>
				  <label for="subject">Mensaje</label>
				  <textarea id="subject" name="subject" placeholder="Escribe tu mensaje y nos comunicaremos contigo lo antes posible!" style="height:170px"></textarea>
				  <input type="submit" value="Submit">
				</form>
			  </div>
			</div>
		</div>
		  
	</body>
		  
</html>
