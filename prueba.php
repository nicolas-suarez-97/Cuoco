<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="upfrm">
            <form action="php/subir_imagen.php" method="POST" enctype="multipart/form-data">
                Select Image File To Upload
                <input type="file" name="file">
                <input type="submit" name="submit" value="Upload">
            </form>
        </div>


        <div class="gallery">
            <h2>Uploaded Images</h2>
            <?php
                //Database config
                include 'php/dbConfig.php';
                //Get images
                $query = $db->query("SELECT * FROM fotos ORDER BY fecha DESC");
                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        $imageURL = 'uploads/'.$row['nombre_foto'];
            ?>
                        <img src="<?php echo $imageURL;?>"/>
            <?php
                    }
                }else{
            ?>
                    <p>No Images found...</p>
            <?php

                }
            ?>
        </div>
    </div>
</body>
</html>