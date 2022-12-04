// Objetos de html

const btnCambiar = document.getElementById('btnCambiarPlan');

const FormPago = document.getElementById('FormPago'),
FormGratis = document.getElementById('FormGratis'),
InfoApartForms = document.getElementById('InfoApartForms'),
btniraPago = document.getElementById('btniraPago');

// Variables 

let valForm = true;

//  Funciones

const cambiarAFormPago = () => {
    InfoApartForms.classList.remove('moverInfoCardsRigth');
    InfoApartForms.classList.add('moverInfoCardsLeft');
    btniraPago.classList.remove('disNone');
    InfoApartForms.classList.add('btnChangeFormResponsive');

    FormPago.classList.remove('minimizarForm');
    FormPago.classList.remove('showForm');
    FormGratis.classList.add('showForm');
    FormGratis.classList.add('minimizarForm');
  
    footerDieta.classList.remove('objDisplay');
    btnCambiar.textContent='Ver plan Gratuito';
}

const cambiarAFormGratis = () => {
    InfoApartForms.classList.add('moverInfoCardsRigth');
    InfoApartForms.classList.remove('moverInfoCardsLeft');
    btniraPago.classList.add('disNone');
    InfoApartForms.classList.remove('btnChangeFormResponsive');

    FormPago.classList.add('minimizarForm');
    FormPago.classList.add('showForm');
    FormGratis.classList.remove('showForm');
    FormGratis.classList.remove('minimizarForm');

    footerDieta.classList.add('objDisplay');
    btnCambiar.textContent='Ver plan Personalizado';
}


// Eventos

btnCambiar.addEventListener('click', () => {

    if (valForm) {
        cambiarAFormPago();
        valForm= false;

    } else {
        cambiarAFormGratis();
        valForm=true;

    }
});

















