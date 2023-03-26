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

      nameReceta.textContent="Smoothie de Bayas de Goji";

      ingredientesLi[0].textContent = "• 2 naranjas";
      ingredientesLi[1].textContent = "• 1 trocito de raíz de cúrcuma (como una uña del dedo pulgar)";
      ingredientesLi[2].textContent = "• 3 cucharadas de bayas de goji";
      ingredientesLi[3].textContent = "• 1 trocito de jengibre (una uña del dedo pulgar, opcional)";
      ingredientesLi[4].textContent = "• Media taza de agua (más, si lo deseas más líquido)";

      textPreparation.innerHTML = `
        <pre>
• Paso 1: Pela las naranjas 
y saca alguna rodaja.
      
• Paso 2: Introduce todos l
os ingredientes en la batidora.
      
• Paso 3: Bate todo hasta 
obtener una textura homogénea 
y ya estará listo para consumir.

        </pre>
      `;

      imgReceta.src = "https://www.elmueble.com/medio/2020/07/17/smoothie-de-bayas-de-goji-00459130_b7d2a056_1200x1830.jpg";
});

    // Tarta de manzana

linkPreparation[1].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Yogur con Base de Anacardos";

  ingredientesLi[0].textContent = "• 2,5 tazas de anacardos, activar durante 8 horas y lavar";
  ingredientesLi[1].textContent = "• 1 taza de rejuvelac o germinado de trigo";
  ingredientesLi[2].textContent = "• El zumo de un limón";
  ingredientesLi[3].textContent = "• ¼ de cucharadita de sal marina o del Himalaya";
  ingredientesLi[4].textContent = " ";
  ingredientesLi[5].textContent = " ";

  textPreparation.innerHTML = `
    <pre>
• Paso 1: Introduce todos los 
ingredientes en una batidora de 
vaso y bate hasta obtener una 
textura suave y cremosa.

• Paso 2: Coloca esta mezcla en 
un bol de vidrio y deja reposar 
durante 24 horas en un lugar seco 
y tibio en la cocina donde no dé 
la luz directa del sol o en la 
fermentadora. Durante este tiempo, 
déjalo cubierto con un paño de 
algodón limpio.
        
• Paso 3: Pasadas las 24 horas, 
reparte el yogur en 4 botecitos de 
vidrio con tapa y guarda en la 
nevera hasta el momento en que lo 
vayas a consumir.
    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2020/07/19/yogur-de-anarcardos-00465572_1aa5f38b_1200x1645.jpg";
    
});

    //  Gansito

linkPreparation[2].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Smoothie de Acai";

  ingredientesLi[0].textContent = "• 1 plátano, 5 fresas";
  ingredientesLi[1].textContent = "• 4 cucharadas de açaí en polvo";
  ingredientesLi[2].textContent = "• Fresas y kiwis laminados";
  ingredientesLi[3].textContent = "• Semillas de cáñamo";
  ingredientesLi[4].textContent = "• Almendras laminadas";
  ingredientesLi[5].textContent = "• 120 ml de leche de almendra";

  textPreparation.innerHTML = `
    <pre>
• Paso 1: Bate todos los 
ingredientes del smoothie 
hasta que quede una masa 
homogénea.
    
• Paso 2: Reparte el batido 
en dos jarras y decóralo con 
los toppings.
    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2020/07/17/smoothie-de-acai-00439452_b8df7594_1200x1800.jpg";

});

    //  Crepas

linkPreparation[3].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Batido Verde de Uvas, Acelgas y Lechuga";

  ingredientesLi[0].textContent = "• 250 gramos de uvas rojas";
  ingredientesLi[1].textContent = "• 100 gramos de acelgas";
  ingredientesLi[2].textContent = "• 100 gramos de lechuga";
  ingredientesLi[3].textContent = "• 1 cucharada de semillas de lino";
  ingredientesLi[4].textContent = "• 1 cucharadita de cúrcuma y jengibre en polvo";
  ingredientesLi[5].textContent = "• 200 ml de agua filtrada o alcalina";

  textPreparation.innerHTML = `
    <pre>
• Paso 1. Bate juntos todos 
los ingredientes

• Paso 2. Ajusta la cantidad 
de agua si lo deseas más 
líquido y sirve.
    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2020/01/14/batido-verde-de-uvas-acelgas-y-lechuga_00000000_230215171434_938x1199.jpg";
        

});

    //  Flan

    linkPreparation[4].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Agua de manzana con canela";
    
      ingredientesLi[0].textContent = "• 1 manzana cortada en rebanadas";
      ingredientesLi[1].textContent = "• Dos varas cortas de canela";
      ingredientesLi[2].textContent = "• Un litro de agua";
      ingredientesLi[3].textContent = "• Canela";
      ingredientesLi[4].textContent = "• Un litro de agua";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Coloca las rebanadas 
de manzana en una jarra con agua, 
agrega dos varas de canela.

• Paso 2: Deja reposar en el 
refrigerador por una hora, 
sácala y sirve durante la comida 
o tómala a lo largo del día.
    </pre>
      `;
    
      imgReceta.src = "https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_1.jpg";

});

    // Mermelada


    linkPreparation[5].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Agua de mango con jengibre";
    
      ingredientesLi[0].textContent = "• 1 trozo de jengibre fresco (2 pulgadas)";
      ingredientesLi[1].textContent = "• ½ taza de mango en cubos";
      ingredientesLi[2].textContent = "• 1 litro de agua";
      ingredientesLi[3].textContent = " ";
      ingredientesLi[4].textContent = " ";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Corta en rebanadas el 
jengibre y ponlos junto con el 
mango picado en una jarra con agua.

• Paso 2: Dejar reposar en el 
refrigerador y déjalo ahí por una 
hora. 
     
