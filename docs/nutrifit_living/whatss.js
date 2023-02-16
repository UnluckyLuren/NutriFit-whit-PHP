// // Start of Async Callbell Code 
//   window.callbellSettings = {
//     token: "N55ndJoAiQY86os9dyDrGT49"
//   };
// (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()

// // End of Async Callbell Code 

// // Start of Async Callbell Code 

//   window.callbellSettings = {
//     token: "N55ndJoAiQY86os9dyDrGT49"
//   };
//   (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()

// // End of Async Callbell Code


    window.callbellSettings = {
      token: "y9tCavG2LdfWF36uiD7Hakkd"
    };
 
    (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
  

//Habilitar el tiempo de actividad fisica
function ejercicio () {
  document.getElementById('actividadfisica').style.display = 'block';
}
function noejercicio () {
  document.getElementById('actividadfisica').style.display= 'none'
}

//Formulario de dieta
let edad,valoredad,peso,valorpeso,altura,valoraltura,iimc,porcentajeM,IMC,porcentajeH,MCM,GT,pesoideal,pesometadegrasa

//IMC
// function calcularimc () {
//   IMC = document.getElementById('IMC')
//  IMC.addEventListener("click", calcular)
// }

function calcular () {
  peso = document.getElementById('peso')
  valorpeso= peso.value;
  altura = document.getElementById('altura')
  valoraltura = altura.value;
  iimc= valorpeso / (valoraltura * valoraltura);
 if (iimc > 29.999999999999999999999999 && iimc < 34.999999999999999999999999) {
alert ("esta en Obesidad clase 1, su IMC es : " + (iimc))
} else if (iimc > 34.999999999999999999999999 && iimc <  39.999999999999999999999999 ) {
alert("esta en Obesidad clase 2, su IMC es de : " + (iimc))
} else if (iimc > 39.999999999999999999999999) {
   alert(" esta en Obesidad clase 3, su IMC es : " + (iimc))
} else if (iimc > 25 && iimc < 29.999999999999999999999999) {
 alert("Tiene sobrepeso su IMC es de : " + (iimc))
} else if (iimc >= 18.5 && iimc < 25) {
  alert ("Esta saludable su IMC es de : " + (iimc))
} else if (iimc < 18.5) {
alert ("Esta bajo de peso su IMC es de : " + (iimc))
}
}


function medidasmujer () {
  document.getElementById('medidas').style.display = 'block';
   peso = document.getElementById('peso')
   valorpeso= peso.value;
   altura = document.getElementById('altura')
   valoraltura = altura.value;
   iimc= valorpeso / (valoraltura * valoraltura);
   edad = document.getElementById('edad')
   valoredad = edad.value;
   porcentajeM = (1.2 * iimc) + (0.23 * valoredad) - 5.4 ;
  alert ("Su porcentaje de grasa corporal es : " + porcentajeM);
  MCM = (valorpeso) - ((valorpeso)*(porcentajeM/100));
  alert ("Tu masa corporal magra es de: " + MCM + " kg")
  GT= ((valorpeso)*(porcentajeM/100));
  if (iimc <= 18 && iimc >= 15 && valoredad <= 20) {
    pesometadegrasa = (0.47)*(GT) / (porcentajeM/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  } else if (iimc <= 18 && iimc >= 15 && valoredad > 20 && valoredad <= 30) {
    pesometadegrasa = (0.52)*(GT) / (porcentajeM/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  }else if (iimc <= 18 && iimc >= 15 && valoredad > 30 && valoredad <= 40 ) {
    pesometadegrasa = (0.58)*(GT) / (porcentajeM/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  } else if (iimc <= 18 && iimc >= 15 && valoredad > 40 && valoredad <= 50 ) {
    pesometadegrasa = (0.67)*(GT) / (porcentajeM/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  } else if (iimc <= 18 && iimc >= 15 && valoredad > 50) {
    pesometadegrasa = (0.77)*(GT) / (porcentajeM/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  }else if (iimc <= 20 && iimc >= 18 && valoredad <= 20  ) {
    pesometadegrasa = (0.37)*(GT) / (porcentajeM/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
}else if (iimc <= 20 && iimc >= 18 && valoredad > 20 && valoredad <= 30 ) {
  pesometadegrasa = (0.45)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
}else if (iimc <= 20 && iimc >= 18 && valoredad > 30 && valoredad <= 40 ) {
  pesometadegrasa = (0.53)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
}else if (iimc <= 20 && iimc >= 18 && valoredad > 40 && valoredad <= 50 ) {
  pesometadegrasa = (0.6)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 20 && iimc >= 18 && valoredad > 50 ) {
  pesometadegrasa = (0.69)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad <= 20) {
  pesometadegrasa = (0.22)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 20 && valoredad <= 30 ) {
  pesometadegrasa = (0.27)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 30 && valoredad <= 40 ) {
  pesometadegrasa = (0.33)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 40 && valoredad <= 50 ) {
  pesometadegrasa = (0.39)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 50 && valoredad <= 60 ) {
  pesometadegrasa = (0.45)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 60 ) {
  pesometadegrasa = (0.53)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30 && valoredad > 20 && valoredad <= 40 ) {
  pesometadegrasa = (0.17)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30  && valoredad <= 20 ) {
  pesometadegrasa = (0.12)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30 && valoredad > 40 && valoredad <= 50 ) {
  pesometadegrasa = (0.2)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30 && valoredad > 50 && valoredad <= 60 ) {
  pesometadegrasa = (0.27)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30 && valoredad > 60 ) {
  pesometadegrasa = (0.41)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 30 && iimc < 35 && valoredad <= 40) {
  pesometadegrasa = (0.12)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 30 && iimc < 35 && valoredad > 40 && valoredad <= 50 ) {
  pesometadegrasa = (0.18)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 30 && iimc < 35 && valoredad > 50 && valoredad <= 60 ) {
  pesometadegrasa = (0.24)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 30 && iimc < 35 && valoredad > 60) {
  pesometadegrasa = (0.33)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40 && valoredad <= 20 ) {
  pesometadegrasa = (0.015)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40  && valoredad > 20 && valoredad <= 30) {
  pesometadegrasa = (0.05)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40  && valoredad > 30 && valoredad <= 40) {
  pesometadegrasa = (0.12)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40  && valoredad > 40 && valoredad <= 50) {
  pesometadegrasa = (0.17)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
}else if (iimc > 35 && iimc < 40  && valoredad > 50 && valoredad <= 60) {
  pesometadegrasa = (0.21)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40  && valoredad > 60) {
  pesometadegrasa = (0.275)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40 && valoredad <= 30) {
  pesometadegrasa = (0.017)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40  && valoredad > 30 && valoredad <= 40) {
  pesometadegrasa = (0.1)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40  && valoredad > 40 && valoredad <= 50) {
  pesometadegrasa = (0.13)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40  && valoredad > 50 && valoredad <= 60) {
  pesometadegrasa = (0.16)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40  && valoredad > 60) {
  pesometadegrasa = (0.24)*(GT) / (porcentajeM/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
}

if (iimc >= 20 && iimc<=25){
  alert ("","Esta en un buen rango de peso, mantengase en un peso cercano al que esta ahorita",'success')
} else if (valorpeso > pesoideal && iimc > 25) {
pesoabajar= valorpeso-pesoideal
alert ("","Usted debera bajar: " + pesoabajar + " kg aprox.",'success')
} else if (pesoideal > valorpeso && iimc < 25) {
  pesoasubir = pesoideal - valorpeso
  alert ("Usted debera subir: "+ pesoasubir + " kg aprox.",'success')
}
}

function sexohombre () {
  document.getElementById('medidas').style.display = 'none'
  peso = document.getElementById('peso')
    valorpeso= peso.value;
    altura = document.getElementById('altura')
    valoraltura = altura.value;
    iimc= valorpeso / (valoraltura * valoraltura);
    edad = document.getElementById('edad')
    valoredad = edad.value;
    porcentajeH = (1.2 * iimc) + (0.23 * valoredad) -(10.8*1) - 5.4;
   alert ("Su porcentaje  de grasa corporal es : " + porcentajeH);
   MCM = (valorpeso) - ((valorpeso)*(porcentajeH/100));
   alert ("Tu masa corporal magra es de: "+ MCM + " kg aprox.")
  GT= ((valorpeso)*(porcentajeH/100));
   if (iimc <= 18 && iimc >= 15 && valoredad <= 20) {
    pesometadegrasa = (0.4)*(GT) / (porcentajeH/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  } else if (iimc <= 18 && iimc >= 15 && valoredad > 20 && valoredad <= 30) {
    pesometadegrasa = (0.45)*(GT) / (porcentajeH/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  }else if (iimc <= 18 && iimc >= 15 && valoredad > 30 && valoredad <= 40 ) {
    pesometadegrasa = (0.52)*(GT) / (porcentajeH/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  } else if (iimc <= 18 && iimc >= 15 && valoredad > 40 && valoredad <= 50 ) {
    pesometadegrasa = (0.63)*(GT) / (porcentajeH/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  } else if (iimc <= 18 && iimc >= 15 && valoredad > 50) {
    pesometadegrasa = (0.7)*(GT) / (porcentajeH/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
  }else if (iimc <= 20 && iimc >= 18 && valoredad <= 20  ) {
    pesometadegrasa = (0.3)*(GT) / (porcentajeH/100)
    pesoideal = (MCM) + (pesometadegrasa)
    alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
}else if (iimc <= 20 && iimc >= 18 && valoredad > 20 && valoredad <= 30 ) {
  pesometadegrasa = (0.36)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
}else if (iimc <= 20 && iimc >= 18 && valoredad > 30 && valoredad <= 40 ) {
  pesometadegrasa = (0.41)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
}else if (iimc <= 20 && iimc >= 18 && valoredad > 40 && valoredad <= 50 ) {
  pesometadegrasa = (0.46)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 20 && iimc >= 18 && valoredad > 50 ) {
  pesometadegrasa = (0.6)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad <= 20) {
  pesometadegrasa = (0.15)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 20 && valoredad <= 30 ) {
  pesometadegrasa = (0.2)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 30 && valoredad <= 40 ) {
  pesometadegrasa = (0.24)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 40 && valoredad <= 50 ) {
  pesometadegrasa = (0.29)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 50 && valoredad <= 60 ) {
  pesometadegrasa = (0.355)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc <= 25 && iimc >= 20 && valoredad > 60 ) {
  pesometadegrasa = (0.445)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30 && valoredad > 20 && valoredad <= 40 ) {
  pesometadegrasa = (0.10)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30  && valoredad <= 20 ) {
  pesometadegrasa = (0.02)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30 && valoredad > 40 && valoredad <= 50 ) {
  pesometadegrasa = (0.18)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30 && valoredad > 50 && valoredad <= 60 ) {
  pesometadegrasa = (0.24)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 25 && iimc < 30 && valoredad > 60 ) {
  pesometadegrasa = (0.31)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg aprox.")
} else if (iimc > 30 && iimc < 35 && valoredad <= 40) {
  pesometadegrasa = (0.0000000000009)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 30 && iimc < 35 && valoredad > 40 && valoredad <= 50 ) {
  pesometadegrasa = (0.11)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 30 && iimc < 35 && valoredad > 50 && valoredad <= 60 ) {
  pesometadegrasa = (0.15)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 30 && iimc < 35 && valoredad > 60) {
  pesometadegrasa = (0.22)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40 && valoredad <= 20 ) {
  pesometadegrasa = (0.0000000000001)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40  && valoredad > 20 && valoredad <= 30) {
  pesometadegrasa = (0.03)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40  && valoredad > 30 && valoredad <= 40) {
  pesometadegrasa = (0.05)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40  && valoredad > 40 && valoredad <= 50) {
  pesometadegrasa = (0.07)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
}else if (iimc > 35 && iimc < 40  && valoredad > 50 && valoredad <= 60) {
  pesometadegrasa = (0.1)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 35 && iimc < 40  && valoredad > 60) {
  pesometadegrasa = (0.15)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40 && valoredad <= 30) {
  pesometadegrasa = (0.0000000000001)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40  && valoredad > 30 && valoredad <= 40) {
  pesometadegrasa = (0.011)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40  && valoredad > 40 && valoredad <= 50) {
  pesometadegrasa = (0.018)*(GT) / (porcentajeH/100)
 

if (iimc >= 20 && iimc<=25){
  alert ("Esta en un buen rango de peso, mantengase en un peso cercano al que esta ahorita")
} else if (valorpeso > pesoideal && iimc > 25) {
pesoabajar= valorpeso-pesoideal
alert ("Usted debera bajar: " + pesoabajar + " kg aprox.")
} else if (pesoideal > valorpeso && iimc < 25) {
  pesoasubir = pesoideal - valorpeso
  alert ("Usted debera subir: "+ pesoasubir + " kg aprox.")
} pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40  && valoredad > 50 && valoredad <= 60) {
  pesometadegrasa = (0.1)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
} else if (iimc > 40  && valoredad > 60) {
  pesometadegrasa = (0.15)*(GT) / (porcentajeH/100)
  pesoideal = (MCM) + (pesometadegrasa)
  alert ("tu peso ideal es de: " + pesoideal + " kg")
}


if (iimc >= 20 && iimc<=25){
  alert ("Esta en un buen rango de peso, mantengase en un peso cercano al que esta ahorita",'success')
} else if (valorpeso > pesoideal && iimc > 25) {
pesoabajar= valorpeso-pesoideal
alert ("Usted debera bajar: " + pesoabajar + " kg aprox.")
} else if (pesoideal > valorpeso && iimc < 25) {
  pesoasubir = pesoideal - valorpeso
  alert ("Usted debera subir: "+ pesoasubir + " kg aprox.")
}
}

// HEADER

