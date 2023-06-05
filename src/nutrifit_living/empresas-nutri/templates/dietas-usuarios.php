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

$AllUsers=$resultIds->num_rows;

// Evaluamos la existencia de un id después de un click

$idDeJS = $_GET['ID'];

echo '<h4 class="titleDietas">Todas las Dietas</h4>';

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

                    for ($i=0; $i<$AllUsers; $i++) {

                            $rutapdf = str_replace('./', '', $DatosDietas[$i][0]);
                            $nameSelect = ''.$DatosNombres[$i][0].'';

                            echo 
                            '<tr class="clmInfoSlc"  onclick="verPDFUserSlc('."'../nutri-clinic/".$rutapdf."'".','."'".$nameSelect."'".')" >
                                <td>'.$DatosIds[$i][0].'</td><td>'.$DatosNombres[$i][0].'</td>
                            </tr>';
                    }

                ?>

            </table>
        </div>

</div>


<!-- BOTON DE CAMBIO DE FORMULARIO E INFORMACIÓN DE CADA UNO -->

<div class="infoFormPago moverInfoCardsRigth" id="InfoApartForms" >

    <h2>Tienes alguna duda?</h2>
    <br>
    <div class="containerCards">
       
        <div class="cardRelleno">
            <img src="https://cdn.pixabay.com/photo/2016/03/27/21/34/restaurant-1284351_1280.jpg">
            <h4>Cocina los alimentos</h4>
            <p>En este apartado se reciben las dietas de los pacientes de los diferentes hospitales para que especialistas realicen las comidas correspondientes para cada uno de ellos</p>
            <br>
            <a href="#">Leer más</a>
        </div>
        
        <div class="cardRelleno">
            <img src="https://cdn.pixabay.com/photo/2018/02/16/02/03/pocket-watch-3156771_1280.jpg">
            <h4>Ahorra tiempo</h4>
            <p>Todo es administrado en la página, ahorrando tiempo a la hora de cocinar las diferentes comidas de cada paciente</p>
            <br><br><br>
            <a href="#">Leer más</a>
        </div>
        
        <div class="cardRelleno">
            <img src="https://cdn.pixabay.com/photo/2016/11/08/04/48/doctor-1807475_1280.png">
            <h4>Mejora tu calidad de vida
            </h4>
            <p> Mantener hábitos saludables es el punto de partida para la mejoría de cada paciente</p>
            <br><br><br>
            <a href="#">Leer más</a>
        </div>
        
    </div>

    <button id="btnCambiarPlan" value="#" >Ver plan Personalizado</button>
</div>