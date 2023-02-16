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


// Club Sandwich

linkPreparation[0].addEventListener('click', () => {
    
  divCreation();

  nameReceta.textContent="Club Sandwich";

  ingredientesLi[0].textContent = "• Jamon";
  ingredientesLi[1].textContent = "• Queso";
  ingredientesLi[2].textContent = "• Tocino";
  ingredientesLi[3].textContent = "• Tomate";
  ingredientesLi[4].textContent = "• Aguacate";
  ingredientesLi[5].textContent = "• Lechuga";

  textPreparation.innerHTML = `
    <pre>
- Licua todos los ingredientes
  
- verter la mezcla en un sarten 
con un poco de aceite
  
- voltear cada 2 minutos
  
- Agregar decoraciones al gusto
    </pre>
  `;

  imgReceta.src = "../imagenes/recetario/keto/KETO CLUB SANDWICH.jpg";

});

    // Nidos de calabaza

linkPreparation[1].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Nidos de calabaza";

  ingredientesLi[0].textContent = "• 30 gramos de spaghetti squash";
  ingredientesLi[1].textContent = "• 1 huevo entero";
  ingredientesLi[2].textContent = "• 1 cucharada de parmesano";
  ingredientesLi[3].textContent = "• 1 cucharada de mozzarella rallada";
  ingredientesLi[4].textContent = "• perejil picado si gustan";
  ingredientesLi[5].textContent = "---";

  textPreparation.innerHTML = `
    <pre>
- Licua todos los ingredientes
  
- verter la mezcla en un sarten 
con un poco de aceite
  
- voltear cada 2 minutos
  
- Agregar decoraciones al gusto
    </pre>
  `;

  imgReceta.src = "../imagenes/recetario/keto/Nidos de calabaza squash.jpg";

});

    //  Pizza borde queso

linkPreparation[2].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Pizza borde queso";

  ingredientesLi[0].textContent = "• 75g de harina de almendra";
  ingredientesLi[1].textContent = "• 10g de psyllium en polvo @nkdliving";
  ingredientesLi[2].textContent = "• 5g de levadura en polvo";
  ingredientesLi[3].textContent = "• 2 huevos";
  ingredientesLi[4].textContent = "• Queso provolone";
  ingredientesLi[5].textContent = "• Pizca de sal";

  textPreparation.innerHTML = `
    <pre>
- Licua todos los ingredientes
  
- verter la mezcla en un sarten 
con un poco de aceite
  
- voltear cada 2 minutos
  
- Agregar decoraciones al gusto
    </pre>
  `;

  imgReceta.src = "../imagenes/recetario/keto/PIZZA CON BORDES DE QUESO.JPG";

});

    //  Rollo Hulk

linkPreparation[3].addEventListener('click', () => {

  divCreation();

  nameReceta.textContent="Rollo Hulk";

  ingredientesLi[0].textContent = "• 200gr de espinaca precocida";
  ingredientesLi[1].textContent = "• 3 huevos";
  ingredientesLi[2].textContent = "• 3 cdas de harina de coco";
  ingredientesLi[3].textContent = "• 1 cda de Polvo de hornear";
  ingredientesLi[4].textContent = "• 4 cdas de queso crema";
  ingredientesLi[5].textContent = "• 1 puñado de queso rallado";

  textPreparation.innerHTML = `
    <pre>
- Licua todos los ingredientes
  
- verter la mezcla en un sarten 
con un poco de aceite
  
- voltear cada 2 minutos
  
- Agregar decoraciones al gusto
    </pre>
  `;

  imgReceta.src = "../imagenes/recetario/keto/Rollitos Hulk de espinaca.jpg";

    });

    //  Bolitas

    linkPreparation[4].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Bolitas Sorpresa";
    
      ingredientesLi[0].textContent = "• Carne picada previamente especiada";
      ingredientesLi[1].textContent = "• Tú queso favorito cortado de cubitos";
      ingredientesLi[2].textContent = "• Bacon";
      ingredientesLi[3].textContent = "• Palillos para asegurar";
      ingredientesLi[4].textContent = "• salsa picante de trufa";
      ingredientesLi[5].textContent = "---";
    
      textPreparation.innerHTML = `
        <pre>
    - Licua todos los ingredientes
      
    - verter la mezcla en un sarten 
    con un poco de aceite
      
    - voltear cada 2 minutos
      
    - Agregar decoraciones al gusto
        </pre>
      `;
    
      imgReceta.src = "../imagenes/recetario/keto/Keto Bolitas de carne.jpg";
    
    });

    // Espinaca


    linkPreparation[5].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Fettuccini de Espinaca";
    
      ingredientesLi[0].textContent = "• Un paquete de pasta fettuccini espinaca";
      ingredientesLi[1].textContent = "• 1 taza de crema de leche";
      ingredientesLi[2].textContent = "• 150 gr de queso parmesano";
      ingredientesLi[3].textContent = "• champiñones en láminas";
      ingredientesLi[4].textContent = "• pechuga de pollo";
      ingredientesLi[5].textContent = "• sal y pimienta";
    
      textPreparation.innerHTML = `
        <pre>
    - Licua todos los ingredientes
      
    - verter la mezcla en un sarten 
    con un poco de aceite
      
    - voltear cada 2 minutos
      
    - Agregar decoraciones al gusto
        </pre>
      `;
    
      imgReceta.src = "../imagenes/recetario/keto/FETTUCCINI DE ESPINACA A LA CREMA CON POLLO Y CHAMPI¥ONES.jpg";
    
    });

    // Huevos Keto


    linkPreparation[6].addEventListener('click', () => {
    
      divCreation();

      nameReceta.textContent="Huevos Keto";
    
      ingredientesLi[0].textContent = "• 1 manojo de espárragos trigueros";
      ingredientesLi[1].textContent = "• 150g gambas";
      ingredientesLi[2].textContent = "• 4 huevos";
      ingredientesLi[3].textContent = "• 1 diente de ajo";
      ingredientesLi[4].textContent = "• Sal";
      ingredientesLi[5].textContent = "• AOVE";
    
      textPreparation.innerHTML = `
        <pre>
    - Licua todos los ingredientes
      
    - verter la mezcla en un sarten 
    con un poco de aceite
      
    - voltear cada 2 minutos
      
    - Agregar decoraciones al gusto
        </pre>
      `;
    
      imgReceta.src = "../imagenes/recetario/keto/huevos.JPG";
    
    });

    // Tuna Waffle


    linkPreparation[7].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Tuna Waffle";
    
      ingredientesLi[0].textContent = "• 2 cucharas de queso crema";
      ingredientesLi[1].textContent = "• 2 huevos";
      ingredientesLi[2].textContent = "• 2 cucharadas (de postre) de harina de almendra";
      ingredientesLi[3].textContent = "• 1 cucharadita de polvo de hornear, Sal & pimienta";
      ingredientesLi[4].textContent = "• 2 latas de atún";
      ingredientesLi[5].textContent = "• 1/4 taza de cilantro picadito";
    
      textPreparation.innerHTML = `
        <pre>
    - Licua todos los ingredientes
      
    - verter la mezcla en un sarten 
    con un poco de aceite
      
    - voltear cada 2 minutos
      
    - Agregar decoraciones al gusto
        </pre>
      `;
    
      imgReceta.src = "../imagenes/recetario/keto/Tuna Waffle.jpg";
    
    });

    // Sálmon


    linkPreparation[8].addEventListener('click', () => {

      
      divCreation();

      nameReceta.textContent="Wrap De Salmón";
    
      ingredientesLi[0].textContent = "• Salmón";
      ingredientesLi[1].textContent = "• Queso";
      ingredientesLi[2].textContent = "• Aguacate";
      ingredientesLi[3].textContent = "• Huevo duro";
      ingredientesLi[4].textContent = "• Tomate";
      ingredientesLi[5].textContent = "• Hojas de lechuga";
    
      textPreparation.innerHTML = `
        <pre>
    - Licua todos los ingredientes
      
    - verter la mezcla en un sarten 
    con un poco de aceite
      
    - voltear cada 2 minutos
      
    - Agregar decoraciones al gusto
        </pre>
      `;
    
      imgReceta.src = "../imagenes/recetario/keto/WRAP DE SALMàN.jpg";
    
    });

    //  Crema Pepino y aguacate


    linkPreparation[9].addEventListener('click', () => {
       
      divCreation();

      nameReceta.textContent="Crema fría de pepino y aguacate";
    
      ingredientesLi[0].textContent = "• Crema fría";
      ingredientesLi[1].textContent = "• Pepino";
      ingredientesLi[2].textContent = "---";
      ingredientesLi[3].textContent = "---";
      ingredientesLi[4].textContent = "---";
      ingredientesLi[5].textContent = "---";
    
      textPreparation.innerHTML = `
        <pre>
    - Licua todos los ingredientes
      
    - verter la mezcla en un sarten 
    con un poco de aceite
      
    - voltear cada 2 minutos
      
    - Agregar decoraciones al gusto
        </pre>
      `;
    
      imgReceta.src = "../imagenes/recetario/keto/Crema fr¡a de pepino y aguacate.jpg";
    
    });

    // Empanadas


    linkPreparation[10].addEventListener('click', () => {
  
      divCreation();

      nameReceta.textContent="Empanadillas";
    
      ingredientesLi[0].textContent = "• 150gr de Mozzarella rallada";
      ingredientesLi[1].textContent = "• 60gr de Harina de Almendras";
      ingredientesLi[2].textContent = "• 1gr de Psyllium en polvo";
      ingredientesLi[3].textContent = "• 3gr de Harina de Bambú";
      ingredientesLi[4].textContent = "• 1 huevo";
      ingredientesLi[5].textContent = "---";
    
      textPreparation.innerHTML = `
        <pre>
    - Licua todos los ingredientes
      
    - verter la mezcla en un sarten 
    con un poco de aceite
      
    - voltear cada 2 minutos
      
    - Agregar decoraciones al gusto
        </pre>
      `;
    
      imgReceta.src = "../imagenes/recetario/keto/Empanadillas.JPG";
    
    });

    // Pizza Keto


    linkPreparation[11].addEventListener('click', () => {

      divCreation();

      nameReceta.textContent="Pizza Keto";
    
      ingredientesLi[0].textContent = "• 250gr de pechuga de pollo ";
      ingredientesLi[1].textContent = "• Queso";
      ingredientesLi[2].textContent = "• Masa";
      ingredientesLi[3].textContent = "• Especias";
      ingredientesLi[4].textContent = "• 3 huevos";
      ingredientesLi[5].textContent = "---";
    
      textPreparation.innerHTML = `
        <pre>
    - Licua todos los ingredientes
      
    - verter la mezcla en un sarten 
    con un poco de aceite
      
    - voltear cada 2 minutos
      
    - Agregar decoraciones al gusto
        </pre>
      `;
    
      imgReceta.src = "../imagenes/recetario/keto/PIZZA KETO.JPG";
       
    });







