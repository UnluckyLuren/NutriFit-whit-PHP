//  Obj DOM

const mapDirectionLugares = document.getElementById('mapDirectionLugares'),
    containerMap = document.getElementById('containerMap'),
    ContainerProdHTML = document.getElementById('ContainerProdHTML'),
    close = document.getElementById('close'),
    mapIframe = document.getElementById('mapIframe'),
    imgsMapsSelects = document.querySelectorAll('.imgMapSelec');


// Eventos


ContainerProdHTML.addEventListener('click', e => {
    let tag = e.target.tagName,
    imgProductSelect = document.getElementById('imgProductSelect'),
    titleProductSelect = document.getElementById('titleProductSelect');
        
    if ( tag === "IMG" ) {
        imgProductSelect.src = e.target.src;
        titleProductSelect.textContent = e.target.alt;
        
        document.body.classList.toggle('ocultScroll');
        containerMap.classList.toggle('disNone');
        mapDirectionLugares.classList.toggle('disNone');
        mapDirectionLugares.classList.toggle('mapDirectionLugares');
    }

});

imgsMapsSelects[1].addEventListener('click', () => {
    imgsMapsSelects[1].classList.add('imgSelectLugar');
    imgsMapsSelects[0].classList.remove('imgSelectLugar');
    imgsMapsSelects[2].classList.remove('imgSelectLugar');
    imgsMapsSelects[3].classList.remove('imgSelectLugar');

    let iframeUrl = `<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1q9_M3mFoELdj9jq2oQ9dcdWn103JATc&ehbc=2E312F" width="640" height="480"></iframe>`
    mapIframe.innerHTML = iframeUrl;
});

imgsMapsSelects[2].addEventListener('click', () => {
    imgsMapsSelects[2].classList.add('imgSelectLugar');
    imgsMapsSelects[0].classList.remove('imgSelectLugar');
    imgsMapsSelects[1].classList.remove('imgSelectLugar');
    imgsMapsSelects[3].classList.remove('imgSelectLugar');

    let iframeUrl = `<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1_gcFNHnyMYIqSCZbiU4xJYamp0csXwc&ehbc=2E312F" width="640" height="480"></iframe>`;
    mapIframe.innerHTML= iframeUrl;

});

imgsMapsSelects[3].addEventListener('click', () => {
    imgsMapsSelects[3].classList.add('imgSelectLugar');
    imgsMapsSelects[0].classList.remove('imgSelectLugar');
    imgsMapsSelects[1].classList.remove('imgSelectLugar');
    imgsMapsSelects[2].classList.remove('imgSelectLugar');

    let iframeUrl = `<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1xMdB6M4Pdtwcqh1N_CLgIK2yWpF-ZnU&ehbc=2E312F" width="640" height="480"></iframe>`;
    mapIframe.innerHTML = iframeUrl;
});

imgsMapsSelects[0].addEventListener('click', () => {
    imgsMapsSelects[0].classList.add('imgSelectLugar');
    imgsMapsSelects[1].classList.remove('imgSelectLugar');
    imgsMapsSelects[2].classList.remove('imgSelectLugar');
    imgsMapsSelects[3].classList.remove('imgSelectLugar');

    let iframeUrl = `<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1L5SUu3RgqrKnrYEdCSRr0sKu3SAORWU&ehbc=2E312F" width="640" height="480"></iframe>`;
    mapIframe.innerHTML= iframeUrl;
});

close.addEventListener('click', () => {
    document.body.classList.toggle('ocultScroll');
    containerMap.classList.toggle('disNone');
    mapDirectionLugares.classList.toggle('disNone');
    mapDirectionLugares.classList.toggle('mapDirectionLugares');
})








