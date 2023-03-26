<?php

require_once "../../Login_register/conexion.php";

// Traer IDS


$idUsers = "SELECT id FROM pacientesactuales";
$nombreUsers = "SELECT nombre FROM pacientesactuales";
$imagenUsers = "SELECT imagen FROM pacientesactuales";


$resultIds = $link->query($idUsers);
$resultNombres = $link->query($nombreUsers);
$resultImagenes = $link->query($imagenUsers);


$DatosIds = $resultIds->fetch_all();
$DatosNombres = $resultNombres->fetch_all();
$DatosImagenes = $resultImagenes->fetch_all();


$AllUsers=$resultIds->num_rows;

// Evaluamos la existencia de un id después de un click

$idDeJS = $_GET['ID'];

echo '<h2 class="titlePageSlc">Pacientes</h2>';

?>



<!-- Tabla -->


<div class="contPacientes">
        
        <div class="TableContainer">
            <table class="contTable">
                <thead class="headTable">
                    <tr>
                        <th>ID</th><th>Nombre</th>
                    </tr>
                </thead>

                <?php 

                    for ($i=0; $i<$AllUsers; $i++) {
                        echo 
                        '<tr class="clmInfoSlc" onclick="MostrarVentanaPac('.$i.')" >
                            <td>'.$DatosIds[$i][0].'</td><td>'.$DatosNombres[$i][0].'</td>
                        </tr>';
                    }

                ?>

            </table>
        </div>

</div>


<!-- Ventana emergente -->

        <!-- Para que se habra la ventana debes oponerle a un a el id: open -->

        <div class="modal-container show modal-pacientes" id="modal_container">
            <div class="modal modalVentInitial cont-Pacientes">
                <div class="compra">       
                    <button id="close" type="submit" onclick="closeVent()" ><img src="../imagenes/x.png" ></button>  
                    
                    <div class="info-user-page">
                        
                    <div class="insertImg" id="insertImg" >
                            <form action="./cards_planes/cargarImagen.php" method="POST" class="formImage" id="FormImagenUser" enctype="multipart/form-data" > 
                                <img src="<?php echo '.'.$DatosImagenes[$idDeJS][0] ?>" id="imgChoosen">
                            </form>
                    </div>

                    <p><?php echo $DatosNombres[$idDeJS][0] ?></p>
                        
                        <div class="info-text">
                            <p> <small> Usuario VIP </small> </p>
                            <p> ID Personalizado: </p>
                            <p class="sepr-border" > <small> <?php echo $DatosIds[$idDeJS][0] ?> </small></p>
                        </div>

                        <a href="#"> <button class="botonVerProgreso" onclick="metPostJX('Mensajes')">Enviar Mensaje</button> </a>

                </div>

                    <div class="skills" id="contInfoSkills">
                        <h2>Información</h2>

                        <?php 
                                                    
                            // Información de cada ususario

                            $idUserPer = $DatosIds[$idDeJS][0];

                            $infoUserPerSlc = "SELECT * FROM pacientesactuales WHERE id = $idUserPer";
                            $resultInfoPerSlc = $link->query($infoUserPerSlc);
                            $DatosSlcUser = $resultInfoPerSlc->fetch_assoc();
                        
                        ?>

                        <ul class="InfoPendSelect infoPacientSlc">
                            <li>
                                <h3>Tipo de dieta:</h3>
                                <p><?php echo $DatosSlcUser['tipoDieta'] ?></p>
                            </li>
                            <li>
                                <h3>Meta a Corto Plazo:</h3>
                                <p><?php echo $DatosSlcUser['metaCorto'] ?></p>
                            </li>
                            <li>
                                <h3>Meta a largo Plazo:</h3>
                                <p><?php echo $DatosSlcUser['metaLargo'] ?></p>
                            </li>
                            <li>
                                <h3>Observaciones:</h3>
                                <p><?php echo $DatosSlcUser['observaciones'] ?></p>
                            </li>
                            <li>
                                <h3>Objetivo:</h3>
                                <p><?php echo $DatosSlcUser['objetivo'] ?></p>
                            </li>
                            <li>
                                <h3>Tiempo para lograr el objetivo:</h3>
                                <p><?php echo $DatosSlcUser['tiempoObjetivo'] ?></p>
                            </li>
                            <li>
                                <h3>PDF Actual:</h3>
                                <p> <a href="#" onclick="verPDFUserSlc('<?php echo  $DatosSlcUser['nombre']; ?>', this.textContent)"> <?php echo $DatosSlcUser['PDFActual'] ?> </a></p>
                            </li>

                        </ul>

                    

                    </div>
                   
                </div>
              
            </div>
        </div>





