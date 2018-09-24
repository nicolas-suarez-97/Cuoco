<?php
    
    include_once 'php/conexion.php';
    //LEER  
    $sql_leer = 'SELECT * FROM contacto ORDER BY motivo';
    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();

    $resultado = $gsent->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach ($resultado as $dato):?>
        <div class="alert alert-dark?> text-uppercase" role="alert">
            <?php echo $dato['motivo']?>
            <br>    
            <?php echo $dato['nombre'].' - '.$dato['email']?>
            <br>
            <?php echo $dato['descripcion']?>
            <br>
            <br>
        </div>
    <?php endforeach?>
</body>
</html>