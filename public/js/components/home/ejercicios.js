var sWarmUp = document.getElementById('warm-up')
var sExercises = document.getElementById('exercises')
var sCooldown = document.getElementById('cooldown')

var arrSections = [sWarmUp, sExercises, sCooldown]

function toggleVisibility(sectionId) {

    var section = document.getElementById(sectionId)

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
