<?php
$nombre_con = $_POST['nombre_usu'];        
$email_con = $_POST['email_usu'];
$motivo = $_POST['motive'];
$descripcion = $_POST['subject'];
 

include_once 'conexion.php';
$sql_agregar = 'INSERT INTO contacto (nombre,email,motivo,descripcion) VALUES (?,?,?,?)';
$sentencia_agregar = $pdo->prepare($sql_agregar);


header('Location: ../index.php');
if($sentencia_agregar->execute(array($nombre_con,$email_con,$motivo,$descripcion))){
    echo '<br> Agregado <br>';
}else{
    echo '<br> Error <br>';
}

$sentencia_agregar=null;
$pdo = null; 


