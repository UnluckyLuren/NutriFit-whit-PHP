//  Declaraciones

const containerPrincipal =document.getElementById('displayPreparation'),
    linkPreparation = document.querySelectorAll('.openInformation'),
    closePreparation = document.getElementById('closePreparation'),
    container = document.getElementById('container'),
    linkBebidas = document.getElementById('linkBebidas');

    const titleJugo = document.getElementById('imgChangeTitle'),
          titleSmotthie = document.getElementById('titleBebRep'),
          mostrarVideo = document.getElementById('videoPreparation'),
          containerVideoIngredientes = document.getElementById('containerVideoIngredientes'),
          containerPreparation = document.getElementById('containerPreparation');

  
// Funciones 


const divCreation = () => {

    containerPrincipal.style.display="none";
    closePreparation.style.display="inline"

    
    containerPreparation.style.display="flex";
    containerVideoIngredientes.classList.remove('disNone');
    titlePreparation.style.marginRight="0";

}



// Eventos

    // Cerrar preparación
closePreparation.addEventListener('click', () => {
  
    containerPrincipal.style.display="flex";
    closePreparation.style.display="none";
    containerPreparation.style.display="none";
    containerVideoIngredientes.classList.add('disNone');

});

// Textos

const listIngredientes = document.getElementById('listIngredientes'),
      textPreparation = document.getElementById('textPreparation'),
      imgReceta = document.getElementById('imgReceta'),
      nameReceta = document.getElementById('nameReceta'),
      titlePreparation = document.getElementById('titlePreparation');

      
const ingredientesLi = document.querySelectorAll('.ingredientesLi');

// Hulk

linkPreparation[0].addEventListener('click', () => {
  
      divCreation();

      nameReceta.textContent="Palitos de Zanahoria y Apio, un Snack Ligero";

      ingredientesLi[0].textContent = "• 1 zanahoria";
      ingredientesLi[1].textContent = "• 3 ramas de apio";
      ingredientesLi[2].textContent = " ";
      ingredientesLi[3].textContent = " ";
      ingredientesLi[4].textContent = " ";

      textPreparation.innerHTML = `
        <pre>
• Paso 1: Lava y pela muy 
bien las verduras y córtalas 
en bastones
      
• Paso 2: Podrás acompañarlas 
con una salsa de queso azul 
o limón según tu gusto.
        </pre>
      `;

      imgReceta.src = "https://blog.rappi.com/wp-content/uploads/2016/11/5-snacks-saludables-y-deliciosos-para-que-tu-pareja-baje-la-pancita3.jpg";
});

    // Tarta de manzana

linkPreparation[1].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Uvas congeladas";

  ingredientesLi[0].textContent = "• Uvas";
  ingredientesLi[1].textContent = " ";
  ingredientesLi[2].textContent = " ";
  ingredientesLi[3].textContent = " ";
  ingredientesLi[4].textContent = " ";
  ingredientesLi[5].textContent = " ";

  textPreparation.innerHTML = `
    <pre>
• Paso 1: Solo elije las uvas 
de tu preferencia. 

• Paso 2: Lávalas muy bien.
        
• Paso 3: Ponlas a congelar.

• Paso 4: Si decea acompañar 
con algo añada yogurt narural,
almendar y granola para 
degustar este platillo
    </pre>
  `;

  imgReceta.src = "https://blog.rappi.com/wp-content/uploads/2016/11/shutterstock_479813263-1080x718.jpg";
    
});

    //  Gansito

linkPreparation[2].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Palomitas de Maíz, un Snack Salado Bajo en Calorías";

  ingredientesLi[0].textContent = "• Media taza de maíz pira";
  ingredientesLi[1].textContent = "• Aceite";
  ingredientesLi[2].textContent = "• Sal";
  ingredientesLi[3].textContent = " ";
  ingredientesLi[4].textContent = " ";
  ingredientesLi[5].textContent = " ";

  textPreparation.innerHTML = `
    <pre>
• Paso 1: En una olla con tapa 
a fuego medio, agrega una 
cucharadita de aceite y el maíz. 

• Paso 2: Agita la olla 
periódicamente hasta que el maíz 
comienza a reventar y retira del 
fuego cuando escuches estallar menos 
de 3 crispetas en un intervalo de 10 
segundos. 

• Paso 3: Rocía con sal y disfruta.
    </pre>
  `;

  imgReceta.src = "https://blog.rappi.com/wp-content/uploads/2016/11/5-snacks-saludables-y-deliciosos-para-que-tu-pareja-baje-la-pancita.jpg";

});

    //  Crepas

