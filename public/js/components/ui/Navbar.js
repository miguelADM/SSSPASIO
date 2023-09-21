const navbar = document.querySelector('nav');
let ubicationInitial = window.scrollY;

document.addEventListener('scroll', () => {
    let ubicationActual = window.scrollY;

    if (ubicationInitial > ubicationActual) {
        navbar.style.transform = 'translateY(0)';
    } else {
        navbar.style.transform = 'translateY(-100px)';
    }

    ubicationInitial = ubicationActual;
});
