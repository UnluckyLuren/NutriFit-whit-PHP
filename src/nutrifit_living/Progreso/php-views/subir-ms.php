<?php 

require_once "../../Login_register/conexion.php";
session_start();

$nameNutri = 'Nutriólogo';
$imgNutri = '../../imagenes/imgCardsDieta/Nutricionista.jfif';

$idUsers = "SELECT id FROM mensajes";
$mensajesUsers = "SELECT mensaje FROM mensajes";

$resultIds = $link->query($idUsers);
$resultMensajes = $link->query($mensajesUsers);

$DatosIds = $resultIds->fetch_all();
$DatosMensajes = $resultMensajes->fetch_all();

// Datos traidos desde HTML
$idDeJS = $_GET['ID'];
$textoMs = $_GET['Text'];

// Datos del usuario actual

$nameUser = $_SESSION['user'];
$imagenUser = $_SESSION['imagen'];

if ($idDeJS != -1) {

    $contenidoMS = $DatosMensajes[$idDeJS][0];

    // Decodificar los ms

    $decodificaciónBase64 = base64_decode($contenidoMS);
    $decodificaciónJson = json_decode($decodificaciónBase64,true);

}

// Añadir la info y recrear los objetos

if ( !empty($textoMs) && $idDeJS != -1 ) {
    
        $contenedor = $decodificaciónJson;
    
        $ms = [
            'user' => $nameUser,
            'img' => $imagenUser,
            'hora' => '2pm',
            'mensaje' => $textoMs
        ];

        array_push($contenedor, $ms);

        $conToJson = json_encode($contenedor);
        $conToInsert = base64_encode($conToJson);

        // Subir Todo a la base de datos

        $idUser = $DatosIds[$idDeJS][0];
        $sql = " UPDATE mensajes SET mensaje = '$conToInsert' WHERE id = $idUser";
        $result = $link->query( $sql );


} else if ( !empty($textoMs) ) {

    $contenedor = [];
    
        $ms = [
            'user' => $nameUser,
            'img' => $imagenUser,
            'hora' => '2pm',
            'mensaje' => $textoMs
        ];

        array_push($contenedor, $ms);

        $conToJson = json_encode($contenedor);
        $conToInsert = base64_encode($conToJson);

        // Subir Todo a la base de datos

        $idUser = $_SESSION['id'];
        $queryCopi="INSERT INTO mensajes (id, nombre, imagen, mensaje) VALUES ('$idUser', '$nameUser', '$imagenUser', '$conToInsert')";
        $queryCopi_run = $link->query($queryCopi);
}

?>