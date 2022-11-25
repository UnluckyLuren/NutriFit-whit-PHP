<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nutrifit Living</title>
        <meta name="Description" content="Bienvenido a una vida mas saludable">
        <link  rel="icon" href="imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
        <link rel="preconnect" href="https://fonts.googleapis.com">

        
         <style>
          a{
              text-decoration: none;
              color: white;
          }
            div {
                margin-bottom: 20px;
            }
            .plan
            {
               margin-right: 10px;

            }
            input{
                background-color: #fafcf8;
                border-color: #bbe28c;
                left: 120px;
                /* display: flex;
                justify-content:flex-start; /
            }

            / label, legend,input,div{
                font-family: 'Roboto', sans-serif;
                color:#008037;
            } */}
            #medidas{
                display: none;
            }
            #actividadfisica{
                display: none;
            }
            form{
                background-color: #b5e48c;
            }
            input{
                border-radius: 7px;
            }
            label, legend, div .esa{
                color: #1a759f;
            }
            .esa{
                color:#1a759f ;
            }
            .bold{
                font-weight: bold;
            }
            select{
                border-radius: 5px;
            }
            .hombre .mujer{
                color:#168aad;
            }
            .plato{
                background: transparent;
                border: none;
                width: 200px;
            }
            .plato{
                width: 10px;
            }
            img{
                width: 200px;
                height: 200px;
                margin-top: 45px;
                margin-left: 45px;
            }
            .ImagenFooterOpccion2{
                margin-top: 22% !important;
            }

        </style>
            
        </style>

  
  
  <link rel="stylesheet" href="CSS/estilos-cards-dieta.css">
  <link rel="stylesheet" href="CSS/styleheader.css">
  <link rel="stylesheet" href="CSS/styles.css">
  <link rel="stylesheet" href="CSS/dieta.css">
  <link rel="stylesheet" href="CSS/responsive.css">

    </head>
    <body>

        <header class="header ">
            
        <div class="userMenuDiv" >
            <a href="#"><img src="imagenes/Gato enojado.webp" id="open"  class="userMenuImg"></a>
            <p>Iván Jesus Rodríguez</p>
        </div>

            <nav class="nav">
                <a href="#" class="logo ">
                    <img src="imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
                </a>
                <button class="toggle" aria-label="Abrir menú">
                    <i class="fa-solid fa-bars"></i>
    
                </button>
                <ul class="nav-menu">
                    <li class="nav-menu-item  "><a href="Page-Initial.php" class="nav-menu-link nav-link">Inicio</a></li>
                    <li class="nav-menu-item " ><a href="productos.php" class="nav-menu-link nav-link">Productos</a></li>
                    <li class="nav-menu-item"><a href="dieta.php" class="nav-menu-link nav-link">Servicios</a></li>
                    <li class="nav-menu-item "><a href="recetarios/recetarios.php" class="nav-menu-link nav-link">Recetario</a></li>
                </ul>
            </nav>
        </header>

<!-- menu desplegable -->
       
<div class="container containerMenuDes">
    <nav class="menu menuSoloDeDieta">
        <ul>
            <li><a href="dieta.php"><p class="nombreDEpaginadondeseencuantra">Dietas</p></a>
            <ul class="submenu"></li>
            <li><a href="equivalencias.php">Mapa de equivalencias</a></li>
            <li><a href="lugares.php">Lugares Recomendados</a></li>
            <li><a href="productos.php">Productos recomendados</a></li>
        </ul>
        </ul>
    </nav>                      
</div>    


<pre class="titulo_de_servicios">Planes para elegir</pre>


<form  class="dieta  formDietaGratis acomodoformGratis" id="FormGratis">
    <h2>Plan Gratuito</h2>
    <br>
 <div>
        <!-- <label >Nombre -->
            <br>
         <input type="text" name="name" placeholder="Nombre" >        
        <!-- </label> -->
 </div>
 <div>   
     <!-- <label>Edad -->
         <br>
         <input id="edadUser" type="text" required placeholder="Edad" >
     <!-- </label> -->
 </div>
 <div>
     <!-- <label >Peso (Kg)                    -->
         <br>
         <input id="pesoUser" type="text" required placeholder="Peso (kg)" >
     <!-- </label> -->
 </div>
 <div>
     <!-- <label> Altura (m) -->
         <br>
         <input id="alturaUser" type="text" required placeholder="Altura (m)" >
     <!-- </label> -->
 </div>
 <br>
 
