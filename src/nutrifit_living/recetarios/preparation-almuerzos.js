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

      nameReceta.textContent="Abanico de Calabacineso";

      ingredientesLi[0].textContent = "• 4 calabacines pequeños";
      ingredientesLi[1].textContent = "• 4 cucharadas de queso parmesano rallado";
      ingredientesLi[2].textContent = "• 2 cucharadas de aceite de oliva";
      ingredientesLi[3].textContent = "• Pimienta molida";
      ingredientesLi[4].textContent = "• Sal";

      textPreparation.innerHTML = `
        <pre>
- El texto indica mezclar aceitunas, 
alcaparras y anchoas escurridas con 
aceite en una batidora y triturarlos 
para obtener una pasta. 
      
- Gratinar los calabacines con 
queso en el horno durante 2 
minutos usando la función del 
grill, y sacarlos cuando el 
queso esté dorado.
      
- Emplata los calabacines en 4
platos llanos y agregale polvo
de pimienta
      
- Dispon de un poco de 
pasta de aceitunas
        </pre>
      `;

      imgReceta.src = "https://content-cocina.lecturas.com/medio/2018/07/19/abanico-de-calabacines-al-parmesano_97bd56be_800x800.jpg";
});

    // Tarta de manzana

linkPreparation[1].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Crema de Zanahoria";

  ingredientesLi[0].textContent = "• 1/2 kg de zanahorias";
  ingredientesLi[1].textContent = "• 1 cebolla";
  ingredientesLi[2].textContent = "• 60g de mantequilla";
  ingredientesLi[3].textContent = "• 1 cuchara de harina";
  ingredientesLi[4].textContent = "• sal, pimienta";
  ingredientesLi[5].textContent = "• 100ml de nata liquida";

  textPreparation.innerHTML = `
    <pre>
- Trosar las cebollas y sanahorias,
asarlas en la mantequilla por 2 min,
espolvorear con harina, vierte el 
caldo y cuele 10 min. 

- Trocea los piñones y mézclalos con 
el queso
        
- En la licuadora echa la verdura
con el caldo, nata y el jugo de naranja
y licua
        
- Servir y decora con los crujientes
de queso y piñones
    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2022/04/10/almuerzo-saludable-crema-de-zanahoria-00388402_d647e4db_901x1200.jpg";
    
});

    //  Gansito

linkPreparation[2].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Cestitas de Ensalada de Marisco";

  ingredientesLi[0].textContent = "• 12 obleas de empanadilla";
  ingredientesLi[1].textContent = "• 12 tomatitos";
  ingredientesLi[2].textContent = "• 12 mejillones";
  ingredientesLi[3].textContent = "• 12 surimis";
  ingredientesLi[4].textContent = "• Hojas de ensalada";
  ingredientesLi[5].textContent = "• Aceite y sal";

  textPreparation.innerHTML = `
    <pre>
- Pre caliente el horno a 180c, mete 
las obleas 15 min, esperar a que se 
enfrien
    
- Revolver las hojas de ensalada con 
el jitomatito, los mejillones, la 
gamba y los palitos de cangrejo

-  Aliña con aceite, sazona y remueve; 
reparte la ensalada en las cestitas y 
sírvelas enseguida para que no 
se ablanden.

    </pre>
  `;

  imgReceta.src = "https://www.elmueble.com/medio/2022/04/10/almuerzo-saludable-cestitas-de-ensalada-de-marisco-00490291_b779e54c_800x1200.jpg";

});

    //  Crepas

linkPreparation[3].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Ensalada de Atun Primor con Arroz Integral";

  ingredientesLi[0].textContent = "• 200 g de arroz integral cocido";
  ingredientesLi[1].textContent = "• 100 g de pimiento cortado en cubos";
  ingredientesLi[2].textContent = "• 8 aceitunas sin pepa";
  ingredientesLi[3].textContent = "• 300 g de tomates cortados en cubos chicos";
  ingredientesLi[4].textContent = "• 1 lata de atún Primor";
  ingredientesLi[5].textContent = "• 1 huevo duro";

  textPreparation.innerHTML = `
    <pre>
- En un tazón, echa el de arroz, el 
pimiento, las aceitunas, los tomates 
y el huevo duro picados.

- Agregar el atún Primor y mezcla.

- Coloca la mezcla en una ensaladera 
y refrigera hasta que llegue 
el momento de comer.

- Agregar la Vinagreta de Mostaza y 
Pimienta AlaCena a la mezcla del arroz.

- Haz una camita de lechuga, luego echa 
la mezcla del arroz con la vinagreta 
AlaCena y, por último, decorar con 
pedacitos de palta.
    </pre>
  `;

  imgReceta.src = "https://cdn7.kiwilimon.com/recetaimagen/38690/49716.jpg";
        

});

    //  Flan

    linkPreparation[4].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Canutos con pechuga de pavo Don Vittorio";
    
      ingredientesLi[0].textContent = "• 500 gr de Canuto chico Don Vittorio";
      ingredientesLi[1].textContent = "• ½ kg de pechuga de pavo trozada (500 gr)";
      ingredientesLi[2].textContent = "• 1/2 cebolla (75 gr)";
      ingredientesLi[3].textContent = "• 150 gr de brócoli";
      ingredientesLi[4].textContent = "• 3 dientes de ajo molidos (6 gr)";
      ingredientesLi[5].textContent = "• Sal, oregano";
    
      textPreparation.innerHTML = `
        <pre>
