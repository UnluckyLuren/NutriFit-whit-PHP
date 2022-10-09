
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


//Construccion del HTML


const crearHtml = () => {


    const html = ` <div class="fexcajasPR"><img src="../imagenes/verduras/Zanahoria por kilo.jpg" class="imgProductos" alt="Zanahoria por kilo"></a>
    <div><a  class="boton_walmart walmart" href="https://super.walmart.com.mx/verduras/zanahoria-por-kilo/00000000004094" target="ba_blank">Ver en walmart</a></div>
    <div><a  class="boton_soriana soriana" href="https://www.soriana.com/zanahoria-kg/515.html" target="ba_blank">Ver en soriana</a>
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
    const walmartLink = document.querySelectorAll('.walmart');
    const sorianaLink = document.querySelectorAll('.soriana');


    for ( let i=0; i<Linksimg.length; i++ ) {

        imgs[i].src = Linksimg[i];
        
    }

}


InitialHtml();





