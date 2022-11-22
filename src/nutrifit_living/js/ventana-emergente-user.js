const open = document.getElementById('open'); 
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
    modal_container.classList.add('show');
});

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});


// Añadir imagen al usuario


const imgSRC = document.getElementById('inputFile'),
		containImg = document.getElementById('imgChoosen'),
        textAnadir = document.getElementById('textAnadir');

const changebtnImg = document.getElementById('changebtnImg');


		if ( containImg.src.length === 81 ) {

			containImg.style.display="none";
			changebtnImg.style.display="none";
			
		}

imgSRC.onchange = () => {

		imgSRC.style.display = "none";
		containImg.style.display="inline";
        textAnadir.style.display="none";
		btnEnviarImg.style.top = "0.9em";

		let reader = new FileReader();
	
		reader. readAsDataURL (imgSRC. files[0]) ;

		reader.onload = () => {
		imgChoosen.setAttribute("src",reader.result);

	}
}


changebtnImg.addEventListener('click', () => {

    seleccionarImagen();
    imagenToSrc.src="";
	changebtnImg.style.display="none";
	btnEnviarImg.style.display="inline";

});






