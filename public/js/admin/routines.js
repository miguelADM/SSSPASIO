const users = [
    {
        userName: 'Javier',
        email: 'javier@javier',
    },
    {
        userName: 'Luisa',
        email: 'luisa@luisa',
    },
    {
        userName: 'Carlos',
        email: 'carlos@carlos',
    },
    {
        userName: 'carlitos',
        email: 'carlitos@carlitos',
    },
    {
        userName: 'carlangas',
        email: 'carlangas@carlangas',
    },
    {
        userName: 'Ana',
        email: 'ana@ana',
    },
    {
        userName: 'Marta',
        email: 'marta@marta',
    },
    {
        userName: 'carlangas',
        email: 'carlangas@carlangas',
    },
    {
        userName: 'Ana',
        email: 'ana@ana',
    },
    {
        userName: 'Marta',
        email: 'marta@marta',
    },
    {
        userName: 'carlangas',
        email: 'carlangas@carlangas',
    },
    {
        userName: 'Ana',
        email: 'ana@ana',
    },
    {
        userName: 'Marta',
        email: 'marta@marta',
    },
]

function searchUsers() {
    const searchField = document.querySelector('#search')

    searchField.addEventListener('keyup', () => {
        const searchValue = searchField.value.toLowerCase()
        const filteredUsers = users.filter(({ userName, email }) => {
            return userName.toLowerCase().includes(searchValue) || email.toLowerCase().includes(searchValue)
        })
        generateRowsUsers(filteredUsers)
        changeCheckbox()
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

    users?.forEach(({ userName, email }, id) => {
        tableRows += `
        <div class="divTableRow">
            <div class="divTableCell">
            <div class="checkbox-wrapper-43">
                <input type="checkbox" id="cbx-${id}">
                <label for="cbx-${id}" class="check">
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

}

function changeCheckbox() {
    const modalAssignRoutine = document.querySelector('#modal__assign')
    const rowsCheckbox = modalAssignRoutine.querySelectorAll('input[type="checkbox"]')

    rowsCheckbox.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            const row = checkbox.parentElement.parentElement.parentElement

            if (checkbox.checked) {
                row.classList.add('checked')
            } else {
                row.classList.remove('checked')
            }
        })
    })
}

window.addEventListener('load', () => {
    generateRowsUsers(users)
    searchUsers()
})