<legend> Sexo: </legend>
<br>
    <div >
        <label>
            <input class="hombre radioInputForm" id="hombreUser" name="gender" type="radio">
            Hombre
        </label>
    
       <label >
           <input class="mujer radioInputForm" id="mujerUser" name="gender" type="radio">
           Mujer
       </label>
    </div>

    <a href="#"> <button class="buttonenviar" id="calcSalud" >Calcular</button> </a>

</form>

<!-- Plan Personalizado -->

<form class="formDietaGratis dieta acomodoformPersonalizado showForm minimizarForm"  action="./cards_planes/subida-personalizado.php" method="POST" id="FormPago" >

    <h2>Plan Personalizado</h2>
    <br><br>
      <legend >Ingrese las siguientes medidas</legend>
     <div>
         <!-- <label> Cuello (cm) -->
             <br>
             <input type="number" name="cuello" placeholder="Cuello (cm)" >
         <!-- </label> -->
     </div>
     <div>
         <!-- <label> Cintura (cm) -->
             <br>
             <input type="number" placeholder="Cintura" name="cintura" >
         <!-- </label> -->
     </div>
     <div id="medidas">
</div>

  <legend> Alergias:</legend>
    <div class="alergiasInputs">
        <br>
        <label>
            <input   type="checkbox" name="Alergias" value="Fresa">
            Fresa
        </label>
       
        <label>
            <input  type="checkbox" name="Alergias" value="Maní">
            Mani
        </label>
        
        <label>
            <input type="checkbox" name="Alergias" value="Lacteos">
            Lacteos
        </label>

        <label>
            <input type="checkbox" name="Alergias" value="Otros" placeholder="Otros">
            Otros
        </label>
   </div>

   <legend>Escriba su alergia:</legend>
   <div>
        <input type="text" name="alergiasEspecificas" placeholder="----">
   </div>
<br>

    <div class="acomodoPreferencias acomodoEnfermedades" >
        <br>
        <legend>¿Posee alguna enfermedad?</legend>
        <select name="enfermedades" id="disease" required>

            <option value="Ninguna" selected >Ninguna</option> 
            <optgroup label="Enfermedades Crónicas">
                <option value="Hipertensión">Hipertensión</option>
                <option value="cardiovasculares">Enfermedades cardiovasculares</option>
                <option value="diabetes">Diabetes</option>
            </optgroup>
            <optgroup label="Enfermedades Respiratorias">
                <option value="Asma">Asma</option>
            </optgroup>
        </select>
    </div>

    <div class="acomodoPreferencias">
            <legend>¿Qué prefieres?</legend>
        <select name="preferencia" id="disease" required  >
            <option value="Dulce">Dulce</option>
            <option value="Salado">Salado</option>
        </select>
     </div>
</div>

<div><button class="plato"><img src="imagenes/Dieta.jpg" alt="Plato" class=""></button> </div>

     <div class="acomodoPreferencias acomodoActividades " >
        <legend>¿Realiza algún tipo de actividad física?</legend>
        <select name="ejercicio" id="disease" required>
            <option value="Ninguna">Ninguna</option>
            <option value="aeróbico">Ejercicio aeróbico</option>
            <option value="anaerobico">Ejercicio Anaerobico</option>
            <option value="cardiovascular">Ejercicio cardiovascular</option>
            <option value="otro">Otro</option>
        </select>
     </div>
     <legend class="sepEjercSem" >¿Cuántos días  a la semana realiza actividad fìsica?</legend>
     <div class="acomodoEjercicioSemanal" >
         <label>
            <input onclick="ejercicio();" name="days" type="radio" value="5dias" >
            <p>5 días</p>
         </label>
       
         <label >
            <input onclick="ejercicio();" name="days" type="radio" value="7dias">
            <p>7  días</p> 
         </label>
         <label >
             <input onclick="ejercicio();" name="days" type="radio" value="3dias">
             <p>3  días</p>
         </label>
         <label >
             <input onclick="ejercicio();" name="days" type="radio" value="ocasionalmente">
             <p>Ocasionalmente</p>
         </label>
     </div>
<div>
    <div id="actividadfisica">
        <legend class="acomodoDuracionEjerc sepEjercSem" >Duración de la actividad física: </legend>
        <div class="acomodoEjercicioSemanal">
            <label>
                <input name="duracion" type="radio" value="30min">
                   <p>30 Minutos</p>
                </label>
            <label >
            <input name="duracion" type="radio" value="45min">
            <p>45 Minutos</p>
            </label>
        
            <label >
                <input name="duracion" type="radio" value="1hr" >
                <p>1 Hora</p>
            </label>
            <label >
                <input name="duracion" type="radio" value="2-3hr" >
                <p>2-3 Horas</p>
            </label>
        </div>
    </div>

    <a href="metodo_de_pago.php" class="disNone" id="btniraPago" > <button name="send" class="buttonenviar">Enviar</button> </a>

</div>

    

</form>


<!-- BOTON DE CAMBIO DE FORMULARIO E INFORMACIÓN DE CADA UNO -->

<div class="infoFormPago moverInfoCardsRigth" id="InfoApartForms" >

    <h2>Tienes alguna duda?</h2>
    <br>
    <div class="containerCards">
       
        <div class="card">
            <img src="imagenes/imgCardsDieta/salad-g59f0b46f7_1920.jpg">
            <h4>Conocenos</h4>
            <p>Ten la seguridad de que toda tu información sera usada debidamente de acuerdo a nuestra politica de privacidad</p>
            <br><br><br>
            <a href="#">Leer más</a>
        </div>
        
        <div class="card">
            <img src="imagenes/imgCardsDieta/Nutricionista.jfif">
            <h4>Nútriologa Gabriela V. Águila</h4>
            <p>Asesoria Nutricional Personalizada.</p>
            <p>Control de Peso (Perdida y Aumento).</p>
            <p>Alimentación en diabetes, HTA, Dislipidemias.</p>
            <br>
            <a href="#">Leer más</a>
        </div>
        
        <div class="card">
            <img src="imagenes/imgCardsDieta/running-gd2b436189_1920.jpg">
            <h4>Mejora tu calidad de vida
            </h4>
            <p> Mantener hábitos saludables es el punto de partida para alcanzar tus metas.</p>
            <br><br><br><br>
            <a href="#">Leer más</a>
        </div>
        
    </div>

    <button id="btnCambiarPlan" >Ver plan Personalizado</button>
</div>



    <!-- Ventana emergente -->

        <!-- Para que se habra la ventana debes oponerle a un a el id: open -->

        <div class="modal-container" id="ventanaCalculosGratis">
            <div class="modal">
                <div class="compra containerVentanaDieta">       
                    <button id="close" type="submit" ><img src="imagenes/x.png" ></button>  
                    
                    <div class="EscalasResults">
                  
                        <div class="indicePeso" id="indicePeso">
                            <h2>Tú peso Ideal es:</h2>
                            <p id="textPesoIdeal"></p>
                            v
                        </div>
                        <img src="./imagenes/EscalasGrasasMujeres.png" id="EscalaImg">
                    </div>

                    <div class="PorcentajesGrasasEjemplos">
                        <img src="./imagenes/grasas mujeres.jpg" id="porcentajesImg">

                        <div class="textMejorarSalud">
                            <div class="IMCInfo">
                                <h2>Tú indice de masa corporal es de:</h2>
                                <p id="textIMC" ></p>
                            </div>

                            <div class="GrasaTotalInfo">
                                <h2>Tú grasa Total en kg es de:</h2>
                                <p id="textGrasaTotal" ></p>
                            </div>

                            <div class="GrsaMagraInfo">
                                <h2>Tú masa magra es de:</h2>
                                <p id="textGrasaMagra" ></p>
                            </div>

                            <div class="PorcentajeGrasaInfo">
                                <h2>Tú porcentaje de grasa es del:</h2>
                                <p id="textPorcentajeGrasa" ></p>
                            </div>

                            <div class="DisminucionInfo">
                                <h2>La cantidad de kg a disminuir es de:</h2>
                                <p id="textDisminucion" ></p>
                            </div>

                        </div>

                    </div>

                </div>
                   
            </div>
              
        </div>




<!-- Footer -->


<br><br>
<footer class="containerfooter objDisplay footerEnDieta" id="footerDieta" >
    <div class="item-1">
        <div class="imagen">
            <figure>
                <a href="Page-Initial.php">
                    <img class="ImagenFooterOpccion2" src="../nutrifit_living/imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" >
                </a>
            </figure>
        </div>
           
   <a class="item-2" href="../nutrifit living/Termsycondiciones.php">TERMINOS Y CONDICIONES</a>

      
        </div>
        <div class="item-3">
            <small>&copy; 2022  - Todos los Derechos Reservados.</small>
        </div>
</footer>

    <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
    <script defer src="Prueba7/java.js"></script>
    <!-- <script src="whatss.js"></script> -->
    <script src="./js/cambiar-plan.js"></script>
    <script src="js/calculos-formularios.js"></script>
            
    </body>

</html>