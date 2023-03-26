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
      ingredientesLi[3].textContent = "• 1 trocito de jengibre";
      ingredientesLi[4].textContent = "• Media taza de agua";

      textPreparation.innerHTML = `
        <pre>
• Paso 1: Pela las naranjas 
y saca alguna rodaja.
      
• Paso 2: Introduce todos 
los ingredientes en la batidora.
      
• Paso 3: Bate todo hasta 
obtener una textura homogénea y 
ya estará listo para consumir.

        </pre>
      `;

      imgReceta.src = "https://www.elmueble.com/medio/2020/07/17/crumble-de-manzana-00426667-o_02624b97_1200x1485.jpg";
});

    // Tarta de manzana

linkPreparation[1].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Muesli de Avena con Arandanos";

  ingredientesLi[0].textContent = "• 160 gramos de copos de avena gruesos";
  ingredientesLi[1].textContent = "• 1 manzana tipo Golden, 1 plátano, 1 pera";
  ingredientesLi[2].textContent = "• 500 ml de leche de coco (o yogur de soja)";
  ingredientesLi[3].textContent = "• 30 gramos de arándanos rojos deshidratados";
  ingredientesLi[4].textContent = "• 2 cucharaditas de concentrado de manzana";
  ingredientesLi[5].textContent = "• 30 gramos de nueces";

  textPreparation.innerHTML = `
    <pre>
• Paso 1: El día antes, cubre los 
copos con agua suficiente y déjalos 
en remojo durante toda la noche para 
que se reblandezcan.

• Paso 2: Cuando vayas a tomar este 
desayunos, pela la manzana y la pera, 
quita el corazón y córtalos en dados. 
Pela también el plátano y córtalo en 
rodajas. Pon toda la fruta en un bol 
y rocía con zumo de limón.

• Paso 3: Escurre los copos de avena 
y mézclalos con las nueces, los 
arándanos y la leche de coco.

• Paso 4: Sirve en boles con el 
concentrado de manzana.
    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2022/07/06/muesli-de-avena-con-arandanos_00000000_230215171304_900x1200.jpg";
    
});

    //  Gansito

linkPreparation[2].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Pudin de Semillas de Chia";

  ingredientesLi[0].textContent = "• Virutas de coco sin azúcar";
  ingredientesLi[1].textContent = "• 4 cucharadas de semillas de chía";
  ingredientesLi[2].textContent = "• ¾ de taza de bebida vegetal";
  ingredientesLi[3].textContent = "• Granola crudivegana casera o frutos secos";
  ingredientesLi[4].textContent = "• 1 cucharadita de canela";
  ingredientesLi[5].textContent = "• 1 pera, Canela, Sal marina sin refinar";

  textPreparation.innerHTML = `
    <pre>
• Paso 1: Hornea las peras de la 
base y el topping a 180 °C unos 35 
minutos con un poco de canela y una 
pizca de sal marina sin refinar.
   
• Paso 2: Bate la bebida vegetal con 
una de las peras, la cucharadita de 
canela y las semillas de chía. Deja 
reposar en la nevera toda la noche para 
que se forme el pudin.

• Paso 3: Por la mañana, haz capas en 
el recipiente donde se vaya a comer: pon 
primero la pera al horno, luego un poco de 
chía, un poco del topping, más chía y la 
última capa que sea topping.
    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2020/01/14/pudin-de-semillas-de-chia_00000000_230215171258_926x1200.jpg";

});

    //  Crepas

