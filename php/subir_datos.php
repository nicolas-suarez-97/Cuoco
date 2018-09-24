<?php 

$titulo = $_POST['titulo'];        
$enlace = $_POST['enlace'];
$descripcion = $_POST['descripcion'];
 

include_once 'conexion.php';
$sql_agregar = 'INSERT INTO articulos (titulo,link,descripcion) VALUES (?,?,?)';
$sentencia_agregar = $pdo->prepare($sql_agregar);


if($sentencia_agregar->execute(array($titulo,$enlace,$descripcion))){
    echo '<br> Agregado <br>';
}else{
    echo '<br> Error <br>';
}

$sentencia_agregar=null;
$pdo = null; 

header('Location: ../index.php');

