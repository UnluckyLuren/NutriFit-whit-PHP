const names = document.querySelectorAll('.eName'),
    source = document.querySelectorAll('.pdfSource'),
    dietaSrc = document.getElementById('dietaSrc'),
    iframeSrc = document.getElementById('iframeSrc'),
    containFormEmp = document.getElementById('containFormEmp');


names[0].addEventListener('click', () => {
    let prueba = `${source[0].textContent}`;

    dietaSrc.classList.remove('disNone');
    containFormEmp.style.display="inline";
    iframeSrc.src=`${prueba}`;
})


names[1].addEventListener('click', () => {
    let prueba = `${source[1].textContent}`;

    dietaSrc.classList.remove('disNone');
    containFormEmp.style.display="inline";
    iframeSrc.src=`${prueba}`;
})





