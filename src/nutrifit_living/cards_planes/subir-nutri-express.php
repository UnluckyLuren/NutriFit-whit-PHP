<?php

require "../Login_register/conexion.php";

session_start();

$id = $_SESSION['id'];
$nombre = $_SESSION['user'];
$horario = $_POST['horario'];
$domicilio = $_POST['domicilio'];
$pdf = $_SESSION['pdf'];

if ( !empty($_POST['check']) ) {
    $dias = implode(',', $_POST['check'] );
} else {
    $dias = "Ninguno";
}

$validacion = " SELECT * FROM nutriexpress WHERE id = $id ";
$resultValidacion = $link->query($validacion);

if ( $resultValidacion->num_rows > 0 ) {

    $sql = " UPDATE nutriexpress SET id = '$id', nombre = '$nombre', dias = '$dias', horario = '$horario', domicilio = '$domicilio', pdf = '$pdf'  WHERE id = $id ";
    $result = $link->query( $sql );

    header("location: ../Progreso/html/Progreso-Completo.php");

} else {

    $query="INSERT INTO nutriexpress (id, nombre, dias, horario, domicilio, pdf) VALUES 
        ('$id','$nombre', '$dias', '$horario', '$domicilio', '$pdf')";
        $query_run = $link->query($query);

        header("location: ../Progreso/html/Progreso-Completo.php");

}










?>