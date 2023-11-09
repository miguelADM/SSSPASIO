const users = [
    {
        id: 1,
        userName: 'Javier',
        email: 'javier@javier',
        check: false
    },
    {
        id: 2,
        userName: 'Luisa',
        email: 'luisa@luisa',
        check: false
    },
    {
        id: 3,
        userName: 'Carlos',
        email: 'carlos@carlos',
        check: false
    },
    {
        id: 4,
        userName: 'carlitos',
        email: 'carlitos@carlitos',
        check: false
    },
    {
        id: 5,
        userName: 'carlangas',
        email: 'carlangas@carlangas',
        check: false
    },
    {
        id: 6,
        userName: 'Ana',
        email: 'ana@ana',
        check: false
    },
    {
        id: 7,
        userName: 'Marta',
        email: 'marta@marta',
        check: false
    },
    {
        id: 8,
        userName: 'carlangas',
        email: 'carlangas@carlangas',
        check: false
    },
    {
        id: 9,
        userName: 'Ana',
        email: 'ana@ana',
        check: false
    },
    {
        id: 10,
        userName: 'Marta',
        email: 'marta@marta',
        check: false
    },
    {
        id: 11,
        userName: 'carlangas',
        email: 'carlangas@carlangas',
        check: false
    },
    {
        id: 12,
        userName: 'Ana',
        email: 'ana@ana',
        check: false
    },
    {
        id: 13,
        userName: 'Marta',
        email: 'marta@marta',
        check: false
    }
];


function searchUsers() {
    const searchField = document.querySelector('#search')

    searchField.addEventListener('keyup', () => {
        const searchValue = searchField.value.toLowerCase()
        const filteredUsers = users.filter(({ userName, email }) => {
            return userName.toLowerCase().includes(searchValue) || email.toLowerCase().includes(searchValue)
        })

        generateRowsUsers(filteredUsers)
    })

}

function generateRowsUsers(users = []) {
    const modalAssignRoutine = document.querySelector('#modal__assign')
    const table = modalAssignRoutine.querySelector('.divTableBody')

    let tableRows = `
        <div class="divTableHeading">
            <div class="divTableCell"></div>
            <div class="divTableCell">Usuario</div>
            <div class="divTableCell">Correo</div>
        </div>`

    if (users.length === 0) {
        tableRows = `
        <div class="divTableRow">
            <div class="divTableCell">
                <p style="text-align: center;">No hay resultados</p>
            </div>
        </div>`
    }

    users?.forEach(({ userName, email, id, check }) => {
        tableRows += `
        <div class="divTableRow ${check ? 'checked' : ''}">
            <div class="divTableCell">
            <div class="checkbox-wrapper-43">
                <input type="checkbox" id="${id}" ${check ? 'checked' : ''}>
                <label for="${id}" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path
                        d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z">
                        </path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                </label>
            </div>
            </div>
            <div class="divTableCell">${userName}</div>
            <div class="divTableCell">${email}</div>
        </div>
        `
    })

    table.innerHTML = tableRows
    changeCheckbox()

}

function changeCheckbox() {
    const modalAssignRoutine = document.querySelector('#modal__assign')
    const rowsCheckbox = modalAssignRoutine.querySelectorAll('input[type="checkbox"]')

    rowsCheckbox.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            const row = checkbox.parentElement.parentElement.parentElement
            const id = checkbox.id
            const user = users.find((user) => user.id === Number(id))

            if (checkbox.checked) {
                row.classList.add('checked')
                user.check = true
            } else {
                row.classList.remove('checked')
                user.check = false
            }

        })
    })
}

function closeAssignModal() {
    const modalAssigns = document.querySelectorAll('#modal__assign')
    const closeButtons = document.querySelectorAll('#close-modal')

    modalAssigns.forEach((modalAssign) => {
        modalAssign?.addEventListener("click", (e) => {
            if (e.target.classList.contains("show-modal")) {
                modalAssign.classList.remove("show-modal");
                resetSearchAndSelect();
            }
        })
    })

    closeButtons.forEach((button) => {
        button?.addEventListener('click', () => {
            resetSearchAndSelect()
        })
    })
}

const resetSearchAndSelect = () => {
    const inpSearch = document.querySelector('#search')
    inpSearch.value = ''
    users.forEach((user) => {
        user.check = false
    })

    generateRowsUsers(users)

}

window.addEventListener('load', () => {
    generateRowsUsers(users)
    searchUsers()
    closeAssignModal()
})
