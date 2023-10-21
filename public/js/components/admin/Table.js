export function table() {
  const options_buttons = document.querySelectorAll(".table__options");

  options_buttons.forEach((button) => {
    const options_menu = button.parentElement.querySelector(".table__options-menu");

    button.addEventListener("click", (e) => {
      const previus_menu = document.querySelector(".show__options");

      if (previus_menu) {
        previus_menu.classList.remove("show__options");
      }

      options_menu.classList.toggle("show__options");
    })
  })
}