linkPreparation[3].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Chips de Pepino al Horno, una Opción Saludable";

  ingredientesLi[0].textContent = "• 1 y 1/2 pepino o zucchini";
  ingredientesLi[1].textContent = "• 1 cucharadita de vinagre de manzana";
  ingredientesLi[2].textContent = "• 1/4 de cucharadita de sal";
  ingredientesLi[3].textContent = " ";
  ingredientesLi[4].textContent = " ";
  ingredientesLi[5].textContent = " ";

  textPreparation.innerHTML = `
    <pre>
• Paso 1: Pela el pepino y córtalo 
en rodajas bien finas, luego 
pásalos por la mezcla del vinagre 
con sal y déjalos reposar.

• Paso 2: Escurre un poco los 
pepinos y ponlos en un recipiente 
resistente al calor.

• Paso 3: Lleva al horno a 100 
grados centígrados por 5 minutos 
y prepárate para disfrutar.

    </pre>
  `;

  imgReceta.src = "https://blog.rappi.com/wp-content/uploads/2016/11/como-hacer-chips-de-pepino-1.jpg";
        

});

    //  Flan

    linkPreparation[4].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Parfait con Granola y Frutas";
    
      ingredientesLi[0].textContent = "• 80 gramos de yogourt griego";
      ingredientesLi[1].textContent = "• 4 cucharadas de granola";
      ingredientesLi[2].textContent = "• 2 frutas de tu elección picadas en cuadritos";
      ingredientesLi[3].textContent = " ";
      ingredientesLi[4].textContent = " ";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: En un recipiente 
mezcla todos los ingredientes 
y disfruta de tu snack saludable.

        </pre>
      `;
    
      imgReceta.src = "https://blog.rappi.com/wp-content/uploads/2016/11/shutterstock_313523975-1080x720.jpg";

});

    // Mermelada


    linkPreparation[5].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Sandwich de Mantequilla de Maní";
    
      ingredientesLi[0].textContent = "• 3 tostadas de arroz";
      ingredientesLi[1].textContent = "• 3 cucharadas de mantequilla de maní";
      ingredientesLi[2].textContent = "• 3 cucharadas de mermelada";
      ingredientesLi[3].textContent = "• Leche";
      ingredientesLi[4].textContent = " ";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Ayudándote de un 
cuchillo, esparce la mantequilla 
de maní sobre las tostadas de arroz.
     
• Paso 2: Apílalas en forma de sándúche.

• Paso 3: Disfruta esta preparación 
con un vaso de leche fría.
        </pre>
      `;
    
      imgReceta.src = "https://blog.rappi.com/wp-content/uploads/2016/11/unnamed.png";

    });

    // Mamut


    linkPreparation[6].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Brochetas Gourmet con Queso de Cabra";
    
      ingredientesLi[0].textContent = "• Rodajas de pan baguette tostadas";
      ingredientesLi[1].textContent = "• Queso de cabra";
      ingredientesLi[2].textContent = "• Tomates cherry partidos por la mitad";
      ingredientesLi[3].textContent = "• Fresas partidas en cubitos";
      ingredientesLi[4].textContent = " ";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Sobre las rodajas de 
pan tostado, esparce el queso 
de cabra y luego coloca encima 
las fresas y los tomates al gusto

• Paso 2: Podrás decorar tus 
brochetas con albahaca, le irá 
muy bien a tu preparación.

        </pre>
      `;
    
      imgReceta.src = "https://blog.rappi.com/wp-content/uploads/2016/11/unnamed-3.png";
    
    });

    // Red velvet pancakes


    linkPreparation[7].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Manzanas Deshidratadas";
    
      ingredientesLi[0].textContent = "• 2 manzanas rojas";
      ingredientesLi[1].textContent = "• Media taza de zumo natural de manzana";
      ingredientesLi[2].textContent = "• Una cucharadita de canela";
      ingredientesLi[3].textContent = " ";
      ingredientesLi[4].textContent = " ";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Corta las manzanas en 
finas rodajas y déjalas remojar 
por 15 minutos en un bowl con el 
zumo de manzana y la canela, 
mientras tanto, precalienta el 
horno a 180 grados centígrados.

• Paso 2: Utiliza una bandeja y 
fórrala con papel encerado para 
evitar que tus manzanas se peguen.

• Paso 3: Deja hornear tu 
preparación unos 25 minutos, 
revisando que no se quemen en el 
proceso se secado.

• Paso 4: Retira del horno, deja 
enfriar y tu snack estará listo 
para comerse.
        </pre>
      `;
    
      imgReceta.src = "https://blog.rappi.com/wp-content/uploads/2016/11/unnamed-2.png";
  
    });

    // Pay de platano


    linkPreparation[8].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Proteína a Base de Garbazos";
    
      ingredientesLi[0].textContent = "• 1 lata de garbanzos";
      ingredientesLi[1].textContent = "• 2 dientes de ajo";
      ingredientesLi[2].textContent = "• Media taza de aceite de oliva";
      ingredientesLi[3].textContent = "• Zumo de limón al gusto";
      ingredientesLi[4].textContent = "• Sal y pimienta al gusto";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Escurre los garbanzos 
