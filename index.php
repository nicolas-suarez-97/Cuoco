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
        <?php endif?>
        <!-- main container -->
        <div class="main_container" >

            <!-- pin element 1 -->
            <div class="pin" >
                <div class="holder">
                    <a class="image ajax" href=infoFoto.php title="Photo number 1" pin_id="1">
                        <img alt="Photo number 1" src="photos/pic1.jpg">
                                        
                     </a>
                </div>

            </div>

            <!-- pin element 2 -->
            <div class="pin">
                <div class="holder">
                    <a class="image ajax" href=infoFoto.php title="Photo number 2">
                        <img alt="Photo number 2" src="photos/pic2.jpg">

                    </a>
                </div>

            </div>

            <!-- pin element 3 -->
            <div class="pin">
                <div class="holder">
                    <a class="image ajax" href=infoFoto.php title="Photo number 3">
                        <img alt="Photo number 3" src="photos/pic3.jpg">
                        <div id="mycursor"></div>
                    </a>
                </div>

            </div>

            <!-- pin element 4 -->
            <div class="pin">
                <div class="holder">
                    <a class="image ajax" href=infoFoto.php title="Photo number 4">
                        <img alt="Photo number 4" src="photos/pic4.jpg">

                    </a>
                </div>


            </div>
                <!-- pin element 5 -->
                <div class="pin">
                    <div class="holder">
                        <a class="image ajax" href=infoFoto.php title="Photo number 1" pin_id="1">
                            <img alt="Photo number 1" src="photos/pic5.jpg">
                        </a>
                    </div>


                </div>
                    <!-- pin element 6 -->
            <div class="pin">
                <div class="holder">
                    <a class="image ajax" href=infoFoto.php title="Photo number 1" pin_id="1">
                        <img alt="Photo number 1" src="photos/pic6.jpg">

                    </a>
                </div>

            </div>
    <!-- pin element 7 -->
    <div class="pin">
        <div class="holder">
            <a class="image ajax" href=infoFoto.php title="Photo number 1" pin_id="1">
                <img alt="Photo number 1" src="photos/pic7.jpg">

            </a>
        </div>


    </div>
        <!-- pin element 8 -->
        <div class="pin">
            <div class="holder">
                <a class="image ajax" href=infoFoto.php title="Photo number 8" pin_id="1">
                    <img alt="Photo number 1" src="photos/pic8.jpg">

                </a>
            </div>


        </div>

            <!-- pin element 9 -->
            <div class="pin">
                <div class="holder">
                    <a class="image ajax" href=infoFoto.php title="Photo number 9" pin_id="1">

                        <img alt="Photo number 1" src="photos/pic9.jpg">
                    </a>
                </div>

            </div>
    <!-- pin element 10 -->
    <div class="pin">
        <div class="holder">
            <a class="image ajax" href=infoFoto.php title="Photo number 10" pin_id="1">

                <img alt="Photo number 1" src="photos/pic10.jpg">
            </a>
        </div>

    </div>



        </div>
    </body>
</html>