
//Declaración variables

const body = document.body,
      ContainerProd = document.getElementById('ContainerProdHTML');


// Direcciones

const Linksimg = ["../imagenes/Grasas/Aceite Enature de Coco Extra virgen 1 l.jpg",
                    "../imagenes/Grasas/AceiteGreatValue.jpg",
                    "../imagenes/Grasas/AceiteGreatValueNoAerosol.jpg",
                    "../imagenes/Grasas/AceiteOli.jpg",
                    "../imagenes/Grasas/AceiteOliAerosol.jpg",
                    "../imagenes/Grasas/AceitePam.jpg",
                    "../imagenes/Grasas/Aceitunas verdes Bufalo sin hueso 150 g.jpg",
                    "../imagenes/Grasas/AguacateKg.jpg",
                    "../imagenes/Grasas/Aguacatemalla.jpg",
                    "../imagenes/Grasas/AjonjoliGreatValue.jpg",
                    "../imagenes/Grasas/AjonjoliValleVerde.jpg",
                    "../imagenes/Grasas/Almendra La Colina entera 100 g.png",
                    "../imagenes/Grasas/Almendra Verde Valle 100 g.png",
                    "../imagenes/Grasas/Almendras Great Value 100 g.png",
                    "../imagenes/Grasas/Avellana Pelada Entera Calidad Premium 500 Gramos.png",
                    "../imagenes/Grasas/Cacahuates Calidad Selecta tostados 250 g.jpg",
                    "../imagenes/Grasas/Cacahuates Great Value rostizados 454 g.jpg",
                    "../imagenes/Grasas/Cacahuates Mafer premium tostado sazonado sin aceite 180 g.jpg",
                    "../imagenes/Grasas/Campo Vivo Campo Vivo Semillas De Chia.jpg",
                    "../imagenes/Grasas/Ch¡a Okko semilla 300 g.jpg",
                    "../imagenes/Grasas/Ch¡a T¡a Ofilia org nica 250 g.jpg",
                    "../imagenes/Grasas/Ch¡a Verde Valle 320 g.jpg",
                    "../imagenes/Grasas/Ch¡a Wand's 220 g.jpg",
                    "../imagenes/Grasas/Chia Okko semilla 150 g.jpg",
                    "../imagenes/Grasas/Crema de cacahuate Mister natural 840 g.jpg",
                    "../imagenes/Grasas/Crema de Cacahuate On+top Cacao Crujiente 500 g.jpg",
                    "../imagenes/Grasas/Crema de Cacahuate On+top Natural Crunchy 480 g.jpg",
                    "../imagenes/Grasas/Crema de Cacahuate On+top Natural Whey 470 g.jpg",
                    "../imagenes/Grasas/Fruta Mixta Bontatti Vitrolero 454 g.jpg",
                    "../imagenes/Grasas/Mezcla de frutas deshidratadas y nueces Nature's Heart Fruit & Nut Collection 450 g.jpg",
                    "../imagenes/Grasas/Mezcla de frutas deshidratadas y nueces Nature's Heart Fun Trial 900 g.jpg",
                    "../imagenes/Grasas/Mezcla de frutas deshidratadas y nueces Nature's Heart Go! Nuts 450 g.jpg",
                    "../imagenes/Grasas/Mezcla de frutos secos Great Value 624 g.jpg",
                    "../imagenes/Grasas/Mezcla de frutos secos Verde Valle 80 g.jpg",
                    "../imagenes/Grasas/Nuez Fun Fruit en mitades 200 g.jpg",
                    "../imagenes/Grasas/Nuez Great Value 100 g.jpg",
                    "../imagenes/Grasas/Nuez Verde Valle en mitades 100 g.jpg",
                    // "../imagenes/Grasas/Okko Avellana Entera Sin Cascara 200 G 200 Gr.png",
                    "../imagenes/Grasas/Okko Avellana Entera Sin Cascara 200 G 200 Gr02.jpg",
                    "../imagenes/Grasas/Pistache Bolsa 100 Gr Wonderful.jpg",
                    "../imagenes/Grasas/Pistache Wonderful 227 Gr Bol.jpg",
                    "../imagenes/Grasas/Semilla De Chia Las Balsas.jpg",
                    "../imagenes/Grasas/Semilla de Girasol Cerepak 500 g.jpg",
                    "../imagenes/Grasas/Semilla de girasol Okko Super Foods 200 g.jpg",
                    "../imagenes/Grasas/Semilla de girasol pelada Wand's 300 g.png",
                    "../imagenes/Grasas/Semillas de chia Dinat 100 g.jpg",
                    "../imagenes/Grasas/Semillas de girasol Bel Ara acarameladas 250 g.jpg",
                    "../imagenes/Grasas/Semillas de girasol Bel Ara natural tostadas 250 g.jpg",
                    "../imagenes/Grasas/Surtido salado Mafer 146 g.jpg",
                    "../imagenes/Grasas/Vitrolero Pistache Blanco Valley Foods 800 gr.jpg"
                 ];


                 const nameProductos = ["Aceite Enature de Coco Extra virgen",
                 "Aceite Great Value",
                 "Aceite Great Value No Aerosol",
                 "Aceite Oli",
                 "Aceite Oli Aerosol",
                 "Aceite Pam",
                 "Aceitunas verdes Bufalo sin hueso 150g",
                 "Aguacate Kg",
                 "Aguacate malla",
                 "Ajonjolí GreatValue",
                 "Ajonjolí Valle Verde",
                 "Almendra La Colina entera 100g",
                 "Almendra Verde Valle 100g",
                 "Almendras Great Value 100g",
                 "Avellana Pelada Entera Calidad Premium 500g",
                 "Cacahuates Calidad Selecta tostados 250g",
                 "Cacahuates Great Value rostizados 454g",
                 "Cacahuates Mafer premium tostado sazonado sin aceite 180g",
                 "Campo Vivo Campo Vivo Semillas De Chía",
                 "Chía Okko semilla 300g",
                 "Chía Tía Ofilia orgánica 250g",
                 "Chía Verde Valle 320g",
                 "Chía Wand's 220g",
                 "Chía Okko semilla 150g",
                 "Crema de cacahuate Mister natural 840g",
                 "Crema de Cacahuate On+top Cacao Crujiente 500g",
                 "Crema de Cacahuate On+top Natural Crunchy 480g",
                 "Crema de Cacahuate On+top Natural Whey 470g",
                 "Fruta Mixta Bontatti Vitrolero 454g",
                 "Mezcla de frutas deshidratadas y nueces Nature's Heart Fruit & Nut Collection 450g",
                 "Mezcla de frutas deshidratadas y nueces Nature's Heart Fun Trial 900g",
                 "Mezcla de frutas deshidratadas y nueces Nature's Heart Go! Nuts 450g",
                 "Mezcla de frutos secos Great Value 624g",
                 "Mezcla de frutos secos Verde Valle 80g",
                 "Nuez Fun Fruit en mitades 200g",
                 "Nuez Great Value 100g",
                 "Nuez Verde Valle en mitades 100g",
                 "Okko Avellana Entera Sin Cascara 200g",
                 "Pistache Bolsa 100g Wonderful",
                 "Pistache Wonderful 227g Bol",
                 "Semilla De Chía Las Balsas",
                 "Semilla de Girasol Cerepak 500g",
                 "Semilla de girasol Okko Super Foods 200g",
                 "Semilla de girasol pelada Wand's 300g",
                 "Semillas de chia Dinat 100g",
                 "Semillas de girasol Bel Ara acarameladas 250g",
                 "Semillas de girasol Bel Ara natural tostadas 250g",
                 "Surtido salado Mafer 146g",
                 "Vitrolero Pistache Blanco Valley Foods 800g"
              ];


//Construccion del HTML


const crearHtml = () => {


    const html = ` <div class="fexcajasPR"><img src="/imagenes/Grasas/AceiteGreatValue.jpg" class="imgProductos" alt="Aceite de oliva Great Value extra virgen en aerosol 141 g"></a>
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





