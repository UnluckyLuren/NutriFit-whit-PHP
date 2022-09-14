//  Declaraciones

const containerPrincipal =document.getElementById('displayPreparation'),
    linkPreparation = document.querySelectorAll('.openInformation'),
    closePreparation = document.getElementById('closePreparation'),
    container = document.getElementById('container'),
    linkBebidas = document.getElementById('linkBebidas');

    const titleJugo = document.getElementById('imgChangeTitle'),
          titleSmotthie = document.getElementById('titleBebRep');

  
// Funciones 


const divCreation = () => {

    containerPrincipal.style.display="none";
    closePreparation.style.display="inline"

    const div = document.createElement('div');

    return div;
}



// Eventos

    // Cerrar preparación
closePreparation.addEventListener('click', () => {
    
    const last_Child = container.lastChild;
    container.removeChild(last_Child);

    containerPrincipal.style.display="flex";
    closePreparation.style.display="none";

});


// Hulk

linkPreparation[0].addEventListener('click', () => {
    
    const div = divCreation();

    if (titleJugo.textContent === "Jugo verde")
    {

      div.innerHTML="Jugo Verde Preparación";

    } else {

      div.innerHTML= ` 
      
      <h1 class="ingredientes">Preparacion</h1>
      <pre class="textoI">
          <br>
          - Licua todos los ingredientes
      
          - verter la mezcla en un sarten con un poco de aceite
      
          - voltear cada 2 minutos
      
          - Agregar decoraciones al gusto
      
          </pre>`;

          container.append( div );
    }

});

    // Tarta de manzana

linkPreparation[1].addEventListener('click', () => {

    const div = divCreation();

    if (titleJugo.textContent === "Jugo verde") {

      div.innerHTML="Smotthie";

    } else {

    div.innerHTML= ` 
   
    <h1 class="ingredientes">Preparacion</h1>
    <pre class="textoI">
        <br>
        - Pela y corta las manzanas y 
          mételas al micro 3-5 minutos para asarlas

        -  mezcla y bate todos los ingredientes
          (menos la manzana para decorar)
        
        -  Pon en un molde de horno
           añade una manzana encima en láminas con canela
        
        - Hornea a 200 grados 30 minutos (calor arriba y abajo)
    
        </pre>
    `;

    }

        container.append( div );

});

    //  Gansito

linkPreparation[2].addEventListener('click', () => {

    const div = divCreation();
    
    div.innerHTML= ` 
    
    <h1 class="ingredientes">Preparacion</h1>
    <pre class="textoI">
        <br>
        - Licua todos los ingredientes
    
        - verter la mezcla en un sarten con un poco de aceite
    
        - voltear cada 2 minutos
    
        - Agregar decoraciones al gusto
    
        </pre>`;

        container.append( div );


});

    //  Crepas

