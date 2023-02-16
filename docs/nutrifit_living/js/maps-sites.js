//  Obj DOM

const mapDirectionLugares = document.getElementById('mapDirectionLugares'),
    containerMap = document.getElementById('containerMap'),
    ContainerProdHTML = document.getElementById('containerLugares'),
    close = document.getElementById('close'),
    mapIframe = document.getElementById('mapIframe'),
    imgsMapsSelects = document.querySelectorAll('.imgMapSelec');


// Eventos

ContainerProdHTML.addEventListener('click', e => {
    let tag = e.target.tagName,
    imgProductSelect = document.getElementById('imgProductSelect'),
    titleProductSelect = document.getElementById('titleProductSelect');

    const leyendaContent = document.getElementById('leyendaContent'),
        serviciosContent = document.getElementById('serviciosContent'),
        telefonoContent = document.getElementById('telefonoContent'),
        horarioContent = document.getElementById('horarioContent');

        
    if ( tag === "IMG" ) {
        imgProductSelect.src = e.target.src;
        titleProductSelect.textContent = e.target.alt;
        
        document.body.classList.toggle('ocultScroll');
        containerMap.classList.toggle('disNone');
        mapDirectionLugares.classList.toggle('disNone');
        mapDirectionLugares.classList.toggle('mapDirectionLugares');

        if (e.target.alt === "Azucar de coco") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3749.8132384272467!2d-102.2889589!3d19.974355!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e898352bd7a13%3A0x3c2c10e25afa7dae!2sAzucar%20de%20coco!5e0!3m2!1ses-419!2smx!4v1667263947355!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "SIN HARINAS REFINADAS •SIN LÁCTEOS •SIN AZÚCAR REFINADA •APTA PARA DIABÉTICOS";
            serviciosContent.textContent = "Opciones de servicio: Consumo en el lugar · Entrega a domicilio";
            telefonoContent.textContent = "Teléfono: 3511210092";
            horarioContent.textContent = "Horario:   Lunes-Sábado: 9:00-21:00     Domingo: 12:30-20:00";

        } else if (e.target.alt === "Divino Verde") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29994.867614882558!2d-102.3042392!3d19.993465!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e89ec68403c4b%3A0xa2af1832366c6284!2sDivino%20Verde!5e0!3m2!1ses-419!2smx!4v1667264238282!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "Healthyfood - Restaurante saludable";
            serviciosContent.textContent = "Opciones de servicio: Compras en tienda · Retiro en tienda · Entrega a domicilio";
            telefonoContent.textContent = "Teléfono:  3515154303 - 3511219187";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 9:00-19:30    Sábado: 9:00-19:30";

        } else if (e.target.alt === "Distrito Saludable") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29994.887862232907!2d-102.3042392!3d19.9933587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e89448ca05d1b%3A0xa88254c8a96b981b!2sDistrito%20Saludable!5e0!3m2!1ses-419!2smx!4v1667264313477!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "COMIDA SALUDABLE CON PROTEÍNA";
            serviciosContent.textContent = "Opciones de servicio: Consumo en el lugar · Para llevar · Entrega a domicilio";
            telefonoContent.textContent = "Teléfono: 351 103 4585";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:30-16:00   Sábado: 9:00-13:30  Sábado: 10:00-13:00";

        } else if (e.target.alt === "Bambú") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1874.8975239184492!2d-102.2870646!3d19.9751197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e89a251f77f11%3A0xeb8ba3998b0495f0!2zQmFtYsO6!5e0!3m2!1ses-419!2smx!4v1667264412966!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "DELICIOSAMENTE SALUDABLE";
            serviciosContent.textContent = "Opciones de servicio: Consumo en el lugar · Entrega a domicilio";
            telefonoContent.textContent = "Teléfono: 3511278826";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:30-16:00    Sabado: 8:30-13:00";

        } else if (e.target.alt === "Nutrilab clinic") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14997.178612825808!2d-102.2953898!3d19.9961444!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e89c4f62f8ead%3A0xf74419859b8c89da!2sNutrilab%20Clinic!5e0!3m2!1ses-419!2smx!4v1667264559347!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "BARRA DE COMIDA SALUDABLE";
            serviciosContent.textContent = "Opciones de servicio: Compras en tienda · Retiro en tienda · Entrega a domicilio";
            telefonoContent.textContent = "Teléfono:  351-688-0894";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 9:00-19:00   Sábado: 9:00-14:00";

        } else if (e.target.alt === "Siete Tallos") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7499.772525735196!2d-102.2913184!3d19.9712849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e88e837571005%3A0x948e4f1d1bc699f2!2sSiete%20Tallos!5e0!3m2!1ses-419!2smx!4v1667264577755!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "SOMOS UNA TIENDA QUE COMERCIALIZA PRODUCTOS ORGÁNICOS 100% NATURALES";
            serviciosContent.textContent = "Opciones de servicio: Compras en tienda · Retiro en tienda · Entrega a domicilio";
            telefonoContent.textContent = "Teléfono:  351 185 46 16";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 9:00-20:00   Sábado: 9:00-15:00";

        } 
        
        // else if (e.target.alt === "Agranel") {
        //     let iframe = ` `;
        //     mapIframe.innerHTML = iframe;
        // }


    }

});


close.addEventListener('click', () => {
    document.body.classList.toggle('ocultScroll');
    containerMap.classList.toggle('disNone');
    mapDirectionLugares.classList.toggle('disNone');
    mapDirectionLugares.classList.toggle('mapDirectionLugares');
})