• Paso 3: Disfruta de ella en 
cualquier momento del día.
        </pre>
      `;
    
      imgReceta.src = "https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_2.jpg";

    });

    // Mamut


    linkPreparation[6].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Agua de Frutos Rojos y Cítricos";
    
      ingredientesLi[0].textContent = "• 1 taza de frutos rojos congelados (fresas, frambuesas y moras)";
      ingredientesLi[1].textContent = "• ½ pieza de limón, naranja o lima en rebanadas";
      ingredientesLi[2].textContent = "• 1 litro de agua";
      ingredientesLi[3].textContent = " ";
      ingredientesLi[4].textContent = " ";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: En una jarra añade 
frutos rojos congelados, agua 
y rebanadas de limón, naranja 
o lima. 

• Paso 2: Dejar reposar en el 
refrigerador para que poco a 
poco los sabores se incorporen 
al agua. Así, tendrás una bebida 
fresca y nutritiva.

        </pre>
      `;
    
      imgReceta.src = "https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_3.jpg";
    
    });

    // Red velvet pancakes


    linkPreparation[7].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Agua de Avena";
    
      ingredientesLi[0].textContent = "• 1 taza de Avena Integral Granvita";
      ingredientesLi[1].textContent = "• ½ rama de canela";
      ingredientesLi[2].textContent = "• 2 cucharadas de miel";
      ingredientesLi[3].textContent = "• 1 litro de agua";
      ingredientesLi[4].textContent = " ";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Hierve la taza de avena 
junto con la rama de canela.

• Paso 2: Deja reposar y agrega 
la miel, luego cuela y enfría 
el líquido obtenido para disfrutar 
de todos los beneficios de la 
avena de forma refrescante.
    </pre>
      `;
    
      imgReceta.src = "https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_avena_4.jpg";
  
    });

    // Pay de platano


    linkPreparation[8].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Agua de Coco";
    
      ingredientesLi[0].textContent = "• 1 coco entero, de preferencia sin cáscara";
      ingredientesLi[1].textContent = "• ½ litro de agua";
      ingredientesLi[2].textContent = "• Miel al gusto";
      ingredientesLi[3].textContent = " ";
      ingredientesLi[4].textContent = " ";
      ingredientesLi[5].textContent = " ";

    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Realiza unos orificios 
al coco para sacarle el agua, 
viertela en un vaso y reserva. 
  
• Paso 2: Corta el coco a la mitad 
y extrae la carne, córtala en 
trozos y agrega a la licuadora 
junto con los líquidos. 

• Paso 3: Mezcla hasta obtener un 
líquido blanco que puedes endulzar 
con miel y al terminar, ponlo en 
una jarra con hielos o guarda 
en el refrigerador.
        </pre>
      `;
    
      imgReceta.src = "https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_4.jpg";
        
    });

    //  Pay de limon


    linkPreparation[9].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Jugo Verde con Jengibre";
    
      ingredientesLi[0].textContent = "• 3 tazas de espinaca baby";
      ingredientesLi[1].textContent = "• ½ pepino cortado en cubos";
      ingredientesLi[2].textContent = "• 1 taza de piña cortada en cubos";
      ingredientesLi[3].textContent = "• ½ litro de agua";
      ingredientesLi[4].textContent = "• 1 trozo de jengibre fresco";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: En una licuadora 
agrega todos los ingredientes 
mencionados y revuelve hasta 
conseguir una mezcla homogénea. 

• Recomendación : Prepararlo 
durante las mañanas para 
complementar tu desayuno.
          
        </pre>
      `;
    
      imgReceta.src = "https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_6.jpg";
        
    });

    // Negrito saludable


    linkPreparation[10].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Smoothie de Berries con Avena";
    
      ingredientesLi[0].textContent = "• 1 taza de frutos rojos";
      ingredientesLi[1].textContent = "• 2 vasos de Bebida de Avena Orgánica Granvita";
      ingredientesLi[2].textContent = "• 2 cucharada de Avena Integral Granvita";
      ingredientesLi[3].textContent = "• Un trozo de jengibre fresco en rebanadas";
      ingredientesLi[4].textContent = "• Miel de abeja o de agave al gusto";
      ingredientesLi[5].textContent = " ";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Con la ayuda de la 
licuadora, pon todos los 
ingredientes y mezcla. 

• Paso 2: Cuando quede lista, 
sirve en un vaso o tarro. 

• Dato: Esta receta puede 
sustituir a un desayuno 
completo gracias a la fibra 
y antioxidantes que posee.
 
        </pre>
      `;
    
      imgReceta.src = "https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_7.jpg";

    });

    // Chees cake de mango


    linkPreparation[11].addEventListener('click', () => {

      divCreation();
      titlePreparation.style.marginRight="-5em";

      nameReceta.textContent="Batido Detox de Pepino y Piña";
    
      ingredientesLi[0].textContent = "• 150 gramos de espinaca";
      ingredientesLi[1].textContent = "• 100 gramos de arándanos";
      ingredientesLi[2].textContent = "• 100 gramos de piña natural";
      ingredientesLi[3].textContent = "• 1 manzana, 1 pepino";
      ingredientesLi[4].textContent = "• 1 rama de apio";
      ingredientesLi[5].textContent = "• hojas de stevia";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Pela la remolacha 
y la zanahoria, las troceas 
y las pones en el vaso de la 
batidora junto con la manzana 
y los dátiles sin hueso.
    
• Paso 2: Bate durante varios 
minutos y añade la suficiente 
cantidad de agua para obtener 
la textura que te guste.
    
• Paso 3: Sirve y disfruta.
        </pre>
      `;
    
      imgReceta.src = "https://www.gastrolabweb.com/u/fotografias/fotosnoticias/2022/3/8/26621.jpg";
        
    });






