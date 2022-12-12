<?php

require_once "../Login_register/conexion.php";

session_start();

$id = $_SESSION['id'];

$namesUsers = "SELECT nombre FROM free";
$edadUsers = " SELECT edad FROM free";
$pesoUsers = " SELECT peso FROM free";
$alturaUsers = " SELECT altura FROM free";
$sexoUsers = " SELECT sexo FROM free";
$imgsUsers = "SELECT imagen FROM free";

$resultNames = $link->query($namesUsers);
$resultEdades = $link->query($edadUsers);
$resultPesos = $link->query($pesoUsers);
$resultAlturas = $link->query($alturaUsers);
$resultSexos = $link->query($sexoUsers);
$resultimgs = $link->query($imgsUsers);


$DatosNames = $resultNames->fetch_all();
$DatosEdades = $resultEdades->fetch_all();
$DatosPesos = $resultPesos->fetch_all();
$DatosAlturas = $resultAlturas->fetch_all();
$DatosSexos = $resultSexos->fetch_all();
$DatosImgs = $resultimgs->fetch_all();



?>
