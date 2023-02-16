
//Declaración variables

const body = document.body,
      ContainerProd = document.getElementById('ContainerProdHTML');


// Direcciones

const Linksimg = [ "../imagenes/frutas/Agua de coco A de Coco 1.jpg",
                    "../imagenes/frutas/Agua de coco Calahua Acapulcoco org nica 1.jpg",
                    "../imagenes/frutas/Agua de coco Coco Dream 500 ml.jpg",
                    "../imagenes/frutas/Agua de coco Nature's Heart 330 ml.jpg",
                    "../imagenes/frutas/Alimento l¡quido de coco A de Coco 1.jpg",
                    "../imagenes/frutas/Ar ndano Jumbo Paradise 278 g.jpg",
                    "../imagenes/frutas/Ar ndanos Nature's Heart deleite 700 g.jpg",
                    "../imagenes/frutas/Blueberry cosecha especial Driscoll's 310 g.jpg",
                    "../imagenes/frutas/ciruela importada por kilo.jpg",
                    "../imagenes/frutas/Ciruela pasa La Merced sin hueso 250 g.jpg",
                    "../imagenes/frutas/Ciruela pasa Mister Natural sin hueso 250 g.jpg",
                    "../imagenes/frutas/ciruela roja nacional por kilo.jpg",
                    "../imagenes/frutas/Clementina Halos en malla 908 g.jpg",
                    "../imagenes/frutas/Cubos de ciruela pasa Verde Valle 150 g.jpg",
                    "../imagenes/frutas/D til premium Mister Natural 250 g.jpg",
                    "../imagenes/frutas/D tiles Del Desierto medjool 500 g.jpg",
                    "../imagenes/frutas/Durazno amarillo por kilo.jpg",
                    "../imagenes/frutas/durazno blanco por kilo.jpg",
                    "../imagenes/frutas/Durazno Chihuahua por kilo.jpg",
                    "../imagenes/frutas/Durazno saturno por kilo.jpg",
                    "../imagenes/frutas/Durazno sonora por kilo.jpg",
                    "../imagenes/frutas/Frambuesa Driscoll's 170 g.jpg",
                    "../imagenes/frutas/Frambuesa org nica 170 g.jpg",
                    "../imagenes/frutas/Frambuesas Global Premier congeladas 907 g.jpg",
                    "../imagenes/frutas/Fresa Walmart.jpg",
                    "../imagenes/frutas/Fresas 454 g.jpg",
                    "../imagenes/frutas/Fresas congeladas Great Value enteras 500 g.jpg",
                    "../imagenes/frutas/Fresas congeladas La Huerta 500 g.jpg",
                    "../imagenes/frutas/guayaba por kilo.jpg",
                    "../imagenes/frutas/Guayaba rosa por kilo.jpg",
                    "../imagenes/frutas/lima por kilo.jpg",
                    "../imagenes/frutas/Mamey por kilo.jpg",
                    "../imagenes/frutas/mandarina por kilo.jpg",
                    "../imagenes/frutas/Mango ataulfo por kilo.jpg",
                    "../imagenes/frutas/Mango congelado Gran Valor en cubos 500 g.jpg",
                    "../imagenes/frutas/Manzana Ambros¡a por kilo.jpg",
                    "../imagenes/frutas/Manzana gala en bolsa 1,3 aprox precio por kilo.jpg",
                    "../imagenes/frutas/Manzana gala por kilo.jpg",
                    "../imagenes/frutas/Manzana granny smith por kilo.jpg",
                    "../imagenes/frutas/Manzana pink lady por kilo.jpg",
                    "../imagenes/frutas/Manzana red delicious por kilo.jpg",
                    "../imagenes/frutas/Mel¢n chino por kilo.jpg",
                    "../imagenes/frutas/Mel¢n golden dew por kilo.jpg",
                    "../imagenes/frutas/membrillo por kilo.jpg",
                    "../imagenes/frutas/Mezcla de frutas congeladas Topex Fruit fresa, zarzamora, frambuesa, moras azules 907 g.jpg", 
                    "../imagenes/frutas/Mora azul 170 g.jpg",
                    "../imagenes/frutas/Naranja agria por kilo.jpg",
                    "../imagenes/frutas/Naranja navel por pieza.jpg",
                    "../imagenes/frutas/Naranja org nica Marketside en malla 2 kg.jpg",
                    "../imagenes/frutas/Naranja sangre por pza.jpg",
                    "../imagenes/frutas/Papaya maradol por kilo.jpg",
                    "../imagenes/frutas/Per¢n dorado en bolsa 1,3 aprox precio por kilo.jpg",
                    "../imagenes/frutas/Per¢n golden en bolsa 1.3 aprox precio por kilo.jpg",
                    "../imagenes/frutas/Pera de anjou por kilo.jpg",
                    "../imagenes/frutas/Pera roja de anjou por kilo.jpg",
                    "../imagenes/frutas/Pi¤a miel por kilo.jpg",
                    "../imagenes/frutas/Pl tano org nico Marketside por kilo.jpg",
                    "../imagenes/frutas/Sand¡a personal por kilo.jpg",
                    "../imagenes/frutas/Sand¡a roja por kilo.jpg", 
                    "../imagenes/frutas/SANDIA SIN SEMILLA POR KILO.jpg",
                    "../imagenes/frutas/Toronja importada por kilo.jpg",
                    "../imagenes/frutas/Tuna Blanca por K.jpg",
                    "../imagenes/frutas/Uva blanca sin semilla por kilo.jpg",
                    "../imagenes/frutas/Uva roja sin semilla por kilo.jpg",
                    "../imagenes/frutas/Zarzamora 170 g.jpg",
                    "../imagenes/frutas/Zarzamora Driscoll's 170 g.jpg",
                    "../imagenes/frutas/Zarzamora org nica Driscolls 170 g.jpg",
                    "../imagenes/frutas/Zarzamoras Global Premier congeladas 907 g.jpg",
                   ];



const nameProductos = [ "Agua de Coco",
                    "Agua de coco Calahua Acapulcoco orgánica",
                    "Agua de coco Coco Dream 500 ml",
                    "Agua de coco Nature's Heart 330 ml",
                    "Alimento líquido de coco A de Coco",
                    "Arándano Jumbo Paradise 278 g",
                    "Arándanos Nature's Heart deleite 700 g",
                    "Blueberry cosecha especial Driscoll's 310 g",
                    "ciruela importada por kilo",
                    "Ciruela pasa La Merced sin hueso 250 g",
                    "Ciruela pasa Mister Natural sin hueso 250 g",
                    "Ciruela roja nacional por kilo",
                    "Clementina Halos en malla 908 g",
                    "Cubos de ciruela pasa Verde Valle 150 g",
                    "Dátil premium Mister Natural 250 g",
                    "Dútiles Del Desierto medjool 500 g",
                    "Durazno amarillo por kilo",
                    "Durazno blanco por kilo",
                    "Durazno Chihuahua por kilo",
                    "Durazno saturno por kilo",
                    "Durazno sonora por kilo",
                    "Frambuesa Driscoll's 170 g",
                    "Frambuesa orgánica 170 g",
                    "Frambuesas Global Premier congeladas 907 g",
                    "Fresas",
                    "Fresas 454 g",
                    "Fresas congeladas Great Value enteras 500 g",
                    "Fresas congeladas La Huerta 500 g",
                    "guayaba por kilo",
                    "Guayaba rosa por kilo",
                    "lima por kilo",
                    "Mamey por kilo",
                    "mandarina por kilo",
                    "Mango ataulfo por kilo",
                    "Mango congelado Gran Valor en cubos 500 g",
                    "Manzana Ambrosía por kilo",
                    "Manzana gala en bolsa por kilo",
                    "Manzana gala por kilo",
                    "Manzana granny smith por kilo",
                    "Manzana pink lady por kilo",
                    "Manzana red delicious por kilo",
                    "Melón chino por kilo",
                    "Melón golden dew por kilo",
                    "membrillo por kilo",
                    "congeladas Topex Fruit fresa, zarzamora, frambuesa, moras azules 907 g", 
                    "Mora azul 170 g",
                    "Naranja agria por kilo",
                    "Naranja navel por pieza",
                    "Naranja orgánica Marketside en malla 2 kg",
                    "Naranja sangre por pieza",
                    "Papaya maradol por kilo",
                    "Perón dorado en bolsa 1,3 aprox precio por kilo",
                    "Perón golden en bolsa 1.3 aprox precio por kilo",
                    "Pera de anjou por kilo",
                    "Pera roja de anjou por kilo",
                    "Piña miel por kilo",
                    "Plátano orgánico Marketside por kilo",
                    "Sandía personal por kilo",
                    "Sandía roja por kilo.", 
                    "SANDIA SIN SEMILLA POR KILO",
                    "Toronja importada por kilo",
                    "Tuna Blanca por Kilo",
                    "Uva blanca sin semilla por kilo",
                    "Uva roja sin semilla por kilo",
                    "Zarzamora 170 g",
                    "Zarzamora Driscoll's 170 g",
                    "Zarzamora orgánica Driscolls 170 g",
                    "Zarzamoras Global Premier congeladas 907 g",
                   ];


//Construccion del HTML


const crearHtml = () => {


    const html = ` <div class="fexcajasPR"><img src="" class="imgProductos" alt=""></a>
            <p class="titleProductCount"></p>
        </div> `;

    const div = document.createElement('div');
    div.innerHTML = html;
    
    ContainerProd.append( div );


}

const InitialHtml = () => {


    for ( let i=0; i<Linksimg.length; i++ ) {

        crearHtml();
        
    }

    const imgs = document.querySelectorAll('.imgProductos');
    const title = document.querySelectorAll('.titleProductCount');


    for ( let i=0; i<Linksimg.length; i++ ) {

        imgs[i].src = Linksimg[i];
        imgs[i].alt = nameProductos[i];
        title[i].textContent = nameProductos[i];
        
    }

}


InitialHtml();