- Cocinar los canutos chicos Don 
Vittorio como indica el empaque.

- Cuando el aceite este Cuando esté 
caliente, agregar los ajos molidos 
y la cebolla picada finamente 
en cuadraditos.

-Darle una movidita y añadir el 
pavo y el brócoli previamente 
sancochados.

-Añadir una pizca de orégano en 
polvo y sofreír por 3 minutos, servir
los fideos y añadir los trosos de pavo
        </pre>
      `;
    
      imgReceta.src = "https://d36fw6y2wq3bat.cloudfront.net/recipes/pasta-cremosa-con-pollo-y-brocoli/900/pasta-cremosa-con-pollo-y-brocoli_version_1651568362.png";

});

    // Mermelada


    linkPreparation[5].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Ensalada de pollo a la mostaza y miel";
    
      ingredientesLi[0].textContent = "• 2 mandarinas (200 gr)";
      ingredientesLi[1].textContent = "• 2 tazas de mix de lechugas u otras a su gusto (360 gr)";
      ingredientesLi[2].textContent = "• 1/2 taza de apio picado (50 gr)";
      ingredientesLi[3].textContent = "• 1/2 cda de ajonjolí (7 gr)";
      ingredientesLi[4].textContent = "• 1 filete de pechuga (150 gr)";
      ingredientesLi[5].textContent = "• 2 cdas de miel de abeja (60 gr)";
    
      textPreparation.innerHTML = `
        <pre>
- Pelar y trozar la mandarina retirando 
las semillas. Lavar y secar las hojas 
de lechuga.
     
- Cocinar y cortar el filete de pechuga 
previamente salpimentado.

- Armar el plato de ensalada poniendo 
de cama las lechugas y el apio
        </pre>
      `;
    
      imgReceta.src = "https://www.cucinare.tv/wp-content/uploads/2018/10/18-09-27-Ensalada.jpg";

    });

    // Mamut


    linkPreparation[6].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Rica ensalada de atún";
    
      ingredientesLi[0].textContent = "• 3 latas de lomitos de atún en agua escurridas";
      ingredientesLi[1].textContent = "• 1 pimentón rojo mediano picado";
      ingredientesLi[2].textContent = "• 1/2 cebolla roja finamente picada";
      ingredientesLi[3].textContent = "• 1 pepino picado en cubitos";
      ingredientesLi[4].textContent = "• 1/4 taza de aceite de ajonjolí";
      ingredientesLi[5].textContent = "• El zumo de una lima";
    
      textPreparation.innerHTML = `
        <pre>
- En un bol grande, mezclar el atún, 
el pimentón, la cebolla y el pepino

- Agregar el aceite de sésamo y el 
jugo de lima en la parte superior y 
revolver para combinar todo

- Poner sal y pimienta al gusto, servir 
y adornar con semillas de sésamo.
        </pre>
      `;
    
      imgReceta.src = "https://cdn7.recetasdeescandalo.com/wp-content/uploads/2018/09/Receta-de-ensalada-de-arroz-y-atun-con-tortilla-francesa.-Facil-y-muy-rica.jpg.webp";
    
    });

    // Red velvet pancakes


    linkPreparation[7].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Sartenada de Calabacín con Queso y Jamón";
    
      ingredientesLi[0].textContent = "• 1 calabacín grande";
      ingredientesLi[1].textContent = "• 100 g de queso";
      ingredientesLi[2].textContent = "• 50 g de jamón serrano muy picado";
      ingredientesLi[3].textContent = "• 50g de tomillo";
    
      textPreparation.innerHTML = `
        <pre>
- Cocinamos a la plancha hasta 
que esté dorado por ambas caras 

- Lo cubrimos con el queso rallado
al gusto

- Ponemos una tapa de cacerola 
sobre el sarten

- Agregamos el jamón muy picado 
y tomillo fresco
        </pre>
      `;
    
      imgReceta.src = "https://i.blogs.es/6d8bf0/sartenada-rec/1024_2000.jpg";
  
    });

    // Pay de platano


    linkPreparation[8].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Pan Nube";
    
      ingredientesLi[0].textContent = "• 3 huevos";
      ingredientesLi[1].textContent = "• 100 g de queso crema de untar";
      ingredientesLi[2].textContent = "• 1/4 cucharadita de bicarbonato sódico";
    
      textPreparation.innerHTML = `
        <pre>
- Precalentamos el horno a 150ºC.
    
- Separando las claras de las 
yemas de los huevos .

- Batimos las yemas con el queso 
crema hasta obtener una masa 
homogénea y suave.

- Mezclamos ambas masas con la 
ayuda de una espátula, realizando 
movimientos envolventes.

