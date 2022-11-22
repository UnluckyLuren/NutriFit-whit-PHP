<?php 

require_once "../Login_register/conexion.php";

// Validación

session_start();

$id = $_SESSION["id"];

if (isset( $_POST["freePlan"])) {
   
    $_SESSION["privilegio"] = 0;

    $sql = " UPDATE usuarios SET privilegio = 0 WHERE id = $id ";
    $link->query( $sql );
    header("location: ../Page-Initial.php");

} else if (isset( $_POST["intermediumPlan"])) {

    $_SESSION["privilegio"] = 1;

    $sql = " UPDATE usuarios SET privilegio = 1 WHERE id = $id ";
    $link->query( $sql );
    header("location: ../Page-Initial-Intermedium.php");


}  else if (isset( $_POST["vipPlan"])) {

    $_SESSION["privilegio"] = 2;

    $sql = " UPDATE usuarios SET privilegio = 2 WHERE id = $id ";
    $link->query( $sql );
    header("location: ../Page-Initial-Vip.php");

}


?>











