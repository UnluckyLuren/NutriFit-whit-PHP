<?php 

require_once "../../Login_register/conexion.php";
session_start();

$nameNutri = $_SESSION["user"];
$imgNutri = $_SESSION["imagen"];

$idUsers = "SELECT id FROM mensajes";
$mensajesUsers = "SELECT mensaje FROM mensajes";

$resultIds = $link->query($idUsers);
$resultMensajes = $link->query($mensajesUsers);

$DatosIds = $resultIds->fetch_all();
$DatosMensajes = $resultMensajes->fetch_all();

// Datos traidos desde HTML
$idDeJS = $_GET['ID'];
$textoMs = $_GET['Text'];


$contenidoMS = $DatosMensajes[$idDeJS][0];


// Decodificar los ms

$decodificaciónBase64 = base64_decode($contenidoMS);
$decodificaciónJson = json_decode($decodificaciónBase64,true);

// Añadir la info y recrear los objetos
    
$contenedor = $decodificaciónJson;
    
        $ms = [
            'user' => $nameNutri,
            'img' => '.'.$imgNutri,
            'hora' => '5pm',
            'mensaje' => $textoMs
        ];

        array_push($contenedor, $ms);

        $conToJson = json_encode($contenedor);
        $conToInsert = base64_encode($conToJson);

// Subir Todo a la base de datos

$idUser = $DatosIds[$idDeJS][0];
$sql = " UPDATE mensajes SET mensaje = '$conToInsert' WHERE id = $idUser";
$result = $link->query( $sql );



?>