linkPreparation[3].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Compota de Manzana con Queso Fresco";

  ingredientesLi[0].textContent = "• 4 manzanas golden";
  ingredientesLi[1].textContent = "• 3 naranjas";
  ingredientesLi[2].textContent = "• 300 gramos de queso fresco batido ";
  ingredientesLi[3].textContent = "• 4 cucharadas de yogur natural desnatado";
  ingredientesLi[4].textContent = "• 1 cucharada de azúcar";
  ingredientesLi[5].textContent = "• Una pizca de canela en polvo";

  textPreparation.innerHTML = `
    <pre>
• Paso 1. Pela las manzanas, córtalas 
en cuartos, retírales el corazón y 
pártelas en gajos. Exprime las 
naranjas, vierte el zumo en un cazo 
y añade unas tiras de piel de 
naranja lavadas. Agrega las 
manzanas, tapa y deja cocer durante 
15 minutos hasta obtener una compota. 
Retírala y déjala enfriar.

• Paso 2. En un bol, echa el queso
con 100 ml de agua, el yogur y el 
azúcar. A continuación, con las 
varillas manuales, bate la mezcla 
hasta conseguir una crema espesa y de 
textura homogénea.

• Paso 3. Echa la compota en unos 
cuencos individuales. Cubre con 
crema de queso fresco, espolvorea 
con canela en polvo y sirve.

    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2022/07/06/compota-de-manzana-con-queso-fresco_00000000_230215171253_1200x1200.jpg";
        

});

    //  Flan

    linkPreparation[4].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Yogur Casero de Coco con Granada";
    
      ingredientesLi[0].textContent = "• Pulpar de 3 cocos jóvenes";
      ingredientesLi[1].textContent = "• 1 taza de agua de coco fresca, reservada de los cocos frescos";
      ingredientesLi[2].textContent = "• 1/8 de cucharadita de probióticos";
      ingredientesLi[3].textContent = "• 1 granada";
      ingredientesLi[4].textContent = "• 1 mango";
      ingredientesLi[5].textContent = "• Granola (Para acompañar)";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1. Pon la pulpa de coco en 
una batidora de vaso y bate a 
velocidad lenta añadiendo poco a 
poco el agua de coco hasta obtener 
una crema suave.

• Paso 2. Vierte la mezcla en un bol
de vidrio y añade los probióticos. 
Remueve con una cucharada y deja 
reposar 24 horas en un lugar 
seco y tibio donde no dé la luz
directa del sol o en la 
fermentadora. Cúbrelo con un 
paño de algodón limpio.

• Paso 3. A las 24 horas, reparte el 
yogur en 4 botecitos de vidrio con 
tapa y guarda en la nevera hasta la 
hora de consumir. Para decorar añade 
granada, unas tiras de mango y alguna 
semilla. 

        </pre>
      `;
    
      imgReceta.src = "https://www.elmueble.com/medio/2020/07/19/yogur-de-coco-00465571_5921006f_1200x1576.jpg";

});

    // Mermelada


    linkPreparation[5].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Sandwich de Tofu de Finas Hierbas";
    
      ingredientesLi[0].textContent = "• Tofu de finas hierbas";
      ingredientesLi[1].textContent = "• Yogur";
      ingredientesLi[2].textContent = "• Orejones de albaricoque";
      ingredientesLi[3].textContent = "• Pipas de calabaza";
      ingredientesLi[4].textContent = "• Rúcula";
      ingredientesLi[5].textContent = "• Pan de molde de espelta";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Unta un poco de yogur 
a modo de mantequilla en dos 
rebanadas de pan de molde de espelta
     
