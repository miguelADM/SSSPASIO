const time = document.querySelector(".timer");
const time_seconds = document.querySelector("#seconds");
const start = document.querySelector(".start");
const pause = document.querySelector(".pause");
const reset = document.querySelector(".reset");
const intenstity_element = document.querySelector(".intensity");
const progress_value = document.querySelector(".progress-value");

const intensities = [
    {
        minSecond: 0,
        maxSecond: 60,
        color: '#FF6347',
        description: 'calentamiento de articulaciones',
        totalSeconds: 60,
        audio: 'calentamiento'
    },
    {
        minSecond: 61,
        maxSecond: 110,
        color: '#FFA500',
        description: 'elevación de temperatura corporal',
        totalSeconds: 50,
        audio: 'elevaciontemperatura'
    },
    {
        minSecond: 111,
        maxSecond: 190,
        color: '#FFFF00',
        description: 'Intensidad media baja (8 tiempos)',
        totalSeconds: 80,
        audio: '8tiem'
    },
    {
        minSecond: 191,
        maxSecond: 350,
        color: '#32CD32 ',
        description: 'Intensidad media (16 tiempos)',
        totalSeconds: 160,
        audio: '16tiem'
    },
    {
        minSecond: 351,
        maxSecond: 590,
        color: '#FF4500',
        description: 'Intensidad media alta (24 tiempos)',
        totalSeconds: 240,
        audio: '24tiem'
    },
    {
        minSecond: 591,
        maxSecond: 910,
        color: '#FF4500',
        description: 'Intensidad media alta (32 tiempos)',
        totalSeconds: 320,
        audio: '32tiem'
    },
    {
        minSecond: 911,
        maxSecond: 1150,
        color: '#FF4500',
        description: 'Intensidad media alta (24 tiempos)',
        totalSeconds: 240,
        audio: '24tiem'
    },
    {
        minSecond: 1151,
        maxSecond: 1310,
        color: '#32CD32 ',
        description: 'Intensidad media (16 tiempos)',
        totalSeconds: 160,
        audio: '16tiem'
    },
    {
        minSecond: 1311,
        maxSecond: 1390,
        color: '#FFFF00',
        description: 'Intensidad media baja (8 tiempos)',
        totalSeconds: 80,
        audio: '8tiem'
    },
    {
        minSecond: 1391,
        maxSecond: 1440,
        color: '#87CEEB',
        description: 'Relajación',
        totalSeconds: 50,
        audio: 'relajacion'
    },
];

let seconds = 0;
let totalSeconds
let maxTime = changeMinutesToSeconds(24);
let interval;
let audioPlayed = false

function timer() {
    seconds++;

    let min = Math.floor((seconds) / 60);
    let sec = seconds % 60

    const audio = new Audio()

    const intensity = intensities.find(({ minSecond, maxSecond }) => (
        minSecond <= seconds && maxSecond >= seconds)
    )

    const progress = calculateProgress(seconds)
    progress_value.style.height = `${progress}%`

    totalSeconds = intensity.totalSeconds - 1

    if (intensity) {
        intenstity_element.innerHTML = intensity.description
        progress_value.style.backgroundColor = intensity.color

        time_seconds.innerHTML = `${intensity.totalSeconds} <span>segundos</span>`
    }

    if (intensity && !audioPlayed) {
        audio.src = `/assets/routine/audio/${intensity.audio}.mp3`
        audio.play()
        audioPlayed = true
    }

    if (intensity.maxSecond === seconds) {
        audioPlayed = false
    }


    if (seconds >= maxTime) {
        resetTime()
        console.log('termino el tiempo')
        endTime()
    }

    time.innerHTML = `${createTimerNumber(min)}<span class="minutes">:</span>${createTimerNumber(sec)}`;
}

function startTime() {
    if (interval) {
        return
    }

    interval = setInterval(timer, 1000)
}

function pauseTime() {
    clearInterval(interval)
    interval = null
}

function resetTime() {
    clearInterval(interval)
    interval = null
    seconds = 0
    time.innerHTML = '00:00'
}

async function endTime() {
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
            resolve({
                "#ff0000": "Red",
                "#00ff00": "Green",
                "#0000ff": "Blue"
            });
        }, 100);
    });

    const { value: color } = await Swal.fire({
        title: 'Bien hecho',
        text: 'Ha terminado la rutina',
        input: 'radio',
        icon: 'success',
        inputOptions,
        inputValidator: (value) => {
            if (!value) {
                return 'Por favor, seleccione una de las opciones!'
            }
        }
    })

    if (color) {
        Swal.fire({ html: `You selected: ${color}` });
    }
}

/* Helpers */
function changeMinutesToSeconds(minutes) {
    return minutes * 60
}

function createTimerNumber(number) {
    return number.toString().padStart(2, "0")
}

function calculateProgress(currenTime = 0) {
    return (currenTime / 1440) * 100
}

/* Events */
start.addEventListener("click", startTime);
pause.addEventListener("click", pauseTime);
reset.addEventListener("click", resetTime);
