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

        } else if (e.target.alt === "La Zanahoria del Sol") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.5630078532176!2d-102.28899527680078!3d19.9848717850412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e88cf5b7f07f1%3A0xb5e401f7b199081d!2sLa%20Zanahoria%20Del%20Sol!5e0!3m2!1ses-419!2smx!4v1678315572005!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "DISFRUTA PLATILLOS DE COMIDA VEGETARIANA";
            serviciosContent.textContent = "Opciones de servicio: Consumo en el lugar · Para llevar";
            telefonoContent.textContent = "Teléfono:  351 512 2671";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:30- 16:30   Sábado: 9:00-16:00";

        } else if (e.target.alt === "Club de Nutricion Brisa") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d957251.6405937542!2d-103.41450568379413!3d20.413205327603663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e893534bf9585%3A0x9ca305aa054d0466!2sClub%20de%20Nutricion%20Brisa!5e0!3m2!1ses-419!2smx!4v1678316820275!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "ALIMENTOS NUTRICIONALES";
            serviciosContent.textContent = "Opciones de servicio: Consumo en el lugar · Para llevar";
            telefonoContent.textContent = "Teléfono:  351 150 4207";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:30- 16:30   Sábado: 9:00-16:00";

        } else if (e.target.alt === "Food's Garden's") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.880638254331!2d-102.28926208549672!3d19.971521386580537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e89e914a9ba83%3A0xf3ad915a8dd8c974!2sFood&#39;s%20Garden&#39;s!5e0!3m2!1ses-419!2smx!4v1678316846665!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "UN LUGAR RECOMENDADO, 100% SALUDABLE";
            serviciosContent.textContent = "Opciones de servicio: Consumo en el lugar · Para llevar";
            telefonoContent.textContent = "Teléfono:  351 500 1902";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:30- 16:30   Sábado: 9:00-16:00";

        } else if (e.target.alt === "Punto Salad Zamora") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.656131094051!2d-102.29389388549659!3d19.980958586575195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e89cb1b841c75%3A0x3b05f5ef7767f4c5!2sPunto%20Salad%20Zamora!5e0!3m2!1ses-419!2smx!4v1678317366209!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "BAR DE ENSALADAS";
            serviciosContent.textContent = "Opciones de servicio: Consumo en el lugar · Retiros en la puerta · Entrega a domicilio";
            telefonoContent.textContent = "Teléfono:  351 180 2516";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 10:00- 18:00   Sábado: 10:00- 15:00";

        } else if (e.target.alt === "Punto Verde") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.727987758886!2d-102.29203587876914!3d19.977938543642978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e89a6ffffffff%3A0x4c74b6f9e9d6759b!2sPunto%20Verde!5e0!3m2!1ses-419!2smx!4v1678317665974!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "EL FIN MAS ESPERADO LLEGO A PUNTO VERDE";
            serviciosContent.textContent = "Opciones de servicio: Consumo en el lugar · Para llevar";
            telefonoContent.textContent = "Teléfono:  351 115 2368";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 9:00- 13:30    Sábado: 9:00- 13:00";

        } else if (e.target.alt === "Herbalife House") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.747255126704!2d-102.28955748549657!3d19.977128686577377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e89d3f2ad1ff5%3A0xbe812c6b6bdcbd65!2sHerbalife%20House!5e0!3m2!1ses-419!2smx!4v1678317821054!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "CONOCE LOS PRODUCTOS, AMA LOS PRODUCTOS";
            serviciosContent.textContent = "Opciones de servicio: Consumo en el lugar · Para llevar · Entrega a domicilio";
            telefonoContent.textContent = "Teléfono:  351 163 0038";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:00- 13:00   Sábado: 8:00- 13:00";

        } 
        
        // New ciudad Cdmx
        else if (e.target.alt === "Semillero") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120451.32652299602!2d-99.34043740273438!3d19.364651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff9e18f88c2b%3A0xa61970bd9ded5948!2sSemillero!5e0!3m2!1ses-419!2smx!4v1685664537884!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "RESTAURANTE DE COMIDA SALUDABLE";
            serviciosContent.textContent = "Opciones de servicio: Asientos al aire libre · Retiros en la puerta · Entrega sin contacto · Entrega a domicilio · Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  5567319045";
            horarioContent.textContent = "Horario:   Lunes-Miercoles: 8:00- 21:00    Jueves-Viernes: 8:00- 21:00 ";

        } else if (e.target.alt === "Green Me Río Hudson") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120451.32652299602!2d-99.34043740273438!3d19.364651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff37fe00218b%3A0xd6a80c48ecad5488!2sGreen%20Me%20R%C3%ADo%20Hudson!5e0!3m2!1ses-419!2smx!4v1685664653057!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "COMIDA SALUDABLE, FELICIDAD ASEGURADA";
            serviciosContent.textContent = "Opciones de servicio: Entrega sin contacto · Entrega a domicilio · Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  5575822003";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 7:00- 18:00    Sábados: 8:00- 17:00";

        }  else if (e.target.alt === "Sano y Natural") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120451.32652299602!2d-99.34043740273438!3d19.364651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff8a391a426b%3A0x4391b62982eac4b6!2sSano%20y%20Natural!5e0!3m2!1ses-419!2smx!4v1685664936354!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "DELICIOSO Y NUTRITIVO";
            serviciosContent.textContent = "Opciones de servicio: Entrega sin contacto · Entrega a domicilio · Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  5556805609";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 7:00- 17:30    Sábado:No abren";

        }  
        
        // New ciudad Puebla
        else if (e.target.alt === "cielo verde") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120708.30714758042!2d-98.4106548027344!3d19.013789700000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfb9e4b7ea06dd%3A0x12c820dec0936063!2sCielo%20Verde!5e0!3m2!1ses-419!2smx!4v1685666011594!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "UNA ALIMENTACIÓN BALANCEADA ES UNA INVERSIÓN EN TU SALUD";
            serviciosContent.textContent = "Opciones de servicio: Retiros en la puerta · Entrega sin contacto · Entrega a domicilio · Pedidos desde el automóvil · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  2249102933";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:30- 17:30    Sábado-Domingos: 9:00- 17:30";

        }  else if (e.target.alt === "Fitness Food") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120708.30714758042!2d-98.4106548027344!3d19.013789700000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0a13db8ffff%3A0xfa2d630aaf45953c!2sFitness%20Food!5e0!3m2!1ses-419!2smx!4v1685666671475!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "CAMBIA TUS HÁBITOS, CAMBIA TU VIDA";
            serviciosContent.textContent = "Opciones de servicio: Entrega sin contacto · Entrega a domicilio · Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  2225820080";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 9:30- 17:00    Sábado: 9:30- 13:00";

        }  else if (e.target.alt === "Deliska") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120708.30714758042!2d-98.4106548027344!3d19.013789700000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc197c538dfb9%3A0xe3cb105c1755ce95!2sDeliska!5e0!3m2!1ses-419!2smx!4v1685666634089!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "COCINA CON AMOR";
            serviciosContent.textContent = "Opciones de servicio: Entrega a domicilio · Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  2211204711";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:00- 17:00    Sábado: 9:00- 16:00";

        } else if (e.target.alt === "Vitality Kitchen") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120708.30714758042!2d-98.4106548027344!3d19.013789700000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc77a6bb2e2a3%3A0x1bdf0e339fe22a77!2sVitality%20Kitchen!5e0!3m2!1ses-419!2smx!4v1685665925165!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "ELIGE ALIMENTARTE BIEN";
            serviciosContent.textContent = "Opciones de servicio: Asientos al aire libre · Entrega sin contacto · Entrega a domicilio · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  2222104433";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:00- 20:30    Sábado-Domingos: 8:00- 19:30";

        }  
        
        // New ciudad Monterrey
        else if (e.target.alt === "Foodness Mty") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115045.72781270792!2d-100.50248230273434!3d25.698497000000017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662961459b2b2ed%3A0x32d8d129f7ae6d!2sFoodness%20Mty!5e0!3m2!1ses-419!2smx!4v1685667327127!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "DESCUBRE EL PODER DE LOS ALIMENTOS";
            serviciosContent.textContent = "Opciones de servicio: Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  8120929875";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 7:00- 16:00    Domingos: No abren";

        }  else if (e.target.alt === "Menta Maya") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115045.72781270792!2d-100.50248230273434!3d25.698497000000017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662963eb226e651%3A0x5b4118c6a858240d!2sMenta%20Maya%20Comida%20Saludable!5e0!3m2!1ses-419!2smx!4v1685667349170!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "TU BIENESTAR ES NUESTRA PRIORIDAD";
            serviciosContent.textContent = "Opciones de servicio: Entrega a domicilio · Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  8180761101";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 7:30- 16:00    Sábado: 7:30- 13:00";

        } 
        
        // New ciudad Guadalajara
        else if (e.target.alt === "Vida Verde") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119479.65382543062!2d-103.52868880273438!3d20.639485299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1e648bdba2f%3A0x43bb05841a68d32e!2sVida%20Verde.%20Comida%20Saludable!5e0!3m2!1ses-419!2smx!4v1685669318877!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "DESCUBRE UNA NUEVA FORMA DE ALIMENTARTE";
            serviciosContent.textContent = "Opciones de servicio: Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  3339567728";
            horarioContent.textContent = "Horario:   Lunes-Sábado: 7:40- 14:00";

        }  else if (e.target.alt === "Mundo Verde") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119479.65382543062!2d-103.52868880273438!3d20.639485299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae164887a459%3A0xa8a2e104268f8057!2sMundo%20Verde!5e0!3m2!1ses-419!2smx!4v1685669268542!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "EN NUESTRO MENÚ ENCONTRARÁS UN ABANICO DE OPCIONES NUTRITIVAS";
            serviciosContent.textContent = "Opciones de servicio: Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  3336382924";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 8:30- 17:00    Sábado-Domingos: No abren";

        } 
        
        // New ciudad Mazatlan
        else if (e.target.alt === "Saudavel") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58656.3600399369!2d-106.52514005136717!3d23.242268199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f535705ddad1b%3A0xcdd17866c49b380d!2sSaudavel!5e0!3m2!1ses-419!2smx!4v1685671488531!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "DISFRUTA DE UNA COMIDA QUE TE LLENA DE ENERGÍA POSITIVA";
            serviciosContent.textContent = "Opciones de servicio: Retiros en la puerta · Entrega sin contacto · Entrega a domicilio · Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  6692684633";
            horarioContent.textContent = "Horario:   Lunes-Sabado: 8:00- 16:00    Domingo: No abren";

        }else if (e.target.alt === "LA VIDA SANA") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58656.3600399369!2d-106.52514005136717!3d23.242268199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f53c16dd993fb%3A0x20adc031911f9895!2sLA%20VIDA%20SANA!5e0!3m2!1ses-419!2smx!4v1685671561593!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "NUESTRO MENÚ ES UNA ODA A LA VIDA SALUDABLE";
            serviciosContent.textContent = "Opciones de servicio: Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  6696683121";
            horarioContent.textContent = "Horario:   Lunes-Viernes: 7:30- 15:30    Sábado: 7:30- 13:30";

        }else if (e.target.alt === "Puravida") {
            let iframe = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58656.3600399369!2d-106.52514005136717!3d23.242268199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8698abfb6249d24d%3A0x79f4517f34b9ad1c!2sPuravida%20Galerias!5e0!3m2!1ses-419!2smx!4v1685671838488!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            mapIframe.innerHTML = iframe;

            leyendaContent.textContent = "LA NUTRICIÓN ES UNA PRIORIDAD";
            serviciosContent.textContent = "Opciones de servicio: Retiros en la puerta · Entrega a domicilio · Para llevar · Consumo en el lugar";
            telefonoContent.textContent = "Teléfono:  6696884242";
            horarioContent.textContent = "Horario:   Lunes-Domingo: 8:30- 22:00";

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








