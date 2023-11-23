const botonAceptarPrivacidad = document.getElementById('btn__agree');
const contenedorBotones = document.getElementById('privacy__buttons-container');

dataLayer = [];

if(!localStorage.getItem('privacidad-aceptadas')){
	contenedorBotones.classList.toggle('visible');

} else {
	dataLayer.push({'event': 'privacidad-aceptadas'});
}

botonAceptarPrivacidad.addEventListener('click', () => {
	contenedorBotones.classList.remove('visible');

	localStorage.setItem('privacidad-aceptadas', true);

	dataLayer.push({'event': 'privacidad-aceptadas'});
});