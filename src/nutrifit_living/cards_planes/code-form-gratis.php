<?php

require "../Login_register/conexion.php";

session_start();

$id = $_SESSION['id'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$peso=$_POST['peso'];
$altura=$_POST['altura'];
$hombre=$_POST['hombre'];
$mujer=$_POST['mujer'];
$imagen = $_SESSION['imagen'];
$sexo = '';


$validacion = " SELECT * FROM free WHERE id = $id ";
$resultValidacion = $link->query($validacion);


if ( $hombre == "true" ) {
    $sexo = "hombre";
} else if ( $mujer == "true" ) {
    $sexo = "mujer";
}


if ( $resultValidacion->num_rows > 0 ) {

    $sqlUpdate = " UPDATE free SET nombre ='$nombre', edad = '$edad', peso = '$peso', altura = '$altura', sexo = '$sexo', imagen = '$imagen' WHERE id = $id ";
    $result = $link->query( $sqlUpdate );
    header("location: ../dieta.php");

    $_SESSION['nombreFormGratis'] = $nombre;
    $_SESSION['edadFormGratis'] = $edad;
    $_SESSION['pesoFormGratis'] = $peso;
    $_SESSION['alturaFormGratis'] = $altura;
    $_SESSION['sexoFormGratis'] = $sexo;

} else {

    $query="INSERT INTO free (id, nombre,edad,peso,altura,sexo,imagen) VALUES ('$id', '$nombre', '$edad', '$peso', '$altura', '$sexo', '$imagen')";
    $link->query($query);
    header("location: ../dieta.php");

    $_SESSION['nombreFormGratis'] = $nombre;
    $_SESSION['edadFormGratis'] = $edad;
    $_SESSION['pesoFormGratis'] = $peso;
    $_SESSION['alturaFormGratis'] = $altura;
    $_SESSION['sexoFormGratis'] = $sexo;

}



?>