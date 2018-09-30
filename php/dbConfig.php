<?php


try{
    $db = new mysqli("localhost","root","","cuoco");
    

    //echo 'Conectado <br>';

}catch(PDOException $e){
    print "¡Error!: ".$e->getMessage()."</br>";
    die();
}