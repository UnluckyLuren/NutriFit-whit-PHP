
//Declaración variables

const body = document.body,
      ContainerProd = document.getElementById('ContainerProdHTML');


// Direcciones

const Linksimg = ["imagenes/proteinas/Alitas de pollo org nicas Aires de Campo por kilo.jpg",
                "imagenes/proteinas/Arrachera de pavo Dos familias finas hierbas 500 g.jpg",
                "imagenes/proteinas/Arrachera de pollo Pilgrim's marinado sabor jalape¤o 500 g.jpg",
                "imagenes/proteinas/At£n Dolores aleta amarilla en agua 295 g.jpg",
                "imagenes/proteinas/At£nHerdezEnAgua.jpg",
                "imagenes/proteinas/Bistec de pulpa Kowi 600 g.jpg",
                "imagenes/proteinas/Bistec de res por kilo.jpg",
                "imagenes/proteinas/Bisteck de res por kg.jpg",
                "imagenes/proteinas/Brochetas de pollo preparadas por kg.jpg",
                "imagenes/proteinas/Camar¢n Mediano Sin Cabeza Kg.jpg",
                "imagenes/proteinas/Carne molida de pollo por kilo.jpg",
                "imagenes/proteinas/Carne para hamburguesa Dolores Premium de at£n aleta amarilla 400 g.jpg",
                "imagenes/proteinas/Clara de huevo San Juan l¡quida 500 g.jpg",
                "imagenes/proteinas/Claras de Huevo San Juan 1 kg.jpg",
                "imagenes/proteinas/Cola Langosta Kg.jpg",
                "imagenes/proteinas/Cubitos de at£n Dolores aleta amarilla 200 g.jpg",
                "imagenes/proteinas/Fajitas de pollo Pilgrim's a las finas hierbas 500 g.jpg",
                "imagenes/proteinas/Fajitas pechuga de pollo congeladas por kilo.jpg",
                "imagenes/proteinas/Filete de at£n Dolores Premium con costra de ajonjol¡ 304 g.jpg",
                "imagenes/proteinas/Filete de calamar por kg.jpg",
                "imagenes/proteinas/Filete de r¢balo Marketside Premium 500 g.jpg",
                "imagenes/proteinas/Filete de Salm¢n Descongelado Kg.jpg",
                "imagenes/proteinas/Filete Sealect Salm¢n 100 gr.jpg",
                "imagenes/proteinas/Filetes de huachinango Marketside Premium 500 g.jpg",
                "imagenes/proteinas/Filetes de pollo Bachoco Pr cticos congelados sabor mezquite 700 g.jpg",
                "imagenes/proteinas/Filetes de tilapia sin piel Marketside 500 g.jpg",
                "imagenes/proteinas/Huevo Blanco Bachoco 18 Piezas.jpg",
                "imagenes/proteinas/Huevo blanco Bachoco fresco 30 pzas.jpg",
                "imagenes/proteinas/Huevo blanco EïNatural libre pastoreo 12 pzas.jpg",
                "imagenes/proteinas/Huevo blanco El Calvario 18 pzas.jpg",
                "imagenes/proteinas/Huevo Blanco San Juan 18 Piezas.jpg",
                "imagenes/proteinas/Huevo Rojo Bachoco 12 Pz.jpg",
                "imagenes/proteinas/Jam¢n de pavo FUD virginia 450 g.jpg",
                "imagenes/proteinas/Jam¢n de pavo Zwan premium 400 g.jpg",
                "imagenes/proteinas/Jamon_de_pavo_Bafar_400_g.jpg",
                "imagenes/proteinas/Jamon_de_pavo_FUD_Cuida-t__virginia_290_g.jpg",
                "imagenes/proteinas/Jamon_de_pavo_Great_Value_tipo_virginia_450_g.jpg",
                "imagenes/proteinas/Jamon_de_pavo_San_Rafael_real_300_g.jpg",
                "imagenes/proteinas/LecheAlmendraSilk.jpg",
                "imagenes/proteinas/LecheAlpura.jpg",
                "imagenes/proteinas/LecheLala.jpg",
                "imagenes/proteinas/LecheLalaLight.jpg",
                "imagenes/proteinas/Medall¢n de at£n rojo Dolores 200 g.jpg",
                "imagenes/proteinas/Medallones de at£n premium Marketside aleta amarilla 680 g.jpg",
                "imagenes/proteinas/Milanesa de bola de res por kilo.jpg",
                "imagenes/proteinas/Milanesa de cara de res pulpa negra por kilo.jpg",
                "imagenes/proteinas/Milanesa de pechuga de pollo org nica 900 g aprox.jpg",
                "imagenes/proteinas/Milanesa de pechuga de pollo por kilo.jpg",
                "imagenes/proteinas/Milanesa de pollo Selecto por kilo.jpg",
                "imagenes/proteinas/Milanesa de res por kg.jpg",
                "imagenes/proteinas/Milanesa de res pulpa blanca por kilo.jpg",
                "imagenes/proteinas/Mojarra tilapia por kilo.jpg",
                "imagenes/proteinas/Muslo de pollo sin piel por kilo.jpg",
                "imagenes/proteinas/Muslo de Pollo sin Rabadilla Pilgrims Kg.jpg",
                "imagenes/proteinas/Muslo org nico sin piel por kilo.jpg",
                "imagenes/proteinas/Muslo Selecto por kilo Piligrimïs.jpg",
                "imagenes/proteinas/PanelaAlpura.jpg",
                "imagenes/proteinas/PanelaBionda.jpg",
                "imagenes/proteinas/PanelaBove.jpg",
                "imagenes/proteinas/PanelaCuidaT.png",
                "imagenes/proteinas/PanelaFud.png",
                "imagenes/proteinas/PanelaLala.jpg",
                "imagenes/proteinas/PanelaNocheBuena.jpg",
                "imagenes/proteinas/Pechuga de pollo con hueso y sin piel por kilo.jpg",
                "imagenes/proteinas/Pechuga de pollo sin hueso org nica 900 g aprox.jpg",
                "imagenes/proteinas/Pechuga sin hueso Selecto por kilo.jpg",
                "imagenes/proteinas/Pierna Bate de Pollo Pilgrims Kg.jpg",
                "imagenes/proteinas/Pierna de Pollo Org nica Aires de Campo Kg.jpg",
                "imagenes/proteinas/Pulpo Kg.jpg",
                "imagenes/proteinas/RequesonBionda.png",
                "imagenes/proteinas/RequesonSantaInes.png",
                "imagenes/proteinas/Roles de Salm¢n Shell Pride 171 gr.jpg",
                "imagenes/proteinas/Salm¢n Marketside sin piel 500 g.jpg",
                "imagenes/proteinas/Sashimi de At£n Dolores.jpg",
                "imagenes/proteinas/Tender Pilgrimïs pechuga de pollo por kilo.jpg",
                "imagenes/proteinas/YogurthChobani.jpg",
                "imagenes/proteinas/YogurthFage.jpg",
                "imagenes/proteinas/YogurthVitaLinea.jpg",
                "imagenes/proteinas/YogurthYoplaitDobleCero.jpg",
                "imagenes/proteinas/YogurthYoplaitGriegoSinEndulzar.jpg",
                "imagenes/proteinas/YogurthYplaitSkyr.jpg" ];


//Construccion del HTML


const crearHtml = () => {


    const html = ` <div class="fexcajasPR"><img src="" class="imgProductos" ></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/carnes-frias/jamon-de-pavo-zwan-premium-400-g/00750105771102" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/jamon-de-pavo-zwan-virginia-400-gr/11530360.html?gclid=CjwKCAjwi6WSBhA-EiwA6Niok1W9DL2IAv22qCfMwiP35oiIdJxpiW8xhGvCeMNmQLNYH0xGZ2h9nRoCHncQAvD_BwE#fo_c=1341&fo_k=e9f87a274e299b961e487170fcc5eb50&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
    </div></div> `;

    const div = document.createElement('div');
    div.innerHTML = html;
    
    ContainerProd.append( div );


}

const InitialHtml = () => {


    for ( let i=0; i<Linksimg.length; i++ ) {

        crearHtml();
        
    }

    const imgs = document.querySelectorAll('.imgProductos');
    // const walmartLink = document.querySelectorAll('.walmart');
    // const sorianaLink = document.querySelectorAll('.soriana');


    for ( let i=0; i<Linksimg.length; i++ ) {

        imgs[i].src = Linksimg[i];
        
    }

}


InitialHtml();