• Paso 2: Rellena el bocadillo 
con tofu de finas hierbas, mezclado 
con orejones de albaricoque, pipas 
de calabaza y rúcula.

        </pre>
      `;
    
      imgReceta.src = "https://www.elmueble.com/medio/2020/01/14/sandwich-de-tofu-de-finas-hierbas_00000000_230215171311_900x1200.jpg";

    });

    // Mamut


    linkPreparation[6].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Yogur con Base de Anacardos";
    
      ingredientesLi[0].textContent = "• 2,5 tazas de anacardos, activar durante 8 horas y lavar";
      ingredientesLi[1].textContent = "• 1 taza de rejuvelac o germinado de trigo";
      ingredientesLi[2].textContent = "• El zumo de un limón";
      ingredientesLi[3].textContent = "• ¼ de cucharadita de sal marina o del Himalaya";
      ingredientesLi[4].textContent = "• Almendas";
      ingredientesLi[5].textContent = "• Granola";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1. Introduce todos los 
ingredientes en una batidora de 
vaso y bate hasta obtener una 
textura suave y cremosa.

• Paso 2. Coloca esta mezcla en un 
bol de vidrio y deja reposar durante 
24 horas en un lugar seco y tibio en 
la cocina donde no dé la luz directa 
del sol o en la fermentadora. Durante 
este tiempo, déjalo cubierto con un 
paño de algodón limpio.

• Paso 3. Pasadas las 24 horas, 
reparte el yogur en 4 botecitos de 
vidrio con tapa y guarda en la nevera 
hasta el momento en que lo vayas a 
consumir.
        </pre>
      `;
    
      imgReceta.src = "https://www.elmueble.com/medio/2020/07/19/yogur-de-anarcardos-00465572_1aa5f38b_1200x1645.jpg";
    
    });

    // Red velvet pancakes


    linkPreparation[7].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Bolitas de Kiwi y Queso Fresco con Chocolate";
    
      ingredientesLi[0].textContent = "• 4 kiwis";
      ingredientesLi[1].textContent = "• 250 gramos de queso de Burgos";
      ingredientesLi[2].textContent = "• 75 gramos de chocolate fondant";
      ingredientesLi[3].textContent = "• 1 nuez de mantequilla";
      ingredientesLi[4].textContent = "• 50 ml de nata líquida";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Limpia los kiwis y 
escurre el queso. Con ayuda de 
una cucharilla vaciadora, saca 
todas las bolas que puedas de 
ambos y resérvalas.

• Paso 2: En un cazo al fuego 
con el chocolate y la mantequilla 
y caliéntalo a fuego lento. 
Cuando el chocolate se haya fundido, 
agrega poco a poco la nata mientras 
remueves con unas varillas. Una vez 
esté bien ligada la mezcla, y sin 
dejar de remover, deja que cueza 
durante unos segundos.

• Paso 3: Reparte las bolas de 
queso y kiwi en vasitos individuales. 
Riégalas con la crema de chocolate 
y sírvelas.

        </pre>
      `;
    
      imgReceta.src = "https://www.elmueble.com/medio/2022/07/06/bolitas-de-kiwi-y-queso-fresco-con-chocolate_00000000_230215171349_1200x1200.jpg";
  
    });

    // Pay de platano


    linkPreparation[8].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Galletas de Chocolate";
    
      ingredientesLi[0].textContent = "• 200 gramos de trigo sarraceno";
      ingredientesLi[1].textContent = "• 100 gramos de pipas de girasol";
      ingredientesLi[2].textContent = "• 1 cucharada de granos de café en polvo";
      ingredientesLi[3].textContent = "• semillas de cacao troceadas";
      ingredientesLi[4].textContent = "• 3 cucharadas de azúcar de coco";
      ingredientesLi[5].textContent = "• semillas de cacao troceadas";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Cuela y lava el trigo 
sarraceno y las pipas. Tritúralos 
con el resto de ingredientes, salvo 
el cacao, hasta obtener una masa 
untable.
    
• Paso 2: En las bandejas del 
deshidratador, sobre papel de horno 
o una hoja de teflex, moldea con un c
ortante de forma circular. Dales un 
grosor de 2 cm y decora con el cacao 
troceado.

• Paso 3: Deshidrata las galletas a 
45 °C durante unas 6 horas, voltéalas
y deshidrata otras 8 horas, hasta que
queden bien crujientes. 

        </pre>
      `;
    
      imgReceta.src = "https://www.elmueble.com/medio/2020/07/19/galletas-00456222_13b4a573_1200x1528.jpg";
        
    });

    //  Pay de limon


    linkPreparation[9].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Smoothy Antioxidante";
    
      ingredientesLi[0].textContent = "• 1 dátil";
      ingredientesLi[1].textContent = "• 100 gramos de frutos del bosque (frescos o congelados)";
      ingredientesLi[2].textContent = "• 30 ml de leche de coco";
      ingredientesLi[3].textContent = "• 1/4 de taza de hielo";
      ingredientesLi[4].textContent = "• 30 gramos de granola";
      ingredientesLi[5].textContent = "• 1 cucharadita de pipas";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Pon el dátil en un bol 
