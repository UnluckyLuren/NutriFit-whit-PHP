
//Declaración variables

const body = document.body,
      ContainerProd = document.getElementById('ContainerProdHTML');


// Direcciones

const Linksimg = ["../imagenes/cereales-carbohidratos/Alubia grande San L zaro 500 g.jpg",
                    "../imagenes/cereales-carbohidratos/Amaranto Aires de Campo org nico 250 g.jpg",
                    "../imagenes/cereales-carbohidratos/Amaranto Dul Cerel natural 250 g.jpg",
                    "../imagenes/cereales-carbohidratos/Arroz La Merced integral 1 kg.jpg",
                    "../imagenes/cereales-carbohidratos/Arroz SOS grueso s£per extra 1 kg.jpg",
                    "../imagenes/cereales-carbohidratos/Arroz SOS impegable parbolizado 1 kg.jpg",
                    "../imagenes/cereales-carbohidratos/Arroz Verde Valle grano grueso 900 g.jpg",
                    "../imagenes/cereales-carbohidratos/Arroz Verde Valle precocido blanco 300 g.jpg",
                    "../imagenes/cereales-carbohidratos/Avena Aires de Campo org nica 500 g.jpg",
                    "../imagenes/cereales-carbohidratos/Avena Granvita org nica 350 g.jpg",
                    "../imagenes/cereales-carbohidratos/Avena Integral Granvita 1 kg.jpg",
                    "../imagenes/cereales-carbohidratos/Avena Quaker 3 minutos 610 g.jpg",
                    "../imagenes/cereales-carbohidratos/Avena Quaker Super Foods linaza ch¡a y quinoa 475 g.jpg",
                    "../imagenes/cereales-carbohidratos/Avena T¡a Ofilia org nica 300 g.jpg",
                    "../imagenes/cereales-carbohidratos/Barras Great Value integrales 180 g.jpg",
                    "../imagenes/cereales-carbohidratos/Barras Nature Valley Crunchy con avena integral y miel 252 g.jpg",
                    "../imagenes/cereales-carbohidratos/Camote amarillo en malla 900 g.jpg",
                    "../imagenes/cereales-carbohidratos/Camote Amarillo Kg.jpg",
                    "../imagenes/cereales-carbohidratos/Camote de azafr n por kilo.jpg",
                    "../imagenes/cereales-carbohidratos/Camote morado por kilo.jpg",
                    "../imagenes/cereales-carbohidratos/Pan En Barra Bimbo Cero 610 gr.jpg",
                    "../imagenes/cereales-carbohidratos/Cereal de avena Quaker Multibran con pasas 420 g.jpg",
                    "../imagenes/cereales-carbohidratos/Cereal Great Value Bran Fibra Flakes 620 g.jpg",
                    "../imagenes/cereales-carbohidratos/Cereal hojuelas de trigo integral Nestl Fitness con fruta 350 g.jpg",
                    "../imagenes/cereales-carbohidratos/Cereal Nestl Fitness nutrici¢n + energ¡a con avena integral 600 g.jpg",
                    "../imagenes/cereales-carbohidratos/Churros de nopal Susalia Churri Nopal sabor chile lim¢n 200 g.jpg",
                    "../imagenes/cereales-carbohidratos/Elote blanco por pieza.jpg",
                    "../imagenes/cereales-carbohidratos/Galleta de arroz san¡simo con quinoa 108 g.jpg",
                    "../imagenes/cereales-carbohidratos/Galletas de arroz Okko con quinoa 140 g.jpg",
                    "../imagenes/cereales-carbohidratos/Galletas Gamesa Habaneras  salvado y germen 4 rollos de 106.jpg",
                    "../imagenes/cereales-carbohidratos/Galletas Gamesa Habaneras Cl sicas trigo, salvado y germen 117 g.jpg",
                    "../imagenes/cereales-carbohidratos/Galletas Gamesa Habaneras surtidas 468 g.jpg",
                    "../imagenes/cereales-carbohidratos/Galletas Mar¡as Gamesa 3 rollos de 144 g.jpg",
                    "../imagenes/cereales-carbohidratos/Galletas Okko de arroz integral 140 g.jpg",
                    "../imagenes/cereales-carbohidratos/Hojuela de avena Granvita de grano entero 425 g.jpg",
                    "../imagenes/cereales-carbohidratos/Hojuelas de avena Great Value 1 kg.jpg",
                    "../imagenes/cereales-carbohidratos/Hojuelas de avena Quaker Oats integral 475 g.jpg",
                    "../imagenes/cereales-carbohidratos/Medias noches Bimbo cero cero 384 g.jpg",
                    "../imagenes/cereales-carbohidratos/Palomitas de ma¡z ACT II Balance sabor pimienta y lim¢n 130 g.jpg",
                    "../imagenes/cereales-carbohidratos/Palomitas de ma¡z ACT II Balance sabor sal de mar 110 g.jpg",
                    "../imagenes/cereales-carbohidratos/Palomitas Slim Pop mezcla de chiles 110 g.jpg",
                    "../imagenes/cereales-carbohidratos/Pan Barra Francesa 1 Pieza.jpg",
                    "../imagenes/cereales-carbohidratos/Pan Bimbo Multigrano 610 g.jpg",
                    "../imagenes/cereales-carbohidratos/Pan En Barra Bimbo Cero 610 gr.jpg",
                    "../imagenes/cereales-carbohidratos/Pan Francs 1 Pieza.jpg",
                    "../imagenes/cereales-carbohidratos/Pan integral New York Deli & Bagel Premium Golden Grain 625 g.jpg",
                    "../imagenes/cereales-carbohidratos/Pan integral Oroweat 12 granos y semillas 680 g.jpg",
                    "../imagenes/cereales-carbohidratos/Pan integral Oroweat 680 g.jpg",
                    "../imagenes/cereales-carbohidratos/Pan para hamburgesa Bimbo cero cero 528 g.jpg",
                    "../imagenes/cereales-carbohidratos/Papa blanca alfa por kilo.jpg",
                    "../imagenes/cereales-carbohidratos/Papa cambray por kilo.jpg",
                    "../imagenes/cereales-carbohidratos/Pasta Barilla spaghetti Nø7 500 g.jpg",
                    "../imagenes/cereales-carbohidratos/Pasta Barilla spaguetti Nø5 de 500 g.jpg",
                    "../imagenes/cereales-carbohidratos/Pasta Great Value spaghetti 500 g.jpg",
                    "../imagenes/cereales-carbohidratos/Quinoa Goya tricolor org nica 340 g.jpg",
                    "../imagenes/cereales-carbohidratos/Quinoa Okko granos 300 g.jpg",
                    "../imagenes/cereales-carbohidratos/Quinoa T¡a Ofilia org nica 200 g.jpg",
                    "../imagenes/cereales-carbohidratos/Quinoa Verde Valle 340 g.jpg",
                    "../imagenes/cereales-carbohidratos/Quinoa Wand's 220 g.jpg",
                    "../imagenes/cereales-carbohidratos/Sopa de pasta La Moderna Spaghetti 500 g.jpg",
                    "../imagenes/cereales-carbohidratos/Spaghetti La Moderna corto 200 g.jpg",
                    "../imagenes/cereales-carbohidratos/Spaghetti La Moderna integral 200 g.jpg",
                    "../imagenes/cereales-carbohidratos/Tortillas Azucena de ma¡z y nopal 420 g.jpg",
                    "../imagenes/cereales-carbohidratos/Tortillas con nopal Se¤or Cactus original 500 g.jpg",
                    "../imagenes/cereales-carbohidratos/Tortillas de harina T¡a Rosa Tortillinas ligeras 306 g.jpg",
                    "../imagenes/cereales-carbohidratos/Tortillas de nopal Nopalia 500 g.jpg",
                    "../imagenes/cereales-carbohidratos/Tortillas Maiz Nopal 500 gr.jpg",
                    "../imagenes/cereales-carbohidratos/Tortillas Mission ligeras 550 g.jpg",
                    "../imagenes/cereales-carbohidratos/Tostada Horneada Susalia con Ch¡a y Linaza.jpg",
                    "../imagenes/cereales-carbohidratos/Tostadas con nopal Se¤or Cactus horneadas 200 g.jpg",
                    "../imagenes/cereales-carbohidratos/Tostadas de ma¡z azul Salmas horneadas 7 paquetes de 3 pzas.jpg",
                    "../imagenes/cereales-carbohidratos/Tostadas de ma¡z Salmas horneadas 23 paquetes de 3 pzas.jpg",
                    "../imagenes/cereales-carbohidratos/Tostadas de ma¡z San¡simo horneadas 240 g.jpg",
                    "../imagenes/cereales-carbohidratos/Tostadas Great Value de ma¡z horneadas 237.5 g.jpg",
                    "../imagenes/cereales-carbohidratos/Totopo Totopos Maiz Con Nopal Horneados Con Efecto Prebiotico 200g Susalia 200 Gramo Bolsa.jpg",
                    "../imagenes/cereales-carbohidratos/Totopos Sanissimo nopal 200 g.jpg"
                 ];

