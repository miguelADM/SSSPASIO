export function table() {
  const options_buttons = document.querySelectorAll(".table__options");

  const handleClickOptionsButton = (event) => {
    const button = event.currentTarget;
    const options_menu = button.parentElement.querySelector(".table__options-menu");
    const previus_menu = document.querySelector(".show__options");

    if (!options_menu.classList.contains("show__options")) {
      if (previus_menu) {
        previus_menu.classList.remove("show__options");
      }
      options_menu.classList.add("show__options");
    }
    else {
      options_menu.classList.remove("show__options");
    }

  }

  options_buttons.forEach((button) => {
    button.addEventListener("click", handleClickOptionsButton)
  })

}


