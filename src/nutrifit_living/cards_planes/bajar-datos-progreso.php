<?php

require_once "../Login_register/conexion.php";

session_start();

$id = $_SESSION['id'];

$validacion = " SELECT * FROM free WHERE id = $id ";
$resultValidacion = $link->query($validacion);


if ( $resultValidacion->num_rows > 0 ) {











?>