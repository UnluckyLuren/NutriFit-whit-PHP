<?php


echo '<h2 class="titlePageSlc" > Ingresar nuevo paciente </h2> ';


?>


<!-- multistep form -->
<form id="msform" action="./php/subir-paciente-ingreso.php" method="POST" enctype="multipart/form-data" >
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active liProActual" >Estado</li>
    <li class="liProActual" >Físico</li>
    <li class="liProActual" >Porcentajes</li>
  </ul>
  <!-- fieldsets -->
  <fieldset class="acomSelect">
    <h2 class="fs-title">Estado del Paciente</h2>
    <h3 class="fs-subtitle">Subida de información</h3>
    <label class="labFormIngre" >Nombre:</label>
    <input type="text" name="nombre" placeholder="Nombre del paciente" />
    <label class="labFormIngre" >Edema:</label>
    <input type="text" name="edema" placeholder="Edema" />
    <label class="labFormIngre" >Bicipal:</label>
    <input type="text" name="Bicipal" placeholder="Pliegues cutaneos Bicipal" />
    <label class="labFormIngre" >Tricipal:</label>
    <input type="text" name="Tricipal" placeholder="Pliegues cutaneos Tricipal" />
    <label class="labFormIngre">Circunferencia:</label>
    <input type="text" name="Circunferencia" placeholder="Circunferencia media del brazo" />
    <input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>
  <fieldset class="acomSelect noViewField">
    <h2 class="fs-title">Porcentajes del Usuario</h2>
    <h3 class="fs-subtitle">Información para los calculos de porcentajes</h3>
    <label class="labFormIngre" >Edad:</label>
    <input type="text" name="edad" id="edadUser" placeholder="Edad" />
    <label class="labFormIngre" >Peso:</label>
    <input type="text" name="peso" id="pesoUser" placeholder="Peso" />
    <label class="labFormIngre" >Altura:</label>
    <input type="text" name="altura" id="alturaUser" placeholder="Altura" />

    <label class="labFormIngre" >Sexo:</label>
    <div class="select" tabindex="1">
        <input class="selectopt" name="test" type="radio" id="opt2" value="hombre">
        <label for="opt2" class="option" >Hombre</label>
        <input class="selectopt" name="test" type="radio" id="opt3" value="mujer">
        <label for="opt3" class="option">Mujer</label>
    </div>
    <br><br>

    <input type="button" name="previous" class="previous action-button" value="Anterior" />
    <input type="button" name="next" class="next action-button" value="Siguiente" id="calcSalud" />
  </fieldset>
  <fieldset class="acomSelect noViewField">
    <h2 class="fs-title">Resultados</h2>
    <h3 class="fs-subtitle">Revisión de resultados y subida de información</h3>
    <label class="labFormIngre" >Masa:</label>
    <input type="text" name="indicemasa" placeholder="Indice de masa corporal" id="textIMC" />
    <label class="labFormIngre" >Grasa:</label>
    <input type="text" name="totalgrasa" placeholder="Grasa total en KG" id="textGrasaTotal" />
    <label class="labFormIngre" >Magra:</label>
    <input type="text" name="masamagra" placeholder="Masa magra" id="textGrasaMagra" />
    <label class="labFormIngre" > %Grasa:</label>
    <input type="text" name="porcentajegrasa" placeholder="Porcentaje de grasa" id="textPorcentajeGrasa" />
    <label class="labFormIngre" >Disminuir:</label>
    <input type="text" name="disminucion" placeholder="Cantidad de KG a disminuir" id="textDisminucion" />

    <label class="labFormIngre" >Dieta:</label>
    <div class="contextras">
      <div class="select" tabindex="1">
          <input class="selectopt" name="testdieta" type="radio" id="opt1" checked value="Dieta basal">
          <label for="opt1" class="option">Dieta basal</label>
          <input class="selectopt" name="testdieta" type="radio" id="opt2" value="Dieta líquida">
          <label for="opt2" class="option">Dieta líquida</label>
          <input class="selectopt" name="testdieta" type="radio" id="opt3" value="Dieta semilíquida">
          <label for="opt3" class="option">Dieta semilíquida</label>
          <input class="selectopt" name="testdieta" type="radio" id="opt4" value="Dieta blanda">
          <label for="opt4" class="option">Dieta blanda</label>
          <input class="selectopt" name="testdieta" type="radio" id="opt5" value="Dieta astringente">
          <label for="opt5" class="option">Dieta astringente</label>
          <input class="selectopt" name="testdieta" type="radio" id="opt6" value="Dieta por sonda nasogástrica">
          <label for="opt6" class="option">Dieta por sonda nasogástrica</label>
          <input class="selectopt" name="testdieta" type="radio" id="opt7" value="Dieta hipocalórica">
          <label for="opt7" class="option">Dieta hipocalórica</label>
          <input class="selectopt" name="testdieta" type="radio" id="opt8" value="Dieta absoluta o ayuno">
          <label for="opt8" class="option">Dieta absoluta o ayuno</label>
        </div>

        <div class="filePDFClinic">
            <p CLASS="textFileInput" >Adjuntar dieta</p>
            <input type="file" class="fileInputPDF" name="file">
        </div>

    </div>
    
    <br><br>

    <input type="button" name="previous" class="previous action-button" value="Anterior" />
    <button type="submit" class="action-button">Enviar</button>

  </fieldset>
</form>


<!-- <script src="./js/calculos-ingreso-pacientes.js"></script> -->

