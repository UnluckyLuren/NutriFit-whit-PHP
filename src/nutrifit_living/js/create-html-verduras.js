
//Declaración variables

const body = document.body,
      ContainerProd = document.getElementById('ContainerProdHTML');


// Direcciones

const Linksimg = ["../imagenes/verduras/Acelga por pieza.jpg",
                 "../imagenes/verduras/Alcachofa por pieza.jpg", 
                 "../imagenes/verduras/Apio por kilo.jpg",
                 "../imagenes/verduras/Betabel Fresh Gourmet crujiente con vinagreta bals mica 99 g.jpg",
                 "../imagenes/verduras/Betabel por kilo.jpg",
                 "../imagenes/verduras/Betabel Vegetalistos rallado 390 g.jpg",
                 "../imagenes/verduras/Bits de coliflor Eva simple veggies 454 g.jpg",
                 "../imagenes/verduras/Calabaza japonesa por kilo.jpg",
                 "../imagenes/verduras/Cebolla amarilla por kilo.jpg",
                 "../imagenes/verduras/Cebolla blanca por kilo.jpg",
                 "../imagenes/verduras/Cebolla morada por kilo.jpg",
                 "../imagenes/verduras/Cebollitas cambray por pieza.jpg",
                 "../imagenes/verduras/Ch¡charo en vaina por kilo.jpg",
                 "../imagenes/verduras/Ch¡charo japons por kilo.jpg",
                 "../imagenes/verduras/Ch¡charos Great Value frescos congelados 500 g.jpg",
                 "../imagenes/verduras/Ch¡charos La Coste¤a 420 g.jpg",
                 "../imagenes/verduras/Champi¤on rebanado Monteblanco 225 g.jpg",
                 "../imagenes/verduras/Champi¤ones Monte Rey portabello entero 500 g.jpg",
                 "../imagenes/verduras/Champi¤ones por kilo.jpg",
                 "../imagenes/verduras/Chayote cambray por kilo.jpg",
                 "../imagenes/verduras/Chayote negro por kilo.jpg",
                 "../imagenes/verduras/Chayote sin espinas por kilo.jpg",
                 "../imagenes/verduras/Col blanca por kilo.jpg",
                 "../imagenes/verduras/Col morada por kilo.jpg",
                 "../imagenes/verduras/Coliflor por pieza.jpg",
                 "../imagenes/verduras/Corazones de apio org nicos Campo Vivo 450 g.jpg",
                 "../imagenes/verduras/Corazones de apio org nicos Marketside 454 g.jpg",
                 "../imagenes/verduras/Ejote por kilo.jpg",
                 "../imagenes/verduras/Ejotes Great Value congelados cortados en trozos 500 g.jpg",
                 "../imagenes/verduras/Esp rrago blanco en bolsa 500 g.jpg",
                 "../imagenes/verduras/Esp rrago verde por pieza.jpg",
                 "../imagenes/verduras/Espinaca baby Marketside 250 g.jpg",
                 "../imagenes/verduras/Espinaca baby Vegetalistos 250 g.jpg",
                 "../imagenes/verduras/Espinaca Marketside 280 g.jpg",
                 "../imagenes/verduras/Espinaca Mr. Lucky Popeye 284 g.jpg",
                 "../imagenes/verduras/Espinaca org nica Campo Vivo 180 g.jpg",
                 "../imagenes/verduras/Espinacas por pieza.jpg",
                 "../imagenes/verduras/Flor de calabaza por pieza.jpg",
                 "../imagenes/verduras/Floretes de coliflor Mr. Lucky 454 g.jpg",
                 "../imagenes/verduras/J¡cama por kilo.jpg",
                 "../imagenes/verduras/Pimiento naranja por kilo.jpg",
                 "../imagenes/verduras/Jitomate beef gourmet por kilo.jpg",
                 "../imagenes/verduras/Jitomate bola por kilo.jpg",
                 "../imagenes/verduras/Jitomate cherry org nico Campo Vivo 280 g.jpg",
                 "../imagenes/verduras/Jitomate saladet por kilo.jpg",
                 "../imagenes/verduras/Lechuga dulce sucrine Fresh Garden 500 g.jpg",
                 "../imagenes/verduras/Lechuga francesa Eva hidrop¢nica 1 pza.jpg",
                 "../imagenes/verduras/Lechuga italiana Eva hidrop¢nica 1 pza.jpg",
                 "../imagenes/verduras/Lechuga morada por pieza.jpg",
                 "../imagenes/verduras/Lechuga orejona por pieza.jpg",
                 "../imagenes/verduras/Lechuga romana por pieza.jpg",
                 "../imagenes/verduras/Maceta Org nica Vita Calabacita 1 pza.jpg",
                 "../imagenes/verduras/Mezcla de vegetales Marketside 454 g.jpg",
                 "../imagenes/verduras/Nopal cambray empacado por kilo.jpg",
                 "../imagenes/verduras/Nopal limpio por kilo.jpg",
                 "../imagenes/verduras/Palitos de apio org nico Marketside 400 g.jpg",
                 "../imagenes/verduras/Pepino blanco por kilo.jpg",
                 "../imagenes/verduras/Pepino org nico Marketside 700 g.jpg",
                 "../imagenes/verduras/Pepino por kilo.jpg",
                 "../imagenes/verduras/Perejil chino por pieza.jpg",
                 "../imagenes/verduras/Perejil criollo por pza.jpg",
                 "../imagenes/verduras/Perejil liso por pieza.jpg",
                 "../imagenes/verduras/Perejil org nico Campo Vivo 100 g.jpg",
                 "../imagenes/verduras/Pimiento amarillo por kilo.jpg",
                 "../imagenes/verduras/Pimiento morr¢n Marketside sem foro 3 pzas.jpg",
                 "../imagenes/verduras/Pimiento naranja por kilo.jpg",
                 "../imagenes/verduras/Pimiento rojo por kilo.jpg",
                 "../imagenes/verduras/Pimiento verde por kilo.jpg",
                 "../imagenes/verduras/Tomates Nature Sweet Cherubs 283 g.jpg",
                 "../imagenes/verduras/Verdolagas por kilo.jpg",
                 "../imagenes/verduras/Zanahoria baby Marketside 340 g.jpg",
                 "../imagenes/verduras/Zanahoria Bolthouse Farms 454 g.jpg",
                 "../imagenes/verduras/Zanahoria org nica Campo Vivo 450 g.jpg",
                 "../imagenes/verduras/Zanahoria por kilo.jpg",
                 "../imagenes/verduras/Zanahoria rallada Vegetalistos 340 g.jpg"];


