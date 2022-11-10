
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
                    "../imagenes/Leguminosas/Frijol Verde Valle peruano 900 g.JPG",
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

                 const nameProducto = ["1 Kg De Soya Texturizada Sabor Res Excelente Calidad",
                    "Alubia Gran Valor 500 g",
                    "Alubia grande San Lazaro 500 g",
                    "Alubia Great Value 500 g",
                    "Alubia La Merced 500 g",
                    "Alubia Verde Valle 500 g",
                    "Alubias Cidacos con Verduras 425g",
                    "Alubias Cidacos Extra 570g",
                    "Alubias Cidacos Judion Extra Grande 570g",
                    "Biolicious Organico Alubia",
                    "Fresas congeladas La Huerta 500g",
                    "Frijoles Refritos Bayos Sin Grasa Isadora 430g",
                    "Frijol negro Verde Valle 1kg",
                    "Frijol peruano Great Value 900g",
                    "Frijol Verde Valle peruano 900g",
                    "Frijoles bayos Great Value refritos 430g",
                    "Frijoles peruanos Isadora refritos 430g",
                    "Frijoles Refritos Bayos Sin Grasa Isadora 430g",
                    "Germinado de Alfalfa",
                    "Haba Great Value 500g",
                    "Haba La Merced pelada 500g",
                    "Lentejas Great Value 500g",
                    "Lentejas Verde Valle 500g",
                    "Soja Cerepak Texturizada 300g",
                    "Soja La Colina texturizada 330g",
                    "Soya Cerepak Texturizada Sabor Res 300g",
                    "Soya texturizada Wand's natural 330g",
                    "Soya texturizada Wand's sabor chorizo 300g",
                    "Varita de soja texturizada natural 330g"
                 ];


const linksWalmart = [  "https://articulo.mercadolibre.com.mx/MLM-810758447-1-kg-de-soya-texturizada-sabor-res-excelente-calidad-_JM?matt_tool=28238160&utm_source=google_shopping&utm_medium=organic",
    	                " ",
                        "https://super.walmart.com.mx/arroz-frijol-y-semillas/alubia-grande-san-lazaro-500-g/00750108894005?adBanner=express&adStoreId=0000009998",
                        "https://super.walmart.com.mx/arroz-frijol-y-semillas/alubia-great-value-500-g/00750179162458?adBanner=express&adStoreId=0000009998",
                        " ",
                        " ",
                        "https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/vegetales-y-chiles-envasados/alubias-cidacos-con-verduras-425g_00841031343181",
                        "https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/vegetales-y-chiles-envasados/alubias-cidacos-extra-570g_00841031331581",
                        "https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/vegetales-y-chiles-envasados/alubias-cidacos-judion-extra-grande-570g_00841031331586",
                        " ",
                        "https://super.walmart.com.mx/frutas-y-verduras-congeladas/fresas-congeladas-la-huerta-500-g/00750104790260",
                        "https://super.walmart.com.mx/alimentos-instantaneos/frijoles-bayos-isadora-refritos-430-g/00750107130778",
                        "https://super.walmart.com.mx/arroz-frijol-y-semillas/frijol-negro-verde-valle-1-kg/00750107130149",
                        "https://super.walmart.com.mx/arroz-frijol-y-semillas/frijol-great-value-peruano-900-g/00750179163864",
                        "https://super.walmart.com.mx/arroz-frijol-y-semillas/frijol-verde-valle-peruano-900-g/00750107130104",
                        "https://super.walmart.com.mx/alimentos-instantaneos/frijoles-bayos-great-value-refritos-430-g/00750649500810",
                        "https://super.walmart.com.mx/alimentos-instantaneos/frijoles-peruanos-isadora-refritos-430-g/00750107130777",
                        "https://super.walmart.com.mx/alimentos-instantaneos/frijoles-bayos-isadora-refritos-430-g/00750107130778",
                        "https://super.walmart.com.mx/verduras/germinado-de-alfalfa-con-aderezo-mil-islas-san-francisco-cultivos-naturales-80-g/00076936110025?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwl7qSBhD-ARIsACvV1X1x7cFjYDKq9egKZ4riNKMvS8EN8OaNaEtDke973OtI-nPUE2Enp2QaAiztEALw_wcB",
                        "https://super.walmart.com.mx/arroz-frijol-y-semillas/haba-great-value-500-g/00750179161963",
                        "https://super.walmart.com.mx/arroz-frijol-y-semillas/haba-la-merced-pelada-500-g/00750104720073",
                        "https://super.walmart.com.mx/arroz-frijol-y-semillas/lentejas-great-value-500-g/00750179162460?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjw9e6SBhB2EiwA5myr9m4OOmQ5WaNB8HCgKpjyDVRDrDKaw2SBxMnIaXigOR2Dfq2UeykqMRoCrxYQAvD_BwE",
                        "https://super.walmart.com.mx/arroz-frijol-y-semillas/lentejas-verde-valle-500-g/00750107130115",
                        "https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/pescados-y-mariscos/soya-cerepak-texturizada-300-g_00750106082354",
                        " ",
                        " ",
                        "https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/pescados-y-mariscos/soya-cerepak-texturizada-300-g_00750106082354",
                        "https://super.walmart.com.mx/enlatados-y-conservas/soya-texturizada-wand-s-sabor-chorizo-300-g/00750046389040?adBanner=express&adStoreId=0000009998",
                        " ",
];
 

//Construccion del HTML


const crearHtml = () => {


    const html = ` <div class="fexcajasPR"><img src="/imagenes/Leguminosas/GerminadodeAlfalfa.jpg" class="imgProductos" alt="Germinado de alfalfa"></a> 
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
        imgs[i].alt = nameProducto[i];
        title[i].textContent = nameProducto[i];
        
    }


}


InitialHtml();





