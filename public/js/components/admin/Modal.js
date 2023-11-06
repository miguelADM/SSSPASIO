export function modal() {
    const showModalButton = document.querySelectorAll('#open-modal');
    const closeModalButton = document.querySelectorAll('#close-modal');

    const modalContainer = document.querySelector(".modal__container");
    const modalAssign = document.querySelector("#modal__assign");

    showModalButton.forEach((button, index) => {
        if (index > 0) {
            button.addEventListener('click', () => {
                modalAssign.classList.add("show-modal");
            })
            return
        } else {
            button.addEventListener('click', () => {
                modalContainer.classList.add("show-modal");
            })
        }
    })

    closeModalButton.forEach((button) => {
        button.addEventListener('click', () => {
            modalContainer.classList.remove("show-modal");
            modalAssign.classList.remove("show-modal");
            resetForm()
        })
    })

    modalContainer.addEventListener("click", (e) => {
        if (e.target.classList.contains("show-modal")) {
            modalContainer.classList.remove("show-modal");
            resetForm();
        }
    })

    modalAssign.addEventListener("click", (e) => {
        if (e.target.classList.contains("show-modal")) {
            modalAssign.classList.remove("show-modal");
            resetForm();
        }
    })

    const resetForm = () => {
        const form = document.querySelector('.formularioAdmin');
        form.reset();
    }

}
