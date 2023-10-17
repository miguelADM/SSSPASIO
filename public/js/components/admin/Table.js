export function table() {
    const optionsButtons = document.querySelectorAll(".table__options");

    optionsButtons.forEach((button) => {
        const options_menu = button.parentElement.querySelector(".table__options-menu");

        button.addEventListener("click", () => {
            options_menu.classList.toggle("show__options");

        })

    })
}
