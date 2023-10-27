// Mostrar contraseña del input password
const inputPassword = document.querySelector('#password');
const buttonShowPassword = document.querySelector('#showPassword');
const iconShowPassword = buttonShowPassword.children;

//Ocultar el icono de ojo cerrado
iconShowPassword[1].style.display = 'none';

buttonShowPassword.addEventListener('click', () => {
    if (inputPassword.type === 'password') {
        inputPassword.type = 'text';
        iconShowPassword[0].style.display = 'none';
        iconShowPassword[1].style.display = 'block';
    } else {
        inputPassword.type = 'password';
        iconShowPassword[0].style.display = 'block';
        iconShowPassword[1].style.display = 'none';
    }
})
