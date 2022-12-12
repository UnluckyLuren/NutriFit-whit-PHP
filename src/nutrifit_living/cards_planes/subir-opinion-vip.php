<?php


require "../Login_register/conexion.php";

session_start();

$ocupacion = $_POST['ocupacion'];
$descripcion = $_POST['descripcionOpn'];

$nombre = $_SESSION['user'];
$id = $_SESSION["id"];
$privilegio = $_SESSION["privilegio"];

//  Crear copia de la imagen en la carpeta del proyecto

$nombreImagen = $_FILES['imagenOpn']['name'];
$temporal = $_FILES["imagenOpn"]['tmp_name'];
$carpeta = "../imagenes/imagenes-clientes";
$carpetaLoad = "./imagenes/imagenes-clientes";

$rutaCarpeta = $carpetaLoad."/".$nombreImagen;

move_uploaded_file( $temporal, $carpeta."/".$nombreImagen );


// Validación y subida de la ruta de la imagen

$validacion = " SELECT * FROM imagenesClientes WHERE id = $id ";
$resultValidacion = $link->query($validacion);


if ( $resultValidacion->num_rows > 0 ) {

      // Actualizar la imagen a la base de datos

      $sql = "UPDATE imagenesClientes SET nombre = '$nombre', ocupacion = '$ocupacion', descripcion = '$descripcion', imagenCliente = '$rutaCarpeta' WHERE id = $id ";
      $link->query( $sql );

      header("location: ../Page-Initial-Vip.php");

} else {

    $query="INSERT INTO imagenesClientes (id, nombre, ocupacion, descripcion, imagenCliente) VALUES ('$id', '$nombre', '$ocupacion', '$descripcion', '$rutaCarpeta')";
    $link->query($query);

    header("location: ../Page-Initial-Vip.php");
}


?>













