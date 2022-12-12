<?php

require "../Login_register/conexion.php";

session_start();

$nombre = $_POST['nameActual'];

$validacion = " SELECT id FROM free WHERE nombre = '$nombre' ";
$resultValidacion = $link->query($validacion);


if ( $resultValidacion->num_rows > 0 ) {

$idfetch = $resultValidacion->fetch_assoc();

$idUser = $idfetch['id'];

 //  Crear copia de la imagen en la carpeta del proyecto

 $nombreImagen = $_FILES['filePdfUser']['name'];
 $temporal = $_FILES["filePdfUser"]['tmp_name'];
 $carpeta = "../dietas-pdfs";
 $carpetaLoad = "./dietas-pdfs";

 $rutaCarpeta = $carpetaLoad."/".$nombreImagen;
 $_SESSION["pdf"] = $rutaCarpeta;

 move_uploaded_file( $temporal, $carpeta."/".$nombreImagen );

 // Subir la imagen a la base de datos

 $sql = "UPDATE usuarios SET pdf_dieta = '$rutaCarpeta' WHERE id = $idUser ";
 $link->query( $sql );

}


header("location: ../Nutriologo-Nutri/nutriologo-base.php");



?>