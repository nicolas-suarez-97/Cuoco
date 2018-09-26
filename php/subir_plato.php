<?php

session_start();
include_once 'dbConfig.php';

$statusMsg = '';

//File upload path
$targetDir = "../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$titulo = $_POST['titulo'];
$enlace = $_POST['enlace'];
$descripcion = $_POST['descripcion'];
$categ = $_POST['categ'];


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    //Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType,$allowTypes)){
        //Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath)){
            //Insert image file name into database
    
            $insert = $db->query("INSERT into fotos (titulo,nombre_foto,descripcion,fecha,link,categoria,autor) VALUES ('".$titulo."','".$fileName."','".$descripcion."',NOW(),'".$enlace."','".$categ."','".$_SESSION['admin']."')");
    
            if($insert){
                $statusMsg="Tha file ".$fileName." has been uploaded";
            }else{
                $statusMsg="File upload failed";
            }
        }else{
            $statusMsg="Sorry, there was an error uploading the file";
        }
    }else{
        $statusMsg="Sorry only jpg, png, jpeg, gif...";
    }
}else{
    $statusMsg="Please select a file";
}

header('Location:../index.php');
//echo $statusMsg;