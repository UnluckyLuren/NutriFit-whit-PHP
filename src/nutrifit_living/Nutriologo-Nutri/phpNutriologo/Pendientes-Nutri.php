<?php

require_once "../../Login_register/conexion.php";

session_start();

$nombreUsers = "SELECT nombreUser FROM personalizado";
$idUsers = "SELECT id FROM personalizado";
$cuelloUsers = " SELECT cuello FROM personalizado";
$cinturaUsers = " SELECT cintura FROM personalizado";
$alergiaUsers = " SELECT alergia FROM personalizado";
$especificaUsers = " SELECT especifica FROM personalizado";
$enfermedadUsers = "SELECT enfermedad FROM personalizado";
$preferenciaUsers = " SELECT preferencia FROM personalizado";
$ejercicioUsers = " SELECT ejercicio FROM personalizado";
$diasActivoUsers = "SELECT diasActivo FROM personalizado";
$duracionUsers = "SELECT duracion FROM personalizado";
$imagenUsers = "SELECT imagen FROM personalizado";


$resultNombres = $link->query($nombreUsers);
$resultIds = $link->query($idUsers);
$resultCuellos = $link->query($cuelloUsers);
$resultCinturas = $link->query($cinturaUsers);
$resultAlergias = $link->query($alergiaUsers);
$resultEspecificas = $link->query($especificaUsers);
$resultEnfermedades = $link->query($enfermedadUsers);
$resultPreferencias = $link->query($preferenciaUsers);
$resultEjercicios = $link->query($ejercicioUsers);
$resultDiasActivos = $link->query($diasActivoUsers);
$resultDuraciones = $link->query($duracionUsers);
$resultImagenes = $link->query($imagenUsers);


$DatosNombres = $resultNombres->fetch_all();
$DatosIds = $resultIds->fetch_all();
$DatosCuellos = $resultCuellos->fetch_all();
$DatosCinturas = $resultCinturas->fetch_all();
$DatosAlergias = $resultAlergias->fetch_all();
$DatosEspecificas = $resultEspecificas->fetch_all();
$DatosEnfermedades = $resultEnfermedades->fetch_all();
$DatosPreferencias = $resultPreferencias->fetch_all();
$DatosEjercicios = $resultEjercicios->fetch_all();
$DatosDiasActivos = $resultDiasActivos->fetch_all();
$DatosDuraciones = $resultDuraciones->fetch_all();
$DatosImagenes = $resultImagenes->fetch_all();

$AllUsers=$resultIds->num_rows;

echo '<h2 class="titlePageSlc">Usuarios Pendientes</h2>';


// Obtención devuelta del ID

$idDeJS = $_GET['ID'];


?>


<!-- Tabla -->

<?php 

if ($AllUsers > 0) {

echo
 '<div class="contPacientes">
        
        <div class="TableContainer">

        <table class="contTable">
            <thead class="headTable">
                <tr>
                    <th>Nombre</th><th>Cuello</th><th>Cintura</th><th>Alergias</th><th>Especifica</th><th>Enfermedades</th><th>Preferencias</th><th>Ejercicios</th><th>Días Activo</th><th>Duración</th>
                </tr>
            </thead>';

            
                for ($i=0; $i<$AllUsers; $i++) {
                    echo 
                    '<tr class="clmInfoSlc" onclick="MostrarVentanaInfo('.$i.')" >
                        <td>'.$DatosNombres[$i][0].'</td><td>'.$DatosCuellos[$i][0].'</td><td>'.$DatosCinturas[$i][0].'</td><td>'.$DatosAlergias[$i][0].'</td><td>'.$DatosEspecificas[$i][0].'</td><td>'.$DatosEnfermedades[$i][0].'</td><td>'.$DatosPreferencias[$i][0].'</td><td>'.$DatosEjercicios[$i][0].'</td><td>'.$DatosDiasActivos[$i][0].'</td><td>'.$DatosDuraciones[$i][0].'</td>
                    </tr>';
                }
           
        echo 
        '</table>
        </div>


</div>';

} else {

    echo '<h2 class="titlePendCom">No hay Usuarios Pendientes
        <img class="imgSinPend" src="../imagenes/tarea-completada.png">
    </h2>';

}

?>


