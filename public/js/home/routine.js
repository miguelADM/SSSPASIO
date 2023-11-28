async function showNotices() {
    await Swal.fire({
        title: 'Antes de empezar',
        text: 'El programa mantiene la misma metodología con ejercicios constantes de calentamiento y relajación, pero se introduce una variación en los cinco ejercicios principales. Al principio, puedes sentir fatiga, lo cual es normal, ya que se busca desacostumbrar al cuerpo de la rutina anterior para lograr objetivos de salud adecuados.',
        icon: 'info',
        confirmButtonText: 'Continuar',
    })

    await Swal.fire({
        title: 'Precaucion',
        text: 'En caso de malestar durante el ejercicio, suspende hasta identificar la causa. Si algún ejercicio te lastima o incomoda, comunícalo directamente a tu entrenador para cambiarlo.',
        icon: 'warning',
        confirmButtonText: 'Continuar',
    })
}

let sWarmUp = document.getElementById('warm-up')
let sExercises = document.getElementById('exercises')
let sCooldown = document.getElementById('cooldown')

let arrSections = [sWarmUp, sExercises, sCooldown]

function toggleVisibility(sectionId) {

    let section = document.getElementById(sectionId)

    if (section.classList.contains('toggle__section')) {
        section.classList.remove('toggle__section')

        for (i = 0; i < arrSections.length; i++) {
            if (arrSections[i] != section) {
                arrSections[i].classList.add('toggle__section')
            }
        }

    } else {
        section.classList.add('toggle__section')
    }

}


const listItems = document.querySelector('.exercises__list').querySelectorAll('li')
const exercisesContent = document.querySelectorAll('.exercises__content')

listItems.forEach((item, i) => {
    console.log(item)

    item.addEventListener('click', () => {
        const currentExercise = document.querySelector('.d-flex')

        if (currentExercise) {
            currentExercise.classList.remove('d-flex')
            currentExercise.classList.add('d-none')
        }

        exercisesContent[i].classList.remove('d-none')
        exercisesContent[i].classList.add('d-flex')
    })
})

showNotices()