pequeño y cubre con agua hirviendo. 
Deja 10 minutos en remojo.

• Paso 2: Escurre y ponlo en el 
vaso batidor. Añade los frutos 
del bosque

• Paso 3: Bate. Añade hielo y vuelve 
a batir hasta que quede una textura 
fina. Pon encima la granola y algunos 
frutos del bosque. Espolvorea con 
las pipas.
          
        </pre>
      `;
    
      imgReceta.src = "https://www.elmueble.com/medio/2020/01/14/smoothy-antioxidante_00000000_230215171422_1200x804.jpg";
        
    });

    // Negrito saludable


    linkPreparation[10].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Tostada de Tortilla y Salmon";
    
      ingredientesLi[0].textContent = "• 4 rebanadas de pan de hogaza";
      ingredientesLi[1].textContent = "• 1 tarrina de queso blanco para untar a las finas hierbas";
      ingredientesLi[2].textContent = "• 100 gramos de trucha ahumada";
      ingredientesLi[3].textContent = "• 4 huevos";
      ingredientesLi[4].textContent = "• Aceite de oliva, Sal";
      ingredientesLi[5].textContent = "• Unos tallos de cebollino";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1. Lava, seca y pica el 
cebollino. Corta el salmón 
ahumado en tiritas.

• Paso 2. Coloca las rebanadas 
de pan en el horno y tuesta un 
poco. Mientras, haz la tortilla 
que debe quedar dorada por fuera 
y jugosa por dentro.

• Paso 3. Repite la operación con 
el resto de los huevos hasta obtener 
cuatro tortillas.

• Paso 4. Unta las tostadas con el 
queso a las finas hierbas, y luego 
añade el salmón ahumado.

• Paso 5. Para terminar, espolvorea 
con el cebollino y, 
¡listo para desayunar!
        </pre>
      `;
    
      imgReceta.src = "https://www.elmueble.com/medio/2020/07/17/tostada-de-tortilla-y-salmon-00385908_531990d7_1200x1600.jpg";

    });

    // Chees cake de mango


    linkPreparation[11].addEventListener('click', () => {

      divCreation();
      titlePreparation.style.marginRight="-5em";

      nameReceta.textContent="Macedonia de Citricos con Salsa de Yogur";
    
      ingredientesLi[0].textContent = "• 1 naranja";
      ingredientesLi[1].textContent = "• 3 mandarinas";
      ingredientesLi[2].textContent = "• 1 pomelo";
      ingredientesLi[3].textContent = "• 2 yogures";
      ingredientesLi[4].textContent = "• 40 gramos de pistachos";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1. Pela la naranja eliminando 
toda la parte blanca y extrae los 
gajos. Hazles unos cortes con un 
cuchillo pequeño y afilado y retírales
la piel. Pela el pomelo y las 
mandarinas, extrae los gajos y pélalos 
utilizando la misma técnica que con la 
naranja.
    
• Paso 2. Pela los pistachos y pícalos. 
Vierte los yogures en un cuenco, añade 
la miel y remueve hasta que se integren.
    
• Paso 3. Reparte la macedonia en 
recipientes individuales, riega con un 
poco de yogur, espolvorea con parte de 
los pistachos y sirve. El yogur restante, 
sírvelo también, en un vasito aparte, 
espolvoreado con el pistacho que quede.
        </pre>
      `;
    
      imgReceta.src = "https://www.elmueble.com/medio/2020/01/14/macedonia-de-citricos-con-salsa-de-yogur_00000000_230215171454_1143x1080.jpg";
        
    });