const nameProductos = ["Acelga por pieza",
                 "Alcachofa por pieza", 
                 "Apio por kilo",
                 "Betabel Fresh Gourmet crujiente con vinagreta balsámica 100g",
                 "Betabel por kilo",
                 "Betabel Vegetalistos rallado 390g",
                 "Bits de coliflor Eva simple veggies 454g",
                 "Calabaza japonesa por kilo",
                 "Cebolla amarilla por kilo",
                 "Cebolla blanca por kilo",
                 "Cebolla morada por kilo",
                 "Cebollitas cambray por pieza",
                 "Chícharo en vaina por kilo",
                 "Chícharo japons por kilo",
                 "Chícharos Great Value frescos congelados 500g",
                 "Chícharos La Costeña 420g",
                 "Champiñon rebanado Monteblanco 225g",
                 "Champiñones Monte Rey portabello entero 500g",
                 "Champiñones por kilo",
                 "Chayote cambray por kilo",
                 "Chayote negro por kilo",
                 "Chayote sin espinas por kilo",
                 "Col blanca por kilo",
                 "Col morada por kilo",
                 "Coliflor por pieza",
                 "Corazones de apio orgánicos Campo Vivo 450g",
                 "Corazones de apio orgánicos Marketside 454g",
                 "Ejote por kilo",
                 "Ejotes Great Value congelados cortados en trozos 500g",
                 "Espárrago blanco en bolsa 500g",
                 "Espárrago verde por pieza",
                 "Espinaca baby Marketside 250g",
                 "Espinaca baby Vegetalistos 250g",
                 "Espinaca Marketside 280g",
                 "Espinaca Mr. Lucky Popeye 284g",
                 "Espinaca orgánica Campo Vivo 180g",
                 "Espinacas por pieza",
                 "Flor de calabaza por pieza",
                 "Floretes de coliflor Mr. Lucky 454g",
                 "Jícama por kilo",
                 "Pimiento naranja por kilo",
                 "Jitomate beef gourmet por kilo",
                 "Jitomate bola por kilo",
                 "Jitomate cherry orgánico Campo Vivo 280g",
                 "Jitomate saladet por kilo",
                 "Lechuga dulce sucrine Fresh Garden 500g",
                 "Lechuga francesa Eva hidropónica 1 pza",
                 "Lechuga italiana Eva hidropónica 1 pza",
                 "Lechuga morada por pieza",
                 "Lechuga orejona por pieza",
                 "Lechuga romana por pieza",
                 "Maceta Orgánica Vita Calabacita 1 pza",
                 "Mezcla de vegetales Marketside 454g",
                 "Nopal cambray empacado por kilo",
                 "Nopal limpio por kilo",
                 "Palitos de apio orgánico Marketside 400g",
                 "Pepino blanco por kilo",
                 "Pepino orgánico Marketside 700g",
                 "Pepino por kilo",
                 "Perejil chino por pieza",
                 "Perejil criollo por pieza",
                 "Perejil liso por pieza",
                 "Perejil orgánico Campo Vivo 100g",
                 "Pimiento amarillo por kilo",
                 "Pimiento morr¢n Marketside semáforo 3 piezas",
                 "Pimiento naranja por kilo",
                 "Pimiento rojo por kilo",
                 "Pimiento verde por kilo",
                 "Tomates Nature Sweet Cherubs 283g",
                 "Verdolagas por kilo",
                 "Zanahoria baby Marketside 340g",
                 "Zanahoria Bolthouse Farms 454g",
                 "Zanahoria orgánica Campo Vivo 450g",
                 "Zanahoria por kilo",
                 "Zanahoria rallada Vegetalistos 340g"];


//Construccion del HTML


const crearHtml = () => {


    const html = ` <div class="fexcajasPR"><img src="../imagenes/verduras/Zanahoria por kilo.jpg" class="imgProductos" alt="Zanahoria por kilo"></a>
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





