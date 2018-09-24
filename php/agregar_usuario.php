<?php 

$nombre = $_POST['nombre'];        
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];
$email = $_POST['email'];

var_dump($contrasena);
var_dump($contrasena2);

$contrasena = password_hash($contrasena,PASSWORD_DEFAULT);


if(password_verify($contrasena2,$contrasena)){    
    
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
    
    header('location:../login.php');    
}else{
    
    echo 'La contraseña no es valida';
}

