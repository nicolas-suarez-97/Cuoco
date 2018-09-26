<?php
session_start();


include_once 'conexion.php';

$usuario_login = $_POST['uname'];
$contrasena_login = $_POST['psw'];

//VERIFICAR SI USUARIO EXISTE
$sql = 'SELECT * FROM usuarios WHERE email = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

$nombre = $resultado['nombre'];
$email = $resultado['email'];

//var_dump($resultado);

if(!$resultado){
    //matar operacion
    echo 'No existe el usuario';
    die();

}

if(password_verify($contrasena_login,$resultado['contrasena'])){
    //contraseñas iguales
    $_SESSION['admin']=$email;
    
    header('Location: ../index.php');

}else{
    echo 'Contraseña incorrecta';
    die();
}