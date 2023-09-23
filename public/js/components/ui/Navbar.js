const navbar = document.querySelector("nav");
let ubicationInitial = window.scrollY;

document.addEventListener("scroll", () => {
    let ubicationActual = window.scrollY;

    if (ubicationInitial > ubicationActual) {
        navbar.style.transform = "translateY(0)";
    } else {
        navbar.style.transform = "translateY(-100px)";
    }

    ubicationInitial = ubicationActual;
});

/* Menu resposive */
const menu = document.querySelector(".navbar__links");
const menuBtn = document.querySelector(".navbar__menu-btn");

menuBtn.addEventListener("click", () => {
    menu.classList.toggle("navbar__show");

    if (menu.classList.contains("navbar__show")) {
        menu.addEventListener("click", () => {
            menu.classList.remove("navbar__show");
        });
    }
});
