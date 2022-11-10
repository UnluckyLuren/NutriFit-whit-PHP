const open = document.getElementById('open'); 
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

console.log(open)

open.addEventListener('click', () => {
    modal_container.classList.add('show');
    console.log('si se añadio la clase');
});

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});


// Añadir imagen al usuario


const imgSRC = document.getElementById('inputFile'),
		containImg = document.getElementById('imgChoosen'),
        textAnadir = document.getElementById('textAnadir');

		containImg.style.display="none";

imgSRC.onchange = () => {

		imgSRC.style.display = "none";
		containImg.style.display="inline";
        textAnadir.style.display="none";

		let reader = new FileReader();
	
		reader. readAsDataURL (imgSRC. files[0]) ;

		reader.onload = () => {
		imgChoosen.setAttribute("src",reader.result);

	}
}
