const buscarBtn = document.getElementById('buscarBtn');
const buscadorGeneral = document.getElementById('buscadorGeneral');

buscarBtn.addEventListener('click', () => {

    window.location="general-productos.php";

})


buscadorGeneral.addEventListener('keyup', () => {

    let prodctBuscar = buscadorGeneral.value;
    window.location="general-productos.php";

})



