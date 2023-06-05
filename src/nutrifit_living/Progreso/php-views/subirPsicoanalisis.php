<?php

require "../../Login_register/conexion.php";
session_start();

// Traer los datos

$id =  $_SESSION["id"];
$nombre = $_SESSION['user'];

// Gets
$anorexia = $_GET['anorexia'];
$bulimia = $_GET['bulimia'];
$depresion = $_GET['depresion'];

// Validamos el id para subir la información

$validacion = " SELECT * FROM psicoanalisisusers WHERE id = $id ";
$resultValidacion = $link->query($validacion);

if ( $resultValidacion->num_rows > 0 ) {

    $sqlUpdate = " UPDATE psicoanalisisusers SET nombre ='$nombre', anorexia = '$anorexia', bulimia = '$bulimia', depresion = '$depresion' WHERE id = $id ";
    $result = $link->query( $sqlUpdate );

} else {

    $query="INSERT INTO psicoanalisisusers (id,nombre,anorexia,bulimia,depresion) VALUES ('$id', '$nombre', '$anorexia', '$bulimia', '$depresion')";
    $link->query($query);

}


?>

<section class="modalPsico modal--show">
        <div class="modal__container">
            <img src="../../imagenes/Iconos/dieta-pdf-clinic.svg" class="modal__img">
            <h2 class="modal__title">¡Gracias por responder!</h2>
            <p class="modal__paragraph">Tus respuestas han sido guardadas y se utilizaran para darte un mejor servicio</p>
            <a href="#" class="modal__close">Cerrar</a>
        </div>
</section>