const nameProductos = ["Alubia grande San Lazaro 500g",
                    "Amaranto Aires de Campo orgánico 250g",
                    "Amaranto Dul Cerel natural 250g",
                    "Arroz La Merced integral 1kg",
                    "Arroz SOS grueso Súper extra 1kg",
                    "Arroz SOS impegable parbolizado 1kg",
                    "Arroz Verde Valle grano grueso 900g",
                    "Arroz Verde Valle precocido blanco 300g",
                    "Avena Aires de Campo orgánica 500g",
                    "Avena Granvita orgánica 350g",
                    "Avena Integral Granvita 1kg",
                    "Avena Quaker 3 minutos 610g",
                    "Avena Quaker Super Foods linaza ch¡a y quinoa 475g",
                    "Avena T¡a Ofilia orgánica 300g",
                    "Barras Great Value integrales 180g",
                    "Barras Nature Valley Crunchy con avena integral y miel 252g",
                    "Camote amarillo en malla 900g",
                    "Camote Amarillo por kg",
                    "Camote de azafrán por kilo",
                    "Camote morado por kilo",
                    "Pan En Barra Bimbo Cero 610g",
                    "Cereal de avena Quaker Multibran con pasas 420g",
                    "Cereal Great Value Bran Fibra Flakes 620g",
                    "Cereal hojuelas de trigo integral Nestl Fitness con fruta 350g",
                    "Cereal Nestle Fitness nutrición y energía con avena integral 600g",
                    "Churros de nopal Susalia Churri Nopal sabor chile limón 200g",
                    "Elote blanco por pieza",
                    "Galleta de arroz san¡simo con quinoa 108g",
                    "Galletas de arroz Okko con quinoa 140g",
                    "Galletas Gamesa Habaneras salvado y germen de 106g",
                    "Galletas Gamesa Habaneras Clásicas trigo, salvado y germen 117g",
                    "Galletas Gamesa Habaneras surtidas 468g",
                    "Galletas Marías Gamesa 3 rollos de 144g",
                    "Galletas Okko de arroz integral 140g",
                    "Hojuela de avena Granvita de grano entero 425g",
                    "Hojuelas de avena Great Value 1kg",
                    "Hojuelas de avena Quaker Oats integral 475g",
                    "Medias noches Bimbo cero cero 384g",
                    "Palomitas de maíz ACT II Balance sabor pimienta y limón 130g",
                    "Palomitas de maíz ACT II Balance sabor sal de mar 110g",
                    "Palomitas Slim Pop mezcla de chiles 110g",
                    "Pan Barra Francesa 1 Pieza",
                    "Pan Bimbo Multigrano 610g",
                    "Pan En Barra Bimbo Cero 610g",
                    "Pan Francés 1 Pieza",
                    "Pan integral New York Deli & Bagel Premium Golden Grain 625g",
                    "Pan integral Oroweat 12 granos y semillas 680g",
                    "Pan integral Oroweat 680g",
                    "Pan para hamburgesa Bimbo cero cero 528g",
                    "Papa blanca alfa por kilo",
                    "Papa cambray por kilo",
                    "Pasta Barilla spaghetti No 7 500g",
                    "Pasta Barilla spaguetti No5 de 500g",
                    "Pasta Great Value spaghetti 500g",
                    "Quinoa Goya tricolor orgánica 340g",
                    "Quinoa Okko granos 300g",
                    "Quinoa T¡a Ofilia orgánica 200g",
                    "Quinoa Verde Valle 340g",
                    "Quinoa Wand's 220g",
                    "Sopa de pasta La Moderna Spaghetti 500g",
                    "Spaghetti La Moderna corto 200g",
                    "Spaghetti La Moderna integral 200g",
                    "Tortillas Azucena de maíz y nopal 420g",
                    "Tortillas con nopal Señor Cactus original 500g",
                    "Tortillas de harina T¡a Rosa Tortillinas ligeras 306g",
                    "Tortillas de nopal Nopalia 500g",
                    "Tortillas Maiz Nopal 500g",
                    "Tortillas Mission ligeras 550g",
                    "Tostada Horneada Susalia con Chía y Linaza",
                    "Tostadas con nopal Señor Cactus horneadas 200g",
                    "Tostadas de maíz azul Salmas horneadas 7 paquetes de 3 piezas",
                    "Tostadas de maíz Salmas horneadas 23 paquetes de 3 piezas",
                    "Tostadas de maíz Sanísimo horneadas 240g",
                    "Tostadas Great Value de maíz horneadas 237g",
                    "Totopos Maiz Con Nopal Horneados 200g",
                    "Totopos Sanissimo nopal 200g" ];



//Construccion del HTML


const crearHtml = () => {


    const html = ` <div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Amaranto Aires de Campo orgánico 250 g.jpg" class="imgProductos" alt="Amaranto Aires de Campo orgánico 250 g"></a>
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





