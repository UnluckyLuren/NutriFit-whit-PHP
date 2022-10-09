// function([string1, string2],target id,[color1,color2])    
Texto(['Querido usuario(a)', 'Sus datos fueron enviados a nuestra nutrióloga', 'La cual se encargará de evaluarlos y crear una dieta adecuada para sus características','El tiempo de envió es de 2 a 3 días a través de su correo electrónico.'], 'text',['tomato','rebeccapurple','lightblue']);

function Texto(palabras, id, colores) {
  if (colores === undefined) colores = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var numerodeletras = 1;
  var x = 1;
  var esperar = false;
  var objetivo = document.getElementById(id)
  objetivo.setAttribute('style', 'color:' + colores[1])
  window.setInterval(function() {

    if (numerodeletras === 0 && esperar === false) {
      esperar = true;
      objetivo.innerHTML = palabras[0].substring(0, numerodeletras)
      window.setTimeout(function() {
        var usedColor = colores.shift();
        colores.push(usedColor);
        var usedWord = palabras.shift();
        palabras.push(usedWord);
        x = 1;
        objetivo.setAttribute('style', 'color:' + colores[2])
        numerodeletras += x;
        esperar = false;
      }, 1000)
    } else if (numerodeletras === palabras[0].length + 1 && esperar === false) {
      esperar = true;
      window.setTimeout(function() {
        x = -1;
        numerodeletras += x;
        esperar = false;
      }, 1000)
    } else if (esperar === false) {
      objetivo.innerHTML = palabras[0].substring(0, numerodeletras)
      numerodeletras += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      con.className = 'console-underscore hidden'
      visible = false;

    } else {
      con.className = 'console-underscore'

      visible = true;
    }
  }, 400)
}