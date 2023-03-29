<?php

require "../../Login_register/conexion.php";
session_start();

// Traer IDS

$idUsers = "SELECT id FROM mensajes";
$nombreUsers = "SELECT nombre FROM mensajes";
$imagenUsers = "SELECT imagen FROM mensajes";


$resultIds = $link->query($idUsers);
$resultNombres = $link->query($nombreUsers);
$resultImagenes = $link->query($imagenUsers);


$DatosIds = $resultIds->fetch_all();
$DatosNombres = $resultNombres->fetch_all();
$DatosImagenes = $resultImagenes->fetch_all();


// Datos Nutriologo

// $nameNutri = $_SESSION["user"];
// $imgNutri = $_SESSION["imagen"];
$idUserActual =  $_SESSION["id"];


$AllUsers=$resultIds->num_rows;

?>



<!-- Tabla -->


<div class="contPacientes conTablaProgComp">
        
        <div class="TableContainer">
            <table class="contTable">
                <thead class="headTable">
                    <tr>
                        <th>Chats</th><th>Leido:</th>
                    </tr>
                </thead>

                <?php 

                    // Evaluamos la existencia de un id después de un click

                    $idExistente = "SELECT * FROM mensajes WHERE id = $idUserActual";
                    $resultEvaluacionId = $link->query($idExistente);


                    if ($resultEvaluacionId->num_rows > 0) {
                        
                        for ( $i=0; $i<$AllUsers; $i++ ) {
                            if ($DatosIds[$i][0] == $idUserActual) { $idDeJs = $i; };
                        }

                        echo
                        '<tr class="clmInfoSlc" onclick="bajarMS('.$idDeJs.')" >
                            <td><div class="comentsInfoPrint"> <img src="../../imagenes/imgCardsDieta/Nutricionista.jfif">Nutriólogo</div> </td> <td><img class="imgLeidoMs" src="../../imagenes/Leido-ms.png"> </td>
                        </tr>';
                    } else {
                        echo 
                        '<tr class="clmInfoSlc" onclick="bajarMS(-1)" >
                            <td><div class="comentsInfoPrint"> <img src="../../imagenes/imgCardsDieta/Nutricionista.jfif">Nutriólogo</div> </td><td>?</td>
                        </tr>';
                    }

                ?>

            </table>
        </div>

</div>


<!-- Sección comentarios -->


<!-- Contenedor Principal -->
<div class="comments-container" id="comments-container">

	<div class="defaultInfoComments">
		<h2 class="textDefectoComments">Continua tus conversaciones...</h2>		
			<img src="../../Nutriologo-Nutri/phpNutriologo/images/continue-ms.png">	
	</div>

</div>