<!-- Ventana emergente -->

        <!-- Para que se habra la ventana debes oponerle a un a el id: open -->

        <div class="modal-container" id="modal_container">
            <div class="modal modalVentInitial">
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

                        <a href="./Progreso/html/Progreso-Completo.php"> <button class="botonVerProgreso" >Enviar Mensaje</button> </a>

                </div>

                    <div class="skills">
                        <h2>Información</h2>

                        <ul class="InfoPendSelect">
                            <li>
                                <h3>Cuello:</h3>
                                <p><?php echo $DatosCuellos[$idDeJS][0] ?></p>
                            </li>
                            <li>
                                <h3>Cintura:</h3>
                                <p><?php echo $DatosCinturas[$idDeJS][0] ?></p>
                            </li>
                            <li>
                                <h3>Alergias:</h3>
                                <p><?php echo $DatosAlergias[$idDeJS][0] ?></p>
                            </li>
                            <li>
                                <h3>Otras alergias:</h3>
                                <p><?php echo $DatosEspecificas[$idDeJS][0] ?></p>
                            </li>
                            <li>
                                <h3>Enfermedades:</h3>
                                <p><?php echo $DatosEnfermedades[$idDeJS][0] ?></p>
                            </li>
                            <li>
                                <h3>Preferencia:</h3>
                                <p><?php echo $DatosPreferencias[$idDeJS][0] ?></p>
                            </li>
                            <li>
                                <h3>Ejercicios:</h3>
                                <p><?php echo $DatosEjercicios[$idDeJS][0] ?></p>
                            </li>
                            <li>
                                <h3>Días activo:</h3>
                                <p><?php echo $DatosDiasActivos[$idDeJS][0] ?></p>
                            </li>
                            <li>
                                <h3>Tiempo activo:</h3>
                                <p><?php echo $DatosDuraciones[$idDeJS][0] ?></p>
                            </li>

                        </ul>

                        <div class="formEnvioDieta">
                            <form id="Documentos" method="post" enctype="multipart/form-data" action="./phpNutriologo/subir-info-pendientes.php">

                                <div class="TipDieta" >
                                    <label for="#">Tipo de dieta:</label>
                                    <select id="tipDieta" name="dieta">
                                        <option value="DietaFija">Dieta Fija</option>
                                        <option value="DietaIntercambiable">Dieta Intercambiable cada 15 días</option>
                                        <option value="Dieta Pre-Fabricada">Dieta Pre-Fabricada</option>
                                    </select>
                                </div>
                                <div class="metaCorto">
                                    <label for="#">Meta a lograr a corto Plazo:</label>
                                    <input type="text" name="metaCorto" placeholder="Reducción" id="metaCorto">
                                </div>
                                <div class="metaLargo">
                                    <label for="#">Meta a lograr a largo Plazo:</label>
                                    <input type="text" name="metaLargo" placeholder="Mantenimiento" id="metaLargo">
                                </div>
                                <div class="obserUserPend">
                                    <label for="#">Observaciones:</label> <br>
                                    <input type="text" name="observaciones" placeholder="Datos a tener en cuenta" id="observacionesText">
                                </div>
                                <div class="estimUserPend">
                                    <label for="#">Estimaciones:</label> <br>
                                    <input type="text" name="objetivo" placeholder="Objetivos a cumplir" id="objetivo">
                                    <br>
                                    <select name="tiempoObjetivo" id="tiempoObjetivo">
                                        <option value="1semana">1 semana</option>
                                        <option value="2semanas">2 semanas</option>
                                        <option value="3semanas">3 semanas</option>
                                        <option value="1mes">1 Mes</option>
                                        <option value="2meses">2 Meses</option>
                                        <option value="3meses">3 Meses</option>
                                        <option value="4meses">4 Meses o más</option>
                                    </select>

                                    <!-- Sección para almacenar info Importante -->

                                    <div class="infoOP0Pend">
                                        <input type="text" name="idUser" value="<?php echo $DatosIds[$idDeJS][0] ?>">
                                        <input type="text" name="nombreUser" value="<?php echo $DatosNombres[$idDeJS][0] ?>">
                                        <input type="text" name="imagenUser" value="<?php echo $DatosImagenes[$idDeJS][0] ?>">
                                    </div>

                                </div>
                                <div class="pdfUserPend">
                                    <label for="#">Adjuntar PDF de la dieta <img src="../imagenes/Lupa.svg"> </label>
                                    <input type="file" name="filePDF" class="filePDFPend" id="PDFPend">
                                </div>

                                <button type="submit">Enviar Información</button>
                    
                            </form>
                        </div>

                    </div>
                   
                </div>
              
            </div>
        </div>


<?php 


if (isset($_SESSION['insertPend']) && $_SESSION['insertPend'] == 1) {
    $_SESSION['insertPend'] = 0;

    echo ' <br>
    <div class="notify">
        <h2>Ejecución exitosa</h2>
    </div>';

}




?>









