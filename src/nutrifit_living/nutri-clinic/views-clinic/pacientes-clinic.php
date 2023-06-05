<?php

require_once "../../Login_register/conexion.php";

// Traer IDS


$idUsers = "SELECT id FROM pacientesclinic";
$nombreUsers = "SELECT nombre FROM pacientesclinic";

$resultIds = $link->query($idUsers);
$resultNombres = $link->query($nombreUsers);

$DatosIds = $resultIds->fetch_all();
$DatosNombres = $resultNombres->fetch_all();

$AllUsers=$resultIds->num_rows;

// Evaluamos la existencia de un id después de un click

$idDeJS = $_GET['ID'];

echo '<h2 class="titlePageSlc">Pacientes</h2>';



?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
            <div class="modal modalVentInitial cont-Pacientes modal-pacient-clinic">
                <div class="compra">       
                    <button id="close" type="submit" onclick="closeVent()" ><img src="../imagenes/x.png" ></button>  
                    
                <div class="info-user-page">

                    <div class="info-user-fixed" id="info-user-fixed">
                        
                    <div class="insertImg" id="insertImg" >
                            <form action="./cards_planes/cargarImagen.php" method="POST" class="formImage" id="FormImagenUser" enctype="multipart/form-data" > 
                                <img src="../imagenes/hosp-san-jose.png" id="imgChoosen">
                            </form>
                    </div>

                    <p><?php echo $DatosNombres[$idDeJS][0] ?></p>
                        
                        <div class="info-text">
                            <p> <small> Usuario VIP </small> </p>
                            <p> ID Personalizado: </p>
                            <p class="sepr-border" > <small> <?php echo $DatosIds[$idDeJS][0] ?> </small></p>
                        </div>

                        <a href="#"> <button class="botonVerProgreso" onclick="metPostJX('graficas-clinic', <?php echo $idDeJS ?>); graficasView(<?php echo $idDeJS ?>)">Datos Gráficos</button> </a>

                    </div>

                </div>

                </div>

                    <div class="skills skills-clinic" id="contInfoSkills">
                        <h2>Información</h2>

                        <?php 
                                                    
                            // Información de cada ususario

                            $idUserPer = $DatosIds[$idDeJS][0];

                            $infoUserPerSlc = "SELECT * FROM pacientesclinic WHERE id = $idUserPer";
                            $resultInfoPerSlc = $link->query($infoUserPerSlc);
                            $DatosSlcUser = $resultInfoPerSlc->fetch_assoc();
                        
                        ?>

                        <div class="categorias" id="categorias">
                                    <div class="categoria" data-categoria="seguridad">
                                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z"/></svg>
                                        <p>Estado</p>
                                    </div>
                                    <div class="categoria" data-categoria="entregas">
                                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M7 24h-5v-9h5v1.735c.638-.198 1.322-.495 1.765-.689.642-.28 1.259-.417 1.887-.417 1.214 0 2.205.499 4.303 1.205.64.214 1.076.716 1.175 1.306 1.124-.863 2.92-2.257 2.937-2.27.357-.284.773-.434 1.2-.434.952 0 1.751.763 1.751 1.708 0 .49-.219.977-.627 1.356-1.378 1.28-2.445 2.233-3.387 3.074-.56.501-1.066.952-1.548 1.393-.749.687-1.518 1.006-2.421 1.006-.405 0-.832-.065-1.308-.2-2.773-.783-4.484-1.036-5.727-1.105v1.332zm-1-8h-3v7h3v-7zm1 5.664c2.092.118 4.405.696 5.999 1.147.817.231 1.761.354 2.782-.581 1.279-1.172 2.722-2.413 4.929-4.463.824-.765-.178-1.783-1.022-1.113 0 0-2.961 2.299-3.689 2.843-.379.285-.695.519-1.148.519-.107 0-.223-.013-.349-.042-.655-.151-1.883-.425-2.755-.701-.575-.183-.371-.993.268-.858.447.093 1.594.35 2.201.52 1.017.281 1.276-.867.422-1.152-.562-.19-.537-.198-1.889-.665-1.301-.451-2.214-.753-3.585-.156-.639.278-1.432.616-2.164.814v3.888zm3.79-19.913l3.21-1.751 7 3.86v7.677l-7 3.735-7-3.735v-7.719l3.784-2.064.002-.005.004.002zm2.71 6.015l-5.5-2.864v6.035l5.5 2.935v-6.106zm1 .001v6.105l5.5-2.935v-6l-5.5 2.83zm1.77-2.035l-5.47-2.848-2.202 1.202 5.404 2.813 2.268-1.167zm-4.412-3.425l5.501 2.864 2.042-1.051-5.404-2.979-2.139 1.166z"/></svg>
                                        <p>Físico</p>
                                    </div>
                                    <div class="categoria" data-categoria="cuenta">
                                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z"/></svg>
                                        <p>Porcentajes</p>
                                    </div>
                                </div>

                                <div class="preguntas">

                                    <!-- Preguntas Entregas -->
                                    <div class="contenedor-preguntas" data-categoria="entregas">
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Edad <img src="../imagenes/nutrifit-clinic-imgs/edad-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['edad']." años" ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Peso <img src="../imagenes/nutrifit-clinic-imgs/peso-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['peso']." kg" ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Altura <img src="../imagenes/nutrifit-clinic-imgs/altura-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['altura']." metros" ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Género <img src="../imagenes/nutrifit-clinic-imgs/genero-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['sexo'] ?> </p>
                                        </div>
                                    </div>

                                    <!-- Preguntas Seguridad -->
                                    <div class="contenedor-preguntas" data-categoria="seguridad">
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Edema <img src="../imagenes/nutrifit-clinic-imgs/edema-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['edema'] ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Bicipal <img src="../imagenes/nutrifit-clinic-imgs/bicipal-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['bicipal'] ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Tricipital <img src="../imagenes/nutrifit-clinic-imgs/tricipital-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['Tricipal'] ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Circunferencia del brazo <img src="../imagenes/nutrifit-clinic-imgs/brazo-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['brazo'] ?> </p>
                                        </div>
                                    </div>

                                    <!-- Preguntas Cuenta -->
                                    <div class="contenedor-preguntas" data-categoria="cuenta">
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Indice de masa corporal <img src="../imagenes/nutrifit-clinic-imgs/IMC-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['indicemasa'] ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Grasa total en kg <img src="../imagenes/nutrifit-clinic-imgs/grasa-total-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['totalgrasa'] ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Masa magra <img src="../imagenes/nutrifit-clinic-imgs/masa-magra-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['masamagra'] ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Porcentaje de grasa <img src="../imagenes/nutrifit-clinic-imgs/porcentaje-grasa-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['porcentajegrasa'] ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> KG a disminuir <img src="../imagenes/nutrifit-clinic-imgs/kg-disminuir-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['disminución'] ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Tipo de dieta <img src="../imagenes/nutrifit-clinic-imgs/tipo-dieta-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta"> <?php echo $DatosSlcUser['tipodieta'] ?> </p>
                                        </div>
                                        <div class="contenedor-pregunta">
                                            <p class="pregunta"> Dieta actual PDF <img src="../imagenes/nutrifit-clinic-imgs/dieta-pdf-clinic.svg" alt="Abrir Respuesta" /></p>
                                            <p class="respuesta" onclick="verPDFUserSlc('<?php echo  $DatosSlcUser['nombre']; ?>', this.textContent)" > <?php echo $DatosSlcUser['pdfdietaclinic'] ?> </p>
                                        </div>
                                    </div>




                                </div>
                      

                    

                    </div>
                   
                </div>
              
            </div>
        </div>










