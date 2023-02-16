//  Objetos

const open = document.getElementById('open'); 
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');


const updateGratisUser = document.getElementById('btnEnviarImg'),
    updateUnlock = document.getElementById('updateUnlock'),
    progressBlock = document.getElementById('progressBlock');


//  Funciones




//  Eventos


updateGratisUser.addEventListener('click',() => {

    updateUnlock.classList.toggle('disNone');
    console.log(updateUnlock);

    let timerId = setInterval(() => { updateUnlock.classList.add('disNone'); }, 2000);

    // después de 2 segundos parar
    setTimeout(() => { clearInterval(timerId); }, 2000);

});

progressBlock.addEventListener('click',() => {

    updateUnlock.classList.toggle('disNone');

    let timerId = setInterval(() => { updateUnlock.classList.add('disNone'); }, 2000);

    // después de 2 segundos parar
    setTimeout(() => { clearInterval(timerId); }, 2000);

});



open.addEventListener('click', () => {
    modal_container.classList.add('show');
});

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});