y agrégalos con los demás 
ingredientes a la licuadora y 
bate hasta que se forme una 
pasta cremosa.
    
• Paso 2: Prueba la preparación 
y agrega más sal, pimienta o 
limón al gusto.

• Paso 3: Acompaña con unas 
galletas saladas

        </pre>
      `;
    
      imgReceta.src = "https://www.cromos.hn/wp-content/uploads/2021/06/hummus.jpg";
        
    });

    //  Pay de limon


    linkPreparation[9].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Croquetas de Choclo";
    
      ingredientesLi[0].textContent = "• ¼ taza de harina";
      ingredientesLi[1].textContent = "• 2 choclos enteros";
      ingredientesLi[2].textContent = "• 1 cucharada de ajo picado";
      ingredientesLi[3].textContent = "• 1 huevo revuelto";
      ingredientesLi[4].textContent = "• Medio pimiento verde picado";
      ingredientesLi[5].textContent = "• 1 cucharada de cilantro picado";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Primero, cocina 
los choclos .

• Paso 2: Después, separa los 
granitos y mézclalos en un 
recipiente con el pimiento, el 
ajo, el cilantro y la cebolla.

• Paso 3: Finalmente, añade el 
huevo y la harina y sazona. 
¡Y listo!

    </pre>
      `;
    
      imgReceta.src = "https://mejorconsalud.as.com/wp-content/uploads/2015/09/croquetas.jpg?auto=webp&quality=45&width=1920&crop=16:9,smart,safe";
        
    });

    // Negrito saludable


    linkPreparation[10].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Quesadillas con Queso y Cebolla";
    
      ingredientesLi[0].textContent = "• Tortitas de trigo o pan de pita";
      ingredientesLi[1].textContent = "• 6 cucharadas de queso crema";
      ingredientesLi[2].textContent = "• 1 pimiento asado";
      ingredientesLi[3].textContent = "• 1 mango";
      ingredientesLi[4].textContent = "• ¼ cebolla morada";
      ingredientesLi[5].textContent = "• Cilantro";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Primero, asa el 
pimiento y córtalo en rodajas.

• Paso 2: Después, esparce el 
queso crema en las cuatro 
tortillas.

• Paso 3: Más tarde, añade el 
mango cortado en cubitos, la 
cebolla morada en rodajas y el 
cilantro.

• Paso 4: Finalmente, cubre 
con otra tortilla para que 
quede como un sandwich.
        </pre>
      `;
    
      imgReceta.src = "https://mejorconsalud.as.com/wp-content/uploads/2018/05/quesadillas-queso-tortita.jpg?auto=webp&quality=45&width=1920&crop=16:9,smart,safe";

    });

    // Chees cake de mango


    linkPreparation[11].addEventListener('click', () => {

      divCreation();
      titlePreparation.style.marginRight="-5em";

      nameReceta.textContent="Bagel Vegetariano";
    
      ingredientesLi[0].textContent = "• 1 rebanada de queso";
      ingredientesLi[1].textContent = "• 2 cucharadas de queso crema";
      ingredientesLi[2].textContent = "• 4 rodajas de tomate";
      ingredientesLi[3].textContent = "• 8 rebanadas de pepino";
      ingredientesLi[4].textContent = "• Germinado de alfalfa o brotes de soja";
      ingredientesLi[5].textContent = "• Sal y pimienta";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: En primer lugar, 
tuesta el pan bagel. 
    
• Paso 2: Luego, esparce el 
queso crema en él. También 
puedes sustituir el queso 
crema por mostaza.
    
• Paso 3: Después, añade la 
rebanada de queso, los pepinos 
y tomates.

• Paso 4: Por último, coloca 
el germinado de trigo o los 
brotes de soja.
        </pre>
      `;
    
      imgReceta.src = "https://mejorconsalud.as.com/wp-content/uploads/2015/08/sandwich-tostado.jpg?auto=webp&quality=45&width=1920&crop=16:9,smart,safe";
        
    });






