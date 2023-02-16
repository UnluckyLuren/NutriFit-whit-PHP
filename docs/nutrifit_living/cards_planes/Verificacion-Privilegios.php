<?php


session_start();

$privilegio = $_SESSION["privilegio"];

if ($privilegio == 1) {

    header("location: ./Page-Initial-Intermedium.php");

} else if ($privilegio == 2) {

    header("location: ./Page-Initial-Vip.php");

} 














?>