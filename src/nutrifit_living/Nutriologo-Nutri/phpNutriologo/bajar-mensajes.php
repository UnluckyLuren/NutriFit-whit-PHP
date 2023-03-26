<?php

require_once "../../Login_register/conexion.php";

// Array de objetos con ms

$idUsers = "SELECT id FROM mensajes";
$nombreUsers = "SELECT nombre FROM mensajes";
$imagenUsers = "SELECT imagen FROM mensajes";


$resultIds = $link->query($idUsers);
$resultNombres = $link->query($nombreUsers);
$resultImagenes = $link->query($imagenUsers);


$DatosIds = $resultIds->fetch_all();
$DatosNombres = $resultNombres->fetch_all();
$DatosImagenes = $resultImagenes->fetch_all();

$idDeJS = $_GET['ID'];


// Bajar mensajes actuales

$mensajesUsers = "SELECT mensaje FROM mensajes";
$resultMensajes = $link->query($mensajesUsers);
$DatosMensajes = $resultMensajes->fetch_all();

$contenidoMS = $DatosMensajes[$idDeJS][0];

// Decodificar los ms

$decodificaciónBase64 = base64_decode($contenidoMS);
$decodificaciónJson = json_decode($decodificaciónBase64,true);


function evaluarCrearHtml($cont, $nombreSelect, $idSelect) {
    $i = 0;

    echo '<h1 class="clNombreUsuarioChat">'.$nombreSelect.'</h1>'.

    '<ul id="comments-list" class="comments-list MSInfoUl">';

    foreach ($cont as $prueba) { 
		
        if ( $cont[$i]['user'] == $cont[0]['user'] ) {
        
            echo '
                <li>
                <div class="comment-main-level">
                    <div class="comment-avatar"><img src="'.$cont[$i]['img'].'"></div>
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name">'.$cont[$i]['user'].'</h6>
                            <span>'.$cont[$i]['hora'].'</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            '.$cont[$i]['mensaje'].'
                        </div>
                    </div>
                </div>
                </li>';

        } else {

            echo '<ul class="comments-list reply-list">
            <li>
                <div class="comment-avatar"><img src="'.$cont[$i]['img'].'" ></div>
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name by-author">'.$cont[$i]['user'].'</h6>
                        <span>'.$cont[$i]['hora'].'</span>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        '.$cont[$i]['mensaje'].'
                    </div>
                </div>
            </li>
            </ul>';

        }

        $i++;
    }

    echo '</ul>

    <div class="responseNutri">
        <input type="text" id="textMensajeSelect">
        <img src="../imagenes/Envio-ms-flecha.png" class="imgEnvioMs" onclick="subirMS('.$idSelect.')">
    </div>';

}


evaluarCrearHtml($decodificaciónJson, $DatosNombres[$idDeJS][0], $idDeJS);


?>





<!-- 
	<li>
				<div class="comment-main-level">
					Avatar
					<div class="comment-avatar"><img src=" echo '.'.$DatosImagenes[1][0] " alt=""></div>
					Contenedor del Comentario
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name">Lorena Rojero</h6>
							<span>hace 20 minutos</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
						</div>
					</div>
				</div>
				Respuestas de los comentarios
				<ul class="comments-list reply-list">
					<li>
						Avatar
						<div class="comment-avatar"><img src=" echo '.'.$imgNutri " ></div>
						Contenedor del Comentario
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name by-author"> echo $nameNutri </h6>
								<span>hace 10 minutos</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</li>

					<li>
						Avatar
						<div class="comment-avatar"><img src=" echo '.'.$imgNutri ?>" alt=""></div>
						Contenedor del Comentario
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name by-author"> echo $nameNutri ?></h6>
								<span>hace 10 minutos</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</li>
				</ul>
			</li>

			<li>
				<div class="comment-main-level">
					Avatar
					<div class="comment-avatar"><img src=" echo '.'.$DatosImagenes[1][0] ?>" alt=""></div>
					Contenedor del Comentario
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name"> Lorena Rojero </h6>
							<span>hace 10 minutos</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
						</div>
					</div>
				</div>
			</li>
 -->



