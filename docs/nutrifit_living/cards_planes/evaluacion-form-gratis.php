<?php

require "./Login_register/conexion.php";

$id = $_SESSION['id'];

if ( !isset( $_SESSION['nombreFormGratis'] ) ) {
    
    $validacion = " SELECT * FROM free WHERE id = $id ";
    $resultValidacion = $link->query($validacion);

    if ( $resultValidacion->num_rows > 0 ) { 
    
        $Datos = $resultValidacion->fetch_assoc();
        
        $_SESSION['nombreFormGratis'] = $Datos['nombre'];
        $_SESSION['edadFormGratis'] = $Datos['edad'];
        $_SESSION['pesoFormGratis'] = $Datos['peso'];
        $_SESSION['alturaFormGratis'] = $Datos['altura'];
        $_SESSION['sexoFormGratis'] = $Datos['sexo'] ;

    } else {

        $_SESSION['nombreFormGratis'] = 'Nombre';
        $_SESSION['edadFormGratis'] ='Edad';
        $_SESSION['pesoFormGratis'] = 'Peso (kg)';
        $_SESSION['alturaFormGratis'] = 'Altura (m)';
        $_SESSION['sexoFormGratis'] = 'Sexo';

    }

}











?>