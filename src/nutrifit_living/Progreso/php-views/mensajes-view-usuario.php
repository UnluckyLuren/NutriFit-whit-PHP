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

$nameNutri = $_SESSION["user"];
$imgNutri = $_SESSION["imagen"];


$AllUsers=$resultIds->num_rows;


// Evaluamos la existencia de un id después de un click

// $idDeJS = $_GET['ID'];


echo '<h2 class="titlePageSlc">Mensajes</h2>';

?>



<!-- Tabla -->


<div class="contPacientes">
        
        <div class="TableContainer">
            <table class="contTable">
                <thead class="headTable">
                    <tr>
                        <th>Chats</th><th>Leido:</th>
                    </tr>
                </thead>

                <?php 

                    for ($i=0; $i<$AllUsers; $i++) {
                        echo 
                        '<tr class="clmInfoSlc" onclick="bajarMS('.$i.')" >
                            <td><div class="comentsInfoPrint"> <img src="'.'../.'.$DatosImagenes[$i][0].'"> '.$DatosNombres[$i][0].'</div> </td><td>Leido?</td>
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









