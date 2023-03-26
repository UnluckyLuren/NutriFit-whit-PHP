<?php

require "../../Login_register/conexion.php";

session_start();

// Datos del DOM

$idUser = $_POST['idUser'];

$validacion = " SELECT * FROM pacientesactuales WHERE id = $idUser";
$valInfo = "SELECT * FROM infopacientes WHERE id = $idUser";
$imagenUsers = "SELECT imagen FROM personalizado WHERE id = $idUser";

$resultValidacion = $link->query($validacion);
$resultValInfo = $link->query($valInfo);
$resultImagenes = $link->query($imagenUsers);

$DatosImagenes = $resultImagenes->fetch_assoc();

// Recreator

$_SESSION['insertPend'] = 0;


$nombre = $_POST['nombreUser'];
$imagen = $DatosImagenes['imagen'];
$dieta = $_POST['dieta'];
$metaCorto = $_POST['metaCorto'];
$metaLargo = $_POST['metaLargo'];
$observaciones = $_POST['observaciones'];
$objetivo = $_POST['objetivo'];
$tiempoObj = $_POST['tiempoObjetivo'];


// Información del pdf y moverlo

$nombrePDF = $_FILES['filePDF']['name'];
$temporal = $_FILES['filePDF']['tmp_name'];
$carpeta = "../nutri-dietas-pdfs";
$carpetaLoad = "./nutri-dietas-pdfs";

$rutaCarpeta = $carpetaLoad."/".$nombrePDF;
$rutaCarpetaUsuarios = './Nutriologo-Nutri/nutri-dietas-pdfs'."/".$nombrePDF;

move_uploaded_file(  $temporal, ".".$rutaCarpeta );

// Subir Todo a la base de datos

$datosUsers = "SELECT * FROM personalizado WHERE id = $idUser";
$resultDataUsers = $link->query($datosUsers);
$Datos = $resultDataUsers->fetch_assoc();

$nombrePer = $Datos['nombreUser'];
$cuello = $Datos['cuello'];
$cintura = $Datos['cintura'];
$alergia = $Datos['alergia'];
$especifica = $Datos['especifica'];
$enfermedad = $Datos['enfermedad'];
$preferencia = $Datos['preferencia'];
$ejercicio = $Datos['ejercicio'];
$diasActivo = $Datos['diasActivo'];
$duracion = $Datos['duracion'];
$imgPer = $Datos['imagen'];


if ( $resultValInfo->num_rows == 0 ) {

    $query="INSERT INTO pacientesactuales (id,nombre,imagen,tipoDieta,metaCorto,metaLargo,observaciones,objetivo,tiempoObjetivo,PDFActual) VALUES 
            ('$idUser', '$nombrePer', '$imagen', '$dieta', '$metaCorto', '$metaLargo', '$observaciones', '$objetivo', '$tiempoObj', '$rutaCarpeta')";

    $query_run = $link->query($query);

// Subir copia de seguridad a la tabla infoPacientes


    if ($resultDataUsers) {

        $queryCopi="INSERT INTO infopacientes (id,nombreUser,cuello,cintura,alergia,especifica,enfermedad,preferencia,ejercicio,diasActivo,duracion,imagen ) VALUES 
        ('$idUser', '$nombrePer', '$cuello', '$cintura', '$alergia', '$especifica', '$enfermedad', '$preferencia', '$ejercicio', '$diasActivo', '$duracion', '$imgPer')";
        $queryCopi_run = $link->query($queryCopi);

    }

    $sqlPDFUpUser = "UPDATE usuarios SET pdf_dieta = '$rutaCarpetaUsuarios' WHERE id = $idUser";
    $resultPDFUpUser = $link->query( $sqlPDFUpUser );


    // Borrar anterior info de los pendientes

    if ($query_run) {
        $borrar = "DELETE FROM personalizado WHERE id = '$idUser'";
        $run = $link->query($borrar);

        $_SESSION['insertPend'] = 1;
    }


} else {

    $sqlAct = "UPDATE pacientesactuales SET id = '$idUser', nombre = '$nombrePer', imagen = '$imagen', tipoDieta = '$dieta', metaCorto = '$metaCorto', metaLargo = '$metaLargo', observaciones = '$observaciones', objetivo = '$objetivo', tiempoObjetivo = '$tiempoObj', PDFActual = '$rutaCarpeta' WHERE id = $idUser ";
    $resultAct = $link->query( $sqlAct );

    $sqlInfo = "UPDATE infopacientes SET id = '$idUser', nombreUser = '$nombrePer', cuello = '$cuello', cintura ='$cintura', alergia ='$alergia', especifica = '$especifica', enfermedad = '$enfermedad',preferencia = '$preferencia', ejercicio = '$ejercicio', diasActivo = '$diasActivo', duracion = '$duracion', imagen = '$imgPer' WHERE id = $idUser";
    $resultInfo = $link->query( $sqlInfo );

    $sqlPDFUpdateUser = "UPDATE usuarios SET pdf_dieta = '$rutaCarpetaUsuarios' WHERE id = $idUser";
    $resultPDFUpdateUser = $link->query( $sqlPDFUpdateUser );

      // Borrar anterior info de los pendientes

      if ($resultAct) {
        $borrar = "DELETE FROM personalizado WHERE id = '$idUser'";
        $run = $link->query($borrar);

        $_SESSION['insertPend'] = 1;
    }
}

header("location: ../nutriologo-page.php");

?>