- Colocamos una hoja de papel de 
hornear sobre una bandeja de horno 
y sobre ella repartimos 9 montones 
de masa, formando círculos y horneamos
por 20 min.
        </pre>
      `;
    
      imgReceta.src = "https://i.blogs.es/c090e8/cloud-rec/1366_2000.jpg";
        
    });

    //  Pay de limon


    linkPreparation[9].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Alcachofas con Apio y Manzanas al Aceite de Cetas";
    
      ingredientesLi[0].textContent = "• 100 g de ensaladas variadas";
      ingredientesLi[1].textContent = "• 2 pencas de apio ";
      ingredientesLi[2].textContent = "• 1 bulbo de hinojo";
      ingredientesLi[3].textContent = "• 100 g de setas (frescas si es temporada o congeladas)";
      ingredientesLi[4].textContent = "• 10 g de setas secas";
      ingredientesLi[5].textContent = "• Aceite de oliva, sal y vinagre";
    
      textPreparation.innerHTML = `
        <pre>
Los champiñones se descongelan, se 
lavan y se secan. Freírlos en una 
sartén con 2 cucharadas de aceite 
hasta que pierdan el exceso de humedad. 
Póngalos en un vaso de batidora, agregue 
50 ml de aceite y mezcle hasta que la 
preparación sea homogénea. vacío

El apio se lava, se lava y se corta 
en rodajas. Limpiar las alcachofas 
quitando los tallos, las hojas duras 
y las puntas. Cortarlos por la mitad, 
quitar la pelusa central y lavar. 
Cortarlos en rodajas y espolvorear 
con limón. vacío

Pelar las manzanas, quitarles el corazón 
y cortarlas en rodajas. Retire la capa 
exterior de hinojo, lave y ralle. Lavar 
la lechuga y secar. Picar finamente los 
champiñones secos.

Divida la lechuga, las alcachofas, el 
apio, el hinojo y la manzana en los 
platos para servir. Sazonar con sal, 
vinagre y aceite de champiñones y 
decorar con champiñones secos.
          
        </pre>
      `;
    
      imgReceta.src = "https://www.elmueble.com/medio/2022/04/10/almuerzo-saludable-alcachofas-con-apio-y-manzanas-al-aceite-de-setas-00393726_b2e0a1b6_800x1200.jpg";
        
    });

    // Negrito saludable


    linkPreparation[10].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Canutos con pechuga de pavo Don Vittorio";
    
      ingredientesLi[0].textContent = "• 500 gr de Canuto chico Don Vittorio";
      ingredientesLi[1].textContent = "• ½ kg de pechuga de pavo trozada (500 gr)";
      ingredientesLi[2].textContent = "• ½ cebolla (75 gr)";
      ingredientesLi[3].textContent = "• 150 gr de brócoli";
      ingredientesLi[4].textContent = "• 3 dientes de ajo molidos (6 gr)";
      ingredientesLi[5].textContent = "• Sal, Orégano";
    
      textPreparation.innerHTML = `
        <pre>
- Cocinar los canutos chicos 
Don Vittorio como indica el 
empaque. Reservar.

- En una sartén, echar un chorro 
de aceite Primor. Cuando esté 
caliente, agregar los ajos molidos 
y la cebolla picada finamente 
en cuadraditos.

- Darle una movidita y añadir el 
pavo y el brócoli previamente 
sancochados.

- añadir una pizca de orégano en 
polvo y sofreír por 3 minutos, 
Servir los fideos y añadir los 
trozos de pavo con el brócoli.
        </pre>
      `;
    
      imgReceta.src = "https://alicorp-prod-medias.s3.amazonaws.com/static-img/files/2022-10/7-almuerzos-saludables-para-la-semana/canutos-con-pechuga-de-pavo-desktop.png";

    });

    // Chees cake de mango


    linkPreparation[11].addEventListener('click', () => {

      divCreation();
      titlePreparation.style.marginRight="-5em";

      nameReceta.textContent="Olluquito con Carne o Charqui";
    
      ingredientesLi[0].textContent = "• ¼ de kg de carne de res o charqui (250 g)";
      ingredientesLi[1].textContent = "• ½ taza de cebolla (100 g)";
      ingredientesLi[2].textContent = "• 2 dientes de ajo picados (4 g)";
      ingredientesLi[3].textContent = "• 2 cdas. de ají panca molido (30 g)";
      ingredientesLi[4].textContent = "• 1 kg de ollucos picados en tiras";
      ingredientesLi[5].textContent = "• 3 cdas.de aceite Cocinero (45 ml)";
    
      textPreparation.innerHTML = `
        <pre>
- Calentar el aceite para freír y freír 
la carne cortada en tiras. Cuando esté 
dorada, sacar la carne y sofreír en el 
mismo aceite la cebolla, el ajo, la 
guindilla y el pimentón. 
    
- Añadir los huevos remojados en salmuera 
durante 1 hora y secados. Tape y cocine a 
fuego lento durante 20 minutos, revolviendo 
ocasionalmente
    
- Espolvorear con perejil y menta. Servir 
con arroz blanco.
        </pre>
      `;
    
      imgReceta.src = "https://www.eatperu.com/wp-content/uploads/2020/06/olluquitos-de-carne-recipe.jpeg";
        
    });






