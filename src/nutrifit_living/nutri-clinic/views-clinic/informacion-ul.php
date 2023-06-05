<ul class="InfoPendSelect infoPacientSlc">

                               

<li>
    <h3>Edema:</h3>
    <p><?php echo $DatosSlcUser['edema'] ?></p>
</li>
<li>
    <h3>Bicipal:</h3>
    <p><?php echo $DatosSlcUser['bicipal'] ?></p>
</li>
<li>
    <h3>Tricipital:</h3>
    <p><?php echo $DatosSlcUser['Tricipal'] ?></p>
</li>
<li>
    <h3>Circunferencia del brazo:</h3>
    <p><?php echo $DatosSlcUser['brazo'] ?></p>
</li>
<li>
    <h3>Edad:</h3>
    <p><?php echo $DatosSlcUser['edad'] ?></p>
</li>
<li>
    <h3>Peso:</h3>
    <p><?php echo $DatosSlcUser['peso'] ?></p>
</li>
<li>
    <h3>Altura:</h3>
    <p><?php echo $DatosSlcUser['altura'] ?></p>
</li>
<li>
    <h3>Sexo:</h3>
    <p><?php echo $DatosSlcUser['sexo'] ?></p>
</li>
<li>
    <h3>Indice de masa:</h3>
    <p><?php echo $DatosSlcUser['indicemasa'] ?></p>
</li>
<li>
    <h3>Total de grasa:</h3>
    <p><?php echo $DatosSlcUser['totalgrasa'] ?></p>
</li>
<li>
    <h3>Masa magra:</h3>
    <p><?php echo $DatosSlcUser['masamagra'] ?></p>
</li>
<li>
    <h3>Porcentaje de grasa:</h3>
    <p><?php echo $DatosSlcUser['porcentajegrasa'] ?></p>
</li>
<li>
    <h3>KG a disminuir:</h3>
    <p><?php echo $DatosSlcUser['disminución'] ?></p>
</li>
<li>
    <h3>Tipo de dieta:</h3>
    <p><?php echo $DatosSlcUser['tipodieta'] ?></p>
</li>
<li>
    <h3>PDF Actual:</h3>
    <p> <a href="#" onclick="verPDFUserSlc('<?php echo  $DatosSlcUser['nombre']; ?>', this.textContent)"> <?php echo $DatosSlcUser['pdfdietaclinic'] ?> </a></p>
</li>

</ul>