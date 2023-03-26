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

      nameReceta.textContent="Pollo a la Planca con Lima";

      ingredientesLi[0].textContent = "• 4 filetes de pechuga de pollo";
      ingredientesLi[1].textContent = "• 2 dientes de ajo";
      ingredientesLi[2].textContent = "• 50 g de germinados de alfalfa (opcional)";
      ingredientesLi[3].textContent = "• Unas hojas de ensalada variada";
      ingredientesLi[4].textContent = "• Sal, Pimienta negra, aceite de oliva";

      textPreparation.innerHTML = `
        <pre>
- Limpia las pechugas, lávalas, 
sécalas y córtalas en trozos. 
Pela los dientes de ajo y pártelos 
por la mitad. 
      
- Mezcla el vinagre con el aceite, 
el ajo, el zumo de 1 lima y pimienta.
Añade el pollo y deja macerar 30 
minutos. Lava las limas restantes 
y trocéalas.
      
- Escurre el pollo, sazónalo y ásalo 
en una plancha, con las limas, durante 
5 minutos; dale la vuelta para que se dore 
por igual. 

-Completa, si quieres, con los germinados
enjuagados y escurridos, y sirve.
        </pre>
      `;

      imgReceta.src = "https://www.elmueble.com/medio/2022/12/14/pollo-a-la-plancha-con-lima_00000000_221214135618_943x1200.jpg";
});

    // Tarta de manzana

linkPreparation[1].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Tomate de Ventresta de Atun";

  ingredientesLi[0].textContent = "• 400 g de tomates maduros y carnosos";
  ingredientesLi[1].textContent = "• 200 g de ventresca de atún en aceite de oliva";
  ingredientesLi[2].textContent = "• 100 g de cebolleta";
  ingredientesLi[3].textContent = "• 100 g de aceitunas negras sin hueso";
  ingredientesLi[4].textContent = "• Sal en escamas";
  ingredientesLi[5].textContent = "• 100 ml de aceite de oliva";

  textPreparation.innerHTML = `
    <pre>
• Paso 1. Primero lava los tomates, 
sécalos con papel de cocina y 
córtalos en rodajas. Limpia la 
cebolleta, lávala y córtala en plumas.

• Paso 2. Seguidamente, retira la 
ventresca del envase, con cuidado para 
que no se rompa y queden las láminas 
enteras. Resérvalas en un plato.
        
• Paso 3. Monta la ensalada: cubre 
los platos con las rodajas de tomate, 
pon encima las plumas de cebolleta y, 
sobre estas, las láminas de ventresca. 
Alíñala con el aceite y espolvoréala con 
la sal en escamas.
  </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2022/12/14/tomate-con-ventresca-de-atun_00000000_221214135646_971x1200.jpg";
    
});

    //  Gansito

linkPreparation[2].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Mini Pizzas de Verduras";

  ingredientesLi[0].textContent = "• 150 g de masa de pizza";
  ingredientesLi[1].textContent = "• Hierbas provenzales";
  ingredientesLi[2].textContent = "• Tomate frito";
  ingredientesLi[3].textContent = "• Mozzarella";
  ingredientesLi[4].textContent = "• Anchoas y Berenjena";
  ingredientesLi[5].textContent = "• ajo, Aceitunas, Pimiento";

  textPreparation.innerHTML = `
    <pre>
• Paso 1. Divide la masa en 8 
partes y dales forma redonda.
    
• Paso 2. Limpia las verduras 
y pártelas en dados. Pela y pica 
el ajo. Coloca la pasta sobre la 
placa, úntala con salsa de tomate 
y reparte dados de mozzarella, de 
pimiento, de berenjena, aceitunas, 
el ajo, las anchoas troceadas y 
espolvorea con hierbas.

• Paso 3. Hornea las pizzas a 
240°, 12 minutos. Sírvelas bien 
calientes.
    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2022/12/14/minipizzas-de-verduras_00000000_221214135744_901x1201.jpg";

});

    //  Crepas

linkPreparation[3].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Sopa de Tomate y Frutas Rojas";

  ingredientesLi[0].textContent = "• 700 g de tomates cereza";
  ingredientesLi[1].textContent = "• 250 g de frutas rojas";
  ingredientesLi[2].textContent = "• Ajo y pasta brick";
  ingredientesLi[3].textContent = "• Hojas de albahaca";
  ingredientesLi[4].textContent = "• Vinagre de Módena";
  ingredientesLi[5].textContent = "• Aceite de oliva y Sal";

  textPreparation.innerHTML = `
    <pre>
• Paso 1. Lava los tomates y 
córtalos por la mitad. Lava y 
seca también las frutas rojas. 
Pela el diente de ajo. Lava y seca 
unas hojas de albahaca. Dispón todos 
estos ingredientes en el vaso de la 
batidora, añade una pizca de sal, 2 
cucharadas de vinagre y 50 ml 
de aceite.

• Paso 2. Tritura la mezcla hasta 
obtener una preparación uniforme. 
Pásala por un chino y guárdala en la 
nevera. Tritura unas hojas de albahaca 
junto con 50 ml de aceite y reserva.

• Paso 3. Corta la pasta brick en 
tiras regulares. Enróllalas y disponlas 
en una bandeja de horno forrada con papel 
sulfurizado. Precalienta el horno a 180º 
y cuece 2 minutos, hasta que estén 
doradas. Sirve la sopa fría en cuencos. 
    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2022/12/14/sopa-de-tomates-y-frutas-rojas_00000000_230228153418_800x1200.jpg";
        

});

    //  Flan

    linkPreparation[4].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Ensalada de camarones al balsámico";
    
      ingredientesLi[0].textContent = "• 400 g de camarón mediano, pelado y crudo";
      ingredientesLi[1].textContent = "• 2 cdas. de Oli Aceite de Oliva";
      ingredientesLi[2].textContent = "• 1 diente de ajo picado";
      ingredientesLi[3].textContent = "• 1 cda. de vinagre balsámico de Módena";
      ingredientesLi[4].textContent = "• ¼ taza de almendras laminadas tostadas  ";
      ingredientesLi[5].textContent = "• ½ taza de queso de cabra desmoronado";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Para hacer la reducción del 
balsámico, coloca los ingredientes en 
una olla y calienta hasta que hiervan, 
baja el fuego y cocina hasta que 
espese, esto puede tomar 10 minutos

• Paso 2: En una sartén, agrega Oli 
Aceite de Oliva® y los camarones, junto 
con el resto de los ingredientes, mezcla 
y cocina hasta que tomen su color 
naranja habitual.

• Paso 3: Para servir la ensalada, 
mezcla con las hojas de lechuga, los 
camarones, las fresas y el queso, sirve 
con la reducción de balsámico.

        </pre>
      `;
    
      imgReceta.src = "https://oliofino.com/wp-content/uploads/2016/03/Balsamic-Shrimp-Salad-2-from-willcookforsmiles.com_.jpg";

});

    // Mermelada


    linkPreparation[5].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Brochetas de champiñones";
    
      ingredientesLi[0].textContent = "• 3 tazas de hongos crimini cortados por la mitad";
      ingredientesLi[1].textContent = "• ¼ taza de vinagre balsámico de Módena";
      ingredientesLi[2].textContent = "• 2 cdas. de perejil picado";
      ingredientesLi[3].textContent = "• 3 cdas. de Oli Aceite de Oliva";
      ingredientesLi[4].textContent = "• 2-3 ajos picados";
      ingredientesLi[5].textContent = "• Sal y pimienta";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: En un tazón mezcla el 
vinagre balsámico, Oli Aceite de 
Oliva®, sal y pimienta, añade 
los champiñon
     
• Paso 2: Remoja los palitos de 
brocheta en agua para evitar que 
se quemen.ones limpios, y deja marinar.

• Paso 3: Arma las brochetas y cocina 
en una parrilla u horno, una vez 
listas espolvorea con el perejil picado.
        </pre>
      `;
    
      imgReceta.src = "https://www.nutrioli.com/wp-content/uploads/2023/02/Paso-3-f.jpg";

    });

    // Mamut


    linkPreparation[6].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Ensalada Mediterránea";
    
      ingredientesLi[0].textContent = "• ½ taza de queso de cabra";
      ingredientesLi[1].textContent = "• 1 taza de aceitunas negras sin semillas";
      ingredientesLi[2].textContent = "• ½ taza de jitomates cherry partidos por la mitad";
      ingredientesLi[3].textContent = "• ¼ de taza de Oli Extra Virgen";
      ingredientesLi[4].textContent = "• 3 cdas. de vinagre balsámico de Módena";
      ingredientesLi[5].textContent = "• 1 cda. de orégano seco molido";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Coloca todos los 
ingredientes en una ensaladera, 
vierte aceite Extra Virgen. y el 
vinagre balsámico de Módena por encima.
     
• Paso 2: Sazona con sal, 
pimienta y el orégano.

• Paso 3: Mezcla todo y sirve
        </pre>
      `;
    
      imgReceta.src = "https://www.nutrioli.com/wp-content/uploads/2023/02/Paso-3b.jpg";
    
    });

    // Red velvet pancakes


    linkPreparation[7].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Dip de oliva extra virgen con hierbas y balsámico de Módena";
    
      ingredientesLi[0].textContent = "• 1 taza de Oli Extra Virgen";
      ingredientesLi[1].textContent = "• ½ cdta. de pimienta roja Cayena en hojuelas";
      ingredientesLi[2].textContent = "• 3 cdtas. de romero fresco picado";
      ingredientesLi[3].textContent = "• 1 barra de pan baguette rebanado";
      ingredientesLi[4].textContent = "• 1 cdta. de perejil fresco picado";
      ingredientesLi[5].textContent = "• 6 cdas de vinagre balsámico de Módena";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Coloca las hierbas en 
un recipiente y añade Oli Extra Virgen
     
• Paso 2: Sazona con sal y pimienta, 
deja reposar

• Paso 3: Añade el vinagre balsámico 
de Módena. Sirve a un lado el pan rebanado
        </pre>
      `;
    
      imgReceta.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDHPfGiI7i187DbXIe_Xl24bqv6RThWfw9f833Ar6nEXtQqlRkzQjfBkBcvlyvlWESaac&usqp=CAU";
  
    });

    // Pay de platano


    linkPreparation[8].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Coles de Bruselas crujientes con alioli de Dijon";
    
      ingredientesLi[0].textContent = "• ¼ taza de Yogurt Griego Natural";
      ingredientesLi[1].textContent = "• 1½ cucharadas de mostaza dijón";
      ingredientesLi[2].textContent = "• ½ cucharadita de perejil seco";
      ingredientesLi[3].textContent = "• ¼ de cucharadita de hojuelas de chile";
      ingredientesLi[4].textContent = "• ½ cucharadita de ajo en polvo";
      ingredientesLi[5].textContent = "• ½ kilo de coles de Bruselas, cortadas en mitades, cocidas al dente";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: En agua hirviendo con sal, cuece 
las coles de bruselas de 5 a 10 
minutos, escurre y reserva.
    
• Paso 2: En una sartén grande, agrega Oli 
Extra Virgen. y las coles de Bruselas, 
añade ajo en polvo, hojuelas de chile, 
sal y pimienta. Saltea a fuego bajo 
durante 10 minutos, mueve durante el 
proceso de cocción para que se doren 
uniformemente.

• Paso 3: Coloca el yogurt, la mostaza dijón, 
el ajo picado, sal y pimienta, Oli Extra 
Virgen y revuelve hasta homogeneizar. 
Para adornar puedes agregar el perejil 
seco y Oli Extra Virgen

        </pre>
      `;
    
      imgReceta.src = "https://keto-mojo.com/wp-content/uploads/2020/11/Roasted-Brussel-Sprouts-500x375.jpg";
        
    });

    //  Pay de limon


    linkPreparation[9].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Arroz Frito con Verduras y Pollo";
    
      ingredientesLi[0].textContent = "• 1 cucharada (1 chop) de aceite Nutrioli Antigoteo";
      ingredientesLi[1].textContent = "• Salsa de soya para sazonar";
      ingredientesLi[2].textContent = "• 4 tazas de arroz cocido para sushi";
      ingredientesLi[3].textContent = "• Media pechuga de pollo sin piel sin hueso, picada muy finito";
      ingredientesLi[4].textContent = "• 1 Cebolla, 2 zanahorias, 1 calabaza";
      ingredientesLi[5].textContent = "• ½ taza de chícharos precocidas";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Calienta un wok o 
sartén y haz chop con Nutrioli 
Antigoteo

• Paso 2: Fríe la cebolla y el ajo 
picado, cuando esté transparente añade 
el pollo y cocina por 5 minutos; 
retira del wok y en el mismo agrega la 
calabacitas, zanahorias picadas y 
chícharos, cocina por 3 minutos.

• Paso 3: Regresa el pollo al wok y 
añade el arroz cocido, cocina todo junto 
por 10 minutos mezclando con cuidado, 
sazona con la salsa de soya, retira del 
fuego y sirve.
        </pre>
      `;
    
      imgReceta.src = "https://www.nutrioli.com/wp-content/uploads/2017/02/L_NUT_49753.png";
        
    });

    // Negrito saludable


    linkPreparation[10].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Ensalada griega con pasta tortellini";
    
      ingredientesLi[0].textContent = "• 1 taza de jitomates cherry a la mitad.";
      ingredientesLi[1].textContent = "• 4 centros de alcachofa, cortados en cuartos";
      ingredientesLi[2].textContent = "• ½ taza de aceitunas negras rebanadas";
      ingredientesLi[3].textContent = "• ½ cebolla morada picada.";
      ingredientesLi[4].textContent = "• 1 pepino, ajo, albaca, tomillo";
      ingredientesLi[5].textContent = "• 400 g de pasta tortellini.";
    
      textPreparation.innerHTML = `
        <pre>
• Paso 1: Cuece los tortellinis en 
abundante agua con sal y una cucharada 
de aceite de Oliva Oli de Nutrioli® 
hasta que estén al dente. Escurre y reserve.

• Paso 2: Combina los ingredientes 
del aderezo en un frasco, tapa y 
agita vigorosamente.

• Paso 3: En un tazón mezcla los 
tortellinis, el jitomate, la cebolla, 
el pepino, los corazones de alcachofa, 
las aceitunas, el queso y la albahaca. 
Vierte sobre esto el aderezo y revuelve 
bien. Refrigera antes de servir.

        </pre>
      `;
    
      imgReceta.src = "https://www.nutrioli.com/wp-content/uploads/2019/12/Ensalada-griega-con-pasta-tortellini_2.jpg";

    });

    // Chees cake de mango


    linkPreparation[11].addEventListener('click', () => {

      divCreation();
      titlePreparation.style.marginRight="-5em";

      nameReceta.textContent="Ensalada de espinacas y kale con frambuesas, nueces y aguacate";
    
      ingredientesLi[0].textContent = "• 1 tazas de espinacas.";
      ingredientesLi[1].textContent = "• 1 taza de kale, 1 taza de fresas picadas.";
      ingredientesLi[2].textContent = "• 1 taza de blueberries, 1 taza de frambuesas o zarzamoras.";
      ingredientesLi[3].textContent = "• ¼ taza de almendras fileteadas.";
      ingredientesLi[4].textContent = "• ¼ taza de queso de cabra.";
      ingredientesLi[5].textContent = "• ¼ taza de queso de cabra.";
    
      textPreparation.innerHTML = `
        <pre>

• Paso 1: Vierte el aceite Nutrioli® 
sobre el kale y masajea con tus dedos

• Paso 2: Procesa todos los ingredientes 
en una licuadora hasta que tengan un aspecto 
terso. Vierte sobre la ensalada.

• Paso 3: Cuando esté suave coloca en un
tazón las fresas, el kale, los blueberries, 
las frambuesas, las almendras y el queso, 
revuelve bien, y sazona con la sal y la pimienta.
        
• Paso 4: Procesa todos los ingredientes 
en una licuadora hasta que tengan un 
aspecto terso. Vierte sobre la ensalada.  
        </pre>
      `;
    
      imgReceta.src = "https://www.nutrioli.com/wp-content/uploads/2019/08/ensalada-de-espinacas-y-kale-con-frambuesas-nueces-y-aguacate_1.jpg";
        
    });






