<?php

$link = 'mysql:host=localhost;dbname=cuoco';
$usuario = 'root';
$pass = '';

try{
    $db = new mysqli("localhost","root","","cuoco");
    

    //echo 'Conectado <br>';

}catch(PDOException $e){
    print "¡Error!: ".$e->getMessage()."</br>";
    die();
}