<?php

require "../../Login_register/conexion.php";

$nombre = $_POST['nombre'];
$edema  = $_POST['edema'];
$bicipal  = $_POST['Bicipal'];
$tricipal  = $_POST['Tricipal'];
$brazo  = $_POST['Circunferencia'];
$edad  = $_POST['edad'];
$peso  = $_POST['peso'];
$altura  = $_POST['altura'];
$sexo  = $_POST['test'];
$indiceMasa  = $_POST['indicemasa'];
$totalGrasa  = $_POST['totalgrasa'];
$masaMagra  = $_POST['masamagra'];
$porcentajeGrasa  = $_POST['porcentajegrasa'];
$disminucion  = $_POST['disminucion'];
$tipoDieta  = $_POST['testdieta'];


 //  Crear copia de la imagen en la carpeta del proyecto

 $nombreImagen = $_FILES['file']['name'];
 $temporal = $_FILES["file"]['tmp_name'];
 $carpeta = "./pdfs-dietas-clinic";
 $carpetaLoad = "./pdfs-dietas-clinic";

 $rutaCarpeta = $carpetaLoad."/".$nombreImagen;
 $_SESSION["pdf"] = $rutaCarpeta;

 move_uploaded_file( $temporal, $carpeta."/".$nombreImagen );

$query="INSERT INTO pacientesclinic (nombre, edema ,bicipal, Tricipal, brazo, edad, peso, altura, sexo, indicemasa, totalgrasa, masamagra, porcentajegrasa, disminución, tipodieta, pdfdietaclinic) VALUES 
('$nombre', '$edema', '$bicipal', '$tricipal', '$brazo', '$edad', '$peso', '$altura', '$sexo', '$indiceMasa', '$totalGrasa', '$masaMagra', '$porcentajeGrasa', '$disminucion', '$tipoDieta', '$rutaCarpeta')";
$query_run = $link->query($query);

header("location: ../nutri-clinic-page.php");




?>