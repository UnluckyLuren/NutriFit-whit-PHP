<?php

require "../Login_register/conexion.php";

session_start();

$id = $_SESSION['id'];

$validacion = " SELECT * FROM personalizado WHERE id = $id ";
$resultValidacion = $link->query($validacion);

if(isset($_POST['sends'])) {

    // Alergias

    if ( !empty($_POST['opalergia']) ) {
        $allalergia=implode(',', $_POST['opalergia']);
    } else {
        $allalergia = "Ninguna";
    }

    // Demas datos

    $id=$_SESSION['id'];
    $cuello= $_POST['cuello'];
    $cintura=$_POST['cintura'];
    $especifica= $_POST['especifica'];
    $enfermedad= $_POST['enfermedad'];
    $preferencias= $_POST['preferencias'];
    $ejercicio= $_POST['ejercicio'];
    $diasactivos= $_POST['diasactivos'];
    $duracion= $_POST['duracion'];
    

    if ( $resultValidacion->num_rows > 0 ) {

        $sql = " UPDATE personalizado SET id = '$id', cuello = '$cuello', cintura ='$cintura', alergia ='$allalergia', especifica = '$especifica', enfermedad = '$enfermedad',preferencia = '$preferencias', ejercicio = '$ejercicio', diasActivo = '$diasactivos', duracion = '$duracion' WHERE id = $id ";
        $result = $link->query( $sql );

        header("location: ../dieta.php");

    } else {

        $query="INSERT INTO personalizado (id,cuello,cintura,alergia,especifica,enfermedad,preferencia,ejercicio) VALUES 
        ('$id', '$cuello', '$cintura', '$allalergia', '$especifica', '$enfermedad', '$preferencias', '$ejercicio')";
        $query_run = $link->query($query);

        header("location: ../dieta.php");
    }
}



?>