<?php

$nombre = $_POST['nombre'];        
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];
$email = $_POST['email'];


$contrasena = password_hash($contrasena,PASSWORD_DEFAULT);


if(password_verify($contrasena2,$contrasena)){    
    
    header('location:../login.php');    
    include_once 'conexion.php';
    $sql_agregar = 'INSERT INTO usuarios (nombre,contrasena,email) VALUES (?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    
    
    if($sentencia_agregar->execute(array($nombre,$contrasena,$email))){
        echo '<br> Agregado <br>';
    }else{
        echo '<br> Error <br>';
    }
    
    $sentencia_agregar=null;
    $pdo = null; 
    
}else{
    
    echo 'La contraseña no es valida';
}

