const pdfAbrir = document.getElementById('pdfAbrir'),
    imgClosePdf = document.getElementById('imgClosePdf'),
    containerIframe = document.getElementById('containerIframe');

pdfAbrir.addEventListener('click', () => {
    containerIframe.classList.toggle('disNone');
});

imgClosePdf.addEventListener('click', () => {
    containerIframe.classList.toggle('disNone');
})





