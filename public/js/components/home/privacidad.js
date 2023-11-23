const botonAceptarPrivacidad = document.getElementById('btn-aceptar-privacidad');
const avisoPrivacidad = document.getElementById('aviso-privacidad');
const fondoAvisoPrivacidad = document.getElementById('fondo-aviso-privacidad');

dataLayer = [];

if(!localStorage.getItem('privacidad-aceptadas')){
	avisoPrivacidad.classList.add('activo');
	fondoAvisoPrivacidad.classList.add('activo');

} else {
	dataLayer.push({'event': 'privacidad-aceptadas'});
}

botonAceptarPrivacidad.addEventListener('click', () => {
	avisoPrivacidad.classList.remove('activo');
	fondoAvisoPrivacidad.classList.remove('activo');

	localStorage.setItem('privacidad-aceptadas', true);

	dataLayer.push({'event': 'privacidad-aceptadas'});
});