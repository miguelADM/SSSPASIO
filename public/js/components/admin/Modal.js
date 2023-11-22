export function modal() {
    const showModalButton = document.querySelectorAll('#open-modal');
    const closeModalButton = document.querySelectorAll('.close-modal');
    const modalContainer = document.querySelector(".modal__container");
    const modalAssign = document.querySelector("#modal__assign");
    const addUserButton = document.querySelector(".button-primary"); // Nuevo botón para agregar usuario

    function addUserModal() {
        const addModal = document.querySelector("#agregar-usuario");
        addModal.classList.add("show-modal");
        
        const closeModal = addModal.querySelector(".close-modal");
        closeModal.addEventListener("click", () => {
            addModal.classList.remove("show-modal");
        });
    }

    addUserButton.addEventListener('click', () => {
        addUserModal();
    });

    showModalButton.forEach((button, index) => {
        if (index > 0) {
            button?.addEventListener('click', () => {
                modalAssign.classList.add("show-modal");
            })
            return
        } else {
            button?.addEventListener('click', () => {
                modalContainer.classList.add("show-modal");
            })
        }
    })

    closeModalButton?.forEach((button) => {
        button?.addEventListener('click', () => {
            modalContainer.classList.remove("show-modal");
            resetForm();
        })
    })

    modalContainer?.addEventListener("click", (e) => {
        if (e.target.classList.contains("show-modal")) {
            modalContainer.classList.remove("show-modal");
            resetForm();
        }
    })

    const resetForm = () => {
        const form = document.querySelector('.formularioAdmin');
        form.reset();
    }
}