linkPreparation[3].addEventListener('click', () => {

    const div = divCreation();
        
    div.innerHTML= ` 
        
    <h1 class="ingredientes">Preparacion</h1>
    <pre class="textoI">
        <br>
        - Licua todos los ingredientes

        - Extender en sartén precalentado y engrasado

        - Rellenarla con yogurt griego 
          (con esencia vainilla y endulzante a tu gusto) 
          y crema de avellana o la crema que tengas en casa.

        - Le cortamos en forma de RADIO 
          para poder doblarla en 4
        </pre>

    `;
    
        container.append( div );

    });

    //  Flan

    linkPreparation[4].addEventListener('click', () => {

        const div = divCreation();
        
        div.innerHTML= ` 
        <h1 class="ingredientes">Preparacion</h1>
        <pre class="textoI">
            <br>
            -  Mezclar todos los ingredientes 
               y meter al microondas por 1 minuto 
               (puede ser un poco más según tu micro)
        
            </pre>
        `;
    
            container.append( div );
    
    
    });

    // Mermelada


    linkPreparation[5].addEventListener('click', () => {

        const div = divCreation();
        
        div.innerHTML= ` 
        <h1 class="ingredientes">Preparacion</h1>
        <pre class="textoI">
            <br>
            -  Llevar los frutos rojos al microondas
               por 30 segundos
            
            - Revuelva la chia
            </pre>
       `;
    
            container.append( div );
    
    
    });

    // Mamut


    linkPreparation[6].addEventListener('click', () => {

        const div = divCreation();
        
        div.innerHTML= ` 
        <h1 class="ingredientes">Preparacion</h1>
        <pre class="textoI">
            <br>
            - Empieza formando capas
    
               •GALLETA MARÍA SIN AZÚCAR
               •YOGURT GRIEGO
               •FRUTOS ROJOS MACHACADOS
    
            - Baña todo en chocolate Turin 70% cacao
    
            - Congelador mínimo 2 horas
            </pre>
        `;
    
            container.append( div );
    
    
    });

    // Red velvet pancakes


    linkPreparation[7].addEventListener('click', () => {

        const div = divCreation();
        
        div.innerHTML= ` 
        <h1 class="ingredientes">Preparacion</h1>
        <pre class="textoI">
            <br>
            - LICUA:
    
              1/2 tza de harina de avena
              2 claras o 1 huevo
              Canela al gusto
              1 tapa de Vainilla
              Monk fruit
              1/2 tza de betabel
              1/4 tza de leche vegetal
    
            - Pasa todo a un sartén con FUEGO BAJO!!! 
              Cocina por ambos lados y agrega el topping 
              de tu preferencia 
    
            </pre>
        `;
    
            container.append( div );
    
    
    });

    // Pay de platano


    linkPreparation[8].addEventListener('click', () => {

        const div = divCreation();
        
        div.innerHTML= ` 
        <h1 class="ingredientes">Preparacion</h1>
        <pre class="textoI">
            <br>
            - Prepara un recipiente de vidrio
    
            - Forma capas:
            
              •Galletas maria sin azúcar 
              •Mezcla de yogurt
              •Nueces
              •Plátano
              •Cajeta sin azúcar 
    
            - Metelo al refrigerador o al congelador  por 10 minutos
            </pre> 
       `;
    
            container.append( div );
    
    
    });

    //  Pay de limon


    linkPreparation[9].addEventListener('click', () => {

        const div = divCreation();
        
        div.innerHTML= ` 
        <h1 class="ingredientes">Preparacion</h1>
        <pre class="textoI">
            <br>
            - LICUA:
    
              •1 tza de yogurt griego
              •1/4 tza de leche de coco con vainilla
              •10 limones (depende de lo ácido que te guste a ti)
              •2 cdas de monk fruit
              •1 tapa de vainilla
              •1 sobre de grenetina previamente hidratado
    
            - Forma la base
    
              •1 tza de harina de avena
              •1/2 tza de ghee
              •1 cda de monk fruit
            
    
            - Junta la base con el relleno y al refrigerador 
              mínimo 4 horas  
            </pre>
        `;
    
            container.append( div );
    
    
    });

    // Negrito saludable


    linkPreparation[10].addEventListener('click', () => {

        const div = divCreation();
        
        div.innerHTML= ` 
        <h1 class="ingredientes">Preparacion</h1>
        <pre class="textoI">
            <br>
            - Mezclar:
               
              1 huevo
              Vainilla
              Monkfruit
              Leche de almendras sin azucar
    
            - Partir el pan a la mitad
    
            - Pasar las medias noches cero cero 
              por la mezcla y llevar al sarten
            
            - Reyenar con chocolate 
    
            </pre>
        `;
    
            container.append( div );
    
    
    });

    // Chees cake de mango


    linkPreparation[11].addEventListener('click', () => {

        const div = divCreation();
        
        div.innerHTML= ` 
        <h1 class="ingredientes">Preparacion</h1>
        <pre class="textoI">
            <br>
            - En un recipiente redondo para microondas 
              agregamos 1cda de ghee y llevamos 
              por 10 seg al micro.
              Engrasar con este ghee todo el recipiente y 
              lo que sobre lo dejamos dentro.
    
            - En otro recipiente trituramos las galletas y
              las agregamos al recipiente donde esta el 
              ghee derretido, mezclamos todo muy bien y 
              con ayuda de una cuchara aplastamos hasta 
              formar una capa de galletas muy comprimidas 
              (esta será la base de nuestro cheese cake).
    
            - En otro recipiente agregar el queso crema,
              extracto de vainilla, monk fruit granulado y
              extracto de vainilla, esta mezcla agregarla al 
              recipiente donde esta la capa de galletas.
              Llevamos al microondas por 3 min a potencia
              media pero en intervalos de 20 seg, abrimos el
              micro dejamos que se ventile unos segundo y 
              volvemos a poner 20 seg hasta tener los 3 min. 
              (es para que el queso no se derrame ).
               No olvides que sea a potencia media
            
            - Una vez que se cocine el cheesecake, 
              dejarlo enfriar y después llevarlo 30 min 
              al refrigerador, desmoldar con cuidado y 
              decorar como se ve en el video.
              Puedes comerlo directamente del recipiente 
              sin desmoldar
    
            </pre>
        `;
    
            container.append( div );
    });


    // Cuando dan click en bebidas



    linkBebidas.addEventListener('click', () => {

      // Declaraciones de enlace con html de los textos de atras

      const textJugo = document.getElementById('textBebJugoVerde'),
      textSmotthie = document.getElementById('textSmotthie');

      const img = document.getElementById('imgChangeBeb'),
            imgRep = document.getElementById('imgBebRep');

      // Acomodo Jugo verde información e imagen

      img.src="../imagenes/recetario/bebidas/Jugo verde.jpg";
      titleJugo.textContent = "Jugo verde";

      textJugo.innerHTML=`  
      • 1 taza de agua
      <br> 
      •½ pepino
      <br> 
      •1 hoja de acelga
      <br>
      •2 rebanadas de piña
      <br>
      • ½ taza de agua de coco
      <br>
      •½ pieza de apio
      <br>
      •1 taza de jugo de manzana
      <br>
      •1 manzana
      <br>
      •3 hojitas de menta`;

      // Acomodo Smotthie

      imgRep.src="../imagenes/recetario/bebidas/smotthies de fresa.jpg";
      titleSmotthie.textContent = "Smotthie de fresa";

      textSmotthie.innerHTML= `
      •1 yogur griego
      <br>
      •3 huevos
      <br>
      • 2 manzanas amarillas para el relleno
      <br>
      •1 manzana (de la que más te guste) para decorar
      <br>
      •170 gr de harina de avena
      <br>
      •1 cucharada de aceite de coco
      <br>
      •canela al gusto
      <br>
      •Esencia de vainilla (opcional)`;


    });











