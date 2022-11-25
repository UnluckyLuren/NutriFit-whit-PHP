<?php

require_once "../Login_register/conexion.php";

session_start();

$id = $_SESSION["id"];
$privilegio = $_SESSION["privilegio"];

        //  Crear copia de la imagen en la carpeta del proyecto

        $nombreImagen = $_FILES['imagenDelUsuario']['name'];
        $temporal = $_FILES["imagenDelUsuario"]['tmp_name'];
        $carpeta = "../imagenes/userImagenes";
        $carpetaLoad = "./imagenes/userImagenes";

        $rutaCarpeta = $carpetaLoad."/".$nombreImagen;
        $_SESSION["imagen"] = $rutaCarpeta;

        move_uploaded_file( $temporal, $carpeta."/".$nombreImagen );

        // Subir la imagen a la base de datos

        $sql = "UPDATE usuarios SET imagen = '$rutaCarpeta' WHERE id = $id ";
        $link->query( $sql );


        // Redireccionar

        if ($privilegio == 1) {

                header("location: ../Page-Initial-Intermedium.php");

        } else if ($privilegio == 2) {

                header("location: ../Page-Initial-Vip.php");

        } 


?>