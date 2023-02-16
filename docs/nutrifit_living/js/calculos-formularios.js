//  objetos de eventos

const calcSalud = document.getElementById('calcSalud'),
    ventanaCalculosFormGratis = document.getElementById('ventanaCalculosGratis'),
    close = document.getElementById('close');


// Inputs

const pesoUser = document.getElementById('pesoUser'),
    alturaUser = document.getElementById('alturaUser'),
    edadUser = document.getElementById('edadUser'),
    hombreUser = document.getElementById('hombreUser'),
    mujerUser = document.getElementById('mujerUser');


// objetos para mostrar la info calculada en el DOM

const textIMC = document.getElementById('textIMC'),
    textGrasaTotal = document.getElementById('textGrasaTotal'),
    textGrasaMagra= document.getElementById('textGrasaMagra'),
    textPesoIdeal = document.getElementById('textPesoIdeal'),
    textDisminucion = document.getElementById('textDisminucion'),
    textPorcentajeGrasa = document.getElementById('textPorcentajeGrasa');



// Funciones


const calcPesoIdeal = (porcentajeIdeal, grasaTotal, porcentajeGrasaCorporal, grasaMagra) => {
    
    let pesoMeta  = ( (porcentajeIdeal * grasaTotal) / (porcentajeGrasaCorporal / 100) ),
        pesoIdeal = grasaMagra + pesoMeta,
        grasaParaDisminuir = grasaTotal - pesoMeta;

    let resultadosDelPeso = [pesoIdeal, grasaParaDisminuir];

    return resultadosDelPeso;
}




const resultadosFinales = (genero) => {

    let porcentajesImg = document.getElementById('porcentajesImg'),
        EscalaImg = document.getElementById('EscalaImg'),
        indicePeso = document.getElementById('indicePeso');

    textIMC.textContent= calcIMC().toFixed(2)+" kg";
    textGrasaTotal.textContent = calcGrasas()[0].toFixed(2)+" kg";
    textGrasaMagra.textContent = calcGrasas()[1].toFixed(2)+" kg";
    textPorcentajeGrasa.textContent = calcGrasas()[2].toFixed(0)+" %";
    textPesoIdeal.textContent = calcGrasas()[3][0].toFixed(2)+" kg"
    textDisminucion.textContent = calcGrasas()[3][1].toFixed(2)+" kg";

    let peso = calcGrasas()[3][0].toFixed(2);

    if (genero) {

        porcentajesImg.src = "./imagenes/grasas hombres.jpg";
        EscalaImg.src = "./imagenes/Escalas_de_Peso-Sin-Fondo.png";
        EscalaImg.style.width="90%";

        if ( peso > 0 && peso < 49 ) {

            indicePeso.style.left="4em";

        } else if (peso >= 49 && peso < 61 ) {

            indicePeso.style.left="13.5em";

        } else if (peso >= 61 && peso < 74 ) {

            indicePeso.style.left="23.5em";

        } else if (peso >= 74 && peso < 99 ) {

            indicePeso.style.left="33em";

        } else if (peso >= 99) {

            indicePeso.style.left="43em";

        }


    } else {

        porcentajesImg.src = "./imagenes/grasas mujeres.jpg";
        EscalaImg.src = "./imagenes/EscalasGrasasMujeres.png";
        EscalaImg.style.width="80%";

        if ( peso > 0 && peso < 46 ) {

            indicePeso.style.left="7em";

        } else if (peso >= 46 && peso < 58 ) {

            indicePeso.style.left="16em";

        } else if (peso >= 58 && peso < 71 ) {

            indicePeso.style.left="25em";

        } else if (peso >= 71 && peso < 97 ) {

            indicePeso.style.left="34.5em";

        } else if (peso >= 97) {

            indicePeso.style.left="43.5em";

        }

    }

}


// Formulas y calculos


const calcIMC = () => {
    let IMC = pesoUser.value/(alturaUser.value*alturaUser.value);

    return IMC;
}


const calcPorcentajeGrasaCorporal = () => {

    // El cálculo de grasa por medio de IMC ( formula de Deurenberg) ha sido validada en poblaciones entre 7 a 83 años con un imc entre 13.9 a 40.9

    let IMCResult = calcIMC(), porcentajeGrasaCorporal = '';

    if (hombreUser.checked) {

        porcentajeGrasaCorporal = (1.20 * IMCResult) + (0.23 * edadUser.value) - (10.8 * 1) - 5.4;

    } else if (mujerUser.checked) {
        
        porcentajeGrasaCorporal = (1.20 * IMCResult) + (0.23 * edadUser.value) - (10.8 * 0) - 5.4;

    }

    return porcentajeGrasaCorporal;
}


const calcGrasas = () => {

    let pesoMetaSaludable;
    let GrasaCorporal = calcPorcentajeGrasaCorporal();

    let grasaTotal = pesoUser.value * ( GrasaCorporal / 100),
    grasaMagra = pesoUser.value - grasaTotal;


    if (hombreUser.checked) {

        if ( edadUser.value >= 20 && edadUser.value <= 39 ) {

            pesoMetaSaludable = calcPesoIdeal(0.12, grasaTotal, GrasaCorporal, grasaMagra);

        } else if ( edadUser.value >= 40 && edadUser.value <= 59 ) {

            pesoMetaSaludable = calcPesoIdeal(0.17, grasaTotal, GrasaCorporal, grasaMagra);

        } else if ( edadUser.value >= 60 && edadUser.value <= 79 ) {

            pesoMetaSaludable = calcPesoIdeal(0.22, grasaTotal, GrasaCorporal, grasaMagra);

        } else if ( edadUser.value < 20 ) {

            pesoMetaSaludable = calcPesoIdeal(0.10, grasaTotal, GrasaCorporal, grasaMagra);

        } 

    } else if (mujerUser.checked) {
        
        if ( edadUser.value >= 20 && edadUser.value <= 39 ) {

            pesoMetaSaludable = calcPesoIdeal(0.22, grasaTotal, GrasaCorporal, grasaMagra);

        } else if ( edadUser.value >= 40 && edadUser.value <= 59 ) {

            pesoMetaSaludable = calcPesoIdeal(0.26, grasaTotal, GrasaCorporal, grasaMagra);

        } else if ( edadUser.value >= 60 && edadUser.value <= 79 ) {

            pesoMetaSaludable = calcPesoIdeal(0.30, grasaTotal, GrasaCorporal, grasaMagra);

        } else if ( edadUser.value < 20 ) {

            pesoMetaSaludable = calcPesoIdeal(0.15, grasaTotal, GrasaCorporal, grasaMagra);

        } 

    }

    let resultadosGrasas = [grasaTotal, grasaMagra, GrasaCorporal, pesoMetaSaludable];

    return resultadosGrasas;
}


// Eventos


calcSalud.addEventListener('click', () => {

    if (hombreUser.checked) {

        resultadosFinales(true);

    } else if (mujerUser.checked) {
        
        resultadosFinales(false);
    }

    ventanaCalculosFormGratis.classList.toggle('mostrarVentanaDietaCalculos');

});

close.addEventListener('click', () => {

    ventanaCalculosFormGratis.classList.toggle('mostrarVentanaDietaCalculos');

});


