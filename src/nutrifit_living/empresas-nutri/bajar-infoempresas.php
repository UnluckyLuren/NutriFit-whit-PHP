<?php

require_once "../Login_register/conexion.php";

session_start();

$id = $_SESSION['id'];

$namesUsers = "SELECT nombre FROM nutriexpress";
$diasUsers = " SELECT dias FROM nutriexpress";
$horarioUsers = " SELECT horario FROM nutriexpress";
$domicilioUsers = " SELECT domicilio FROM nutriexpress";
$pdfUsers = " SELECT pdf FROM nutriexpress";

$resultNames = $link->query($namesUsers);
$resultDias = $link->query($diasUsers);
$resultHorario = $link->query($horarioUsers);
$resultDomicilio = $link->query($domicilioUsers);
$resultPdf = $link->query($pdfUsers);


$_SESSION['DatosNames'] = $resultNames->fetch_all();
$_SESSION['Datosdias'] = $resultDias->fetch_all();
$_SESSION['Datoshorario'] = $resultHorario->fetch_all();
$_SESSION['Datosdomicilio'] = $resultDomicilio->fetch_all();
$_SESSION['Datospdf'] = $resultPdf->fetch_all();


?>