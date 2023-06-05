<?php 

require_once "../../Login_register/conexion.php";

// Traer IDS

$idUsers = "SELECT id FROM pacientesclinic";
$nombreUsers = "SELECT nombre FROM pacientesclinic";
$dietasUsers = "SELECT pdfdietaclinic FROM pacientesclinic";

$resultIds = $link->query($idUsers);
$resultNombres = $link->query($nombreUsers);
$resultDietas = $link->query($dietasUsers);

$DatosIds = $resultIds->fetch_all();
$DatosNombres = $resultNombres->fetch_all();
$DatosDietas = $resultDietas->fetch_all();

// Evaluamos la existencia de un id después de un click

$idDeJS = $_GET['ID'];
$AllUsers=$resultIds->num_rows;

$rutapdf = str_replace('./', '', $DatosDietas[$idDeJS][0]);
$nombreSelect = ''.$DatosNombres[$idDeJS][0].'';


echo '<h4 class="titleDietas">Usuarios tratados: Dia Actual</h4>';

?>



<div class="contPacientes">
        
        <div class="TableContainer">
            <table class="contTable">
                <thead class="headTable">
                    <tr>
                        <th>ID</th><th>Nombre</th>
                    </tr>
                </thead>

                <?php 

                    for ($i=2; $i<$AllUsers; $i++) {

                           
                            $rutaArchivoPHP = "'dia-actual-cocina'";

                            echo 
                            '<tr class="clmInfoSlc" onclick="metPostJX('.$rutaArchivoPHP.','.$i.')">
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
                                <img src="../imagenes/Hosp-san-jose.png" id="imgChoosen">
                            </form>
                    </div>

                    <p><?php echo $DatosNombres[$idDeJS][0] ?></p>
                        
                        <div class="info-text">
                            <p> <small> Usuario VIP </small> </p>
                            <p> ID Personalizado: </p>
                            <p class="sepr-border" > <small> <?php echo $DatosIds[$idDeJS][0] ?> </small></p>
                        </div>

                        <a href="#"> <button class="botonVerProgreso" onclick="verPDFUserSlc(' <?php echo '../nutri-clinic/'.$rutapdf ?> ' , ' <?php echo $nombreSelect ?>')">Ampliar Dieta</button> </a>
                </div>

                    <div class="skills" id="contInfoSkills">
                        <h2>Dieta Actual</h2>
                        <br>
                        <img src="../imagenes/dieta-ver-imagen.png" class="imgDietaAct">
                    </div>
                   
                </div>
              
            </div>
        </div>









