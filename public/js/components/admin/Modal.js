export function modal() {
    const showModalButton = document.querySelector('#open-modal');
    const closeModalButton = document.querySelector('#close-modal');

    const modalContainer = document.querySelector(".modal__container");

    showModalButton.addEventListener('click', () => {
        modalContainer.classList.add("show-modal");
    })

    closeModalButton.addEventListener('click', () => {
        modalContainer.classList.remove("show-modal");
        resetForm()
    })

    modalContainer.addEventListener("click", (e) => {
        if (e.target.classList.contains("show-modal")) {
            modalContainer.classList.remove("show-modal");
            resetForm();
        }
    })

    const resetForm = () => {
        const form = document.querySelector('.modal');
        form.reset();
    }

}
