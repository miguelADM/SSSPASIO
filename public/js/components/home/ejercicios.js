var sTutorial = document.getElementById('tutorial')
var sWarmUp = document.getElementById('warm-up')
var sExercises = document.getElementById('exercises')
var sCooldown = document.getElementById('cooldown')

var arrSections = [sTutorial, sWarmUp, sExercises, sCooldown] 

sTutorial.classList.remove('toggle__section') //Sección que se verá siempre que se entre a la página

function toggleVisibility(sectionId) {

    var section = document.getElementById(sectionId)

    if (section.classList.contains('toggle__section')) {
        section.classList.remove('toggle__section')

        for (i = 0; i < arrSections.length; i++) { //Ciclo para esconder automaticamente la sección visible al presionar otra
            if (arrSections[i] != section) {
                arrSections[i].classList.add('toggle__section')
            }
        }

    } else {
        section.classList.add('toggle__section')
    }

}
