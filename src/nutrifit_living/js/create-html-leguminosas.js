
//Declaración variables

const body = document.body,
      ContainerProd = document.getElementById('ContainerProdHTML');


// Direcciones

const Linksimg = ["../imagenes/Leguminosas/1 Kg De Soya Texturizada Sabor Res Excelente Calidad.jpg",
                    "../imagenes/Leguminosas/Alubia Gran Valor 500 g.jpg",
                    "../imagenes/Leguminosas/Alubia grande San L zaro 500 g.jpg",
                    "../imagenes/Leguminosas/Alubia Great Value 500 g.jpg",
                    "../imagenes/Leguminosas/Alubia La Merced 500 g.jpg",
                    "../imagenes/Leguminosas/Alubia Verde Valle 500 Gr.jpg",
                    "../imagenes/Leguminosas/Alubias Cidacos con Verduras 425g.jpg",
                    "../imagenes/Leguminosas/Alubias Cidacos Extra 570g.jpg",
                    "../imagenes/Leguminosas/Alubias Cidacos Judion Extra Grande 570g.jpg",
                    "../imagenes/Leguminosas/Biolicious Organico Alubia.jpg",
                    "../imagenes/Leguminosas/Fresas congeladas La Huerta 500 g.jpg",
                    "../imagenes/Leguminosas/Frijoles Refritos Bayos Sin Grasa Isadora 430 Gr.jpg",
                    "../imagenes/Leguminosas/Frijol negro Verde Valle 1 kg.jpg",
                    "../imagenes/Leguminosas/Frijol peruano Great Value 900 g.jpg",
                    "../imagenes/Leguminosas/Frijol Verde Valle peruano 900 g.jpg",
                    "../imagenes/Leguminosas/Frijoles bayos Great Value refritos 430 g.jpg",
                    "../imagenes/Leguminosas/Frijoles peruanos Isadora refritos 430 g.jpg",
                    "../imagenes/Leguminosas/Frijoles Refritos Bayos Sin Grasa Isadora 430 Gr.jpg",
                    "../imagenes/Leguminosas/GerminadodeAlfalfa.jpg",
                    "../imagenes/Leguminosas/Haba Great Value 500 g.jpg",
                    "../imagenes/Leguminosas/Haba La Merced pelada 500 g.jpg",
                    "../imagenes/Leguminosas/Lentejas Great Value 500 g.jpg",
                    "../imagenes/Leguminosas/Lentejas Verde Valle 500 g.jpg",
                    "../imagenes/Leguminosas/Soja Cerepak Texturizada 300 g.jpg",
                    "../imagenes/Leguminosas/Soja La Colina texturizada 330 g.jpg",
                    "../imagenes/Leguminosas/Soya Cerepak Texturizada Sabor Res 300 g.jpg",
                    "../imagenes/Leguminosas/Soya texturizada Wand's natural 330 g.jpg",
                    "../imagenes/Leguminosas/Soya texturizada Wand's sabor chorizo 300 g.jpg",
                    "../imagenes/Leguminosas/Varita de soja texturizada natural 330 g.jpg"
                 ];


//Construccion del HTML


const crearHtml = () => {


    const html = ` <div class="fexcajasPR"><img src="/imagenes/Leguminosas/GerminadodeAlfalfa.jpg" class="imgProductos" alt="Germinado de alfalfa"></a>

    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/germinado-de-alfalfa-con-aderezo-mil-islas-san-francisco-cultivos-naturales-80-g/00076936110025?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwl7qSBhD-ARIsACvV1X1x7cFjYDKq9egKZ4riNKMvS8EN8OaNaEtDke973OtI-nPUE2Enp2QaAiztEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/alfalfa-san-francisco-con-amaranto-200-g/1543581.html" target="ba_blank">Ver en soriana</a>
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





