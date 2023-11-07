const pActual = document.querySelector('#current__points')
const sActual = document.querySelector("#current")
const tActual = document.querySelector("#grafica__actual");
const btnActual = document.querySelector("#btn__current");

const pMensual = document.querySelector('#month__points')
const sMensual = document.querySelector("#month")
const tMensual = document.querySelector("#grafica__mensual");
const btnMensual = document.querySelector("#btn__month");

const pAnual = document.querySelector('#year__points')
const sAnual = document.querySelector("#year")
const tAnual = document.querySelector("#grafica__anual");
const btnAnual = document.querySelector("#btn__year");

btnActual.addEventListener('click', mostrarActual);
btnMensual.addEventListener('click', mostrarMensual);
btnAnual.addEventListener('click', mostrarAnual);

let arrMeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
let dias = 31;

let arrNumeros = Array.from({ length: 32 }, () => Math.floor(Math.random() * 40)); //Arreglo temporal

function mostrarActual() {
    let colGrafica = '';
    let totalPuntos = '';
    let puntos = 0;
    pActual.innerHTML = "<p>Cada columna representa un día distinto</p>"
    tActual.innerHTML = "";

    sActual.classList.toggle("toggle__section")
    btnActual.classList.toggle("active")

    sMensual.classList.add("toggle__section")
    btnMensual.classList.remove("active")

    sAnual.classList.add("toggle__section")
    btnAnual.classList.remove("active")

    for (let i = 1; i <= dias; i++) {

        colGrafica += `<tr>\ 
        <th scope="row"> ${i} </th>\
        <td style="--size: calc(${arrNumeros[i]}/ 40)"><span class="data">${arrNumeros[i]}</span></td>\
        </tr>`

        puntos += arrNumeros[i];
    }

    tActual.innerHTML += colGrafica;

    totalPuntos = `<h3>Total de puntos ganados: ${puntos}</h3>`;
    pActual.innerHTML += totalPuntos
}

function mostrarMensual() {
    let colGrafica = '';
    let totalPuntos = '';
    let puntos = 0;
    pMensual.innerHTML = "<p>Cada columna representa una semana distinta</p>"
    tMensual.innerHTML = "";

    sMensual.classList.toggle("toggle__section")
    btnMensual.classList.toggle("active")

    sActual.classList.add("toggle__section")
    btnActual.classList.remove("active")
    sAnual.classList.add("toggle__section")
    btnAnual.classList.remove("active")

    for (let i = 1; i <= arrMeses.length; i++) {

        //Variables temporales para efectos demostrativos
        let a = Math.floor(Math.random() * 40);
        let b = Math.floor(Math.random() * 40);
        let c = Math.floor(Math.random() * 40);
        let d = Math.floor(Math.random() * 40);

        colGrafica += `<tr>\ 
        <th scope="row"> ${arrMeses[i - 1]} </th>\
        <td style="--size: calc(${a}/ 40)"><span class="data">${a}</span></td>\
        <td style="--size: calc(${b}/ 40)"><span class="data">${b}</span></td>\
        <td style="--size: calc(${c}/ 40)"><span class="data">${c}</span></td>\
        <td style="--size: calc(${d}/ 40)"><span class="data">${d}</span></td>\
        </tr>`

        puntos += a + b + c + d;
    }

    tMensual.innerHTML += colGrafica;
    totalPuntos = `<h3>Total de puntos ganados: ${puntos}</h3>`;
    pMensual.innerHTML += totalPuntos

}

function mostrarAnual() {
    let colGrafica = '';
    let totalPuntos = '';
    let puntos = 0;
    pAnual.innerHTML = "<p>Cada columna representa un mes distinto</p>"
    tAnual.innerHTML = ""
    var anio = 2020;

    sAnual.classList.toggle("toggle__section")
    btnAnual.classList.toggle("active")

    sActual.classList.add("toggle__section")
    btnActual.classList.remove("active")
    sMensual.classList.add("toggle__section")
    btnMensual.classList.remove("active")

    for (let i = 0; i <= 3; i++) {
        //Variables temporales para efectos demostrativos
        let a = Math.floor(Math.random() * 40);
        let b = Math.floor(Math.random() * 40);
        let c = Math.floor(Math.random() * 40);
        let d = Math.floor(Math.random() * 40);
        let e = Math.floor(Math.random() * 40);
        let f = Math.floor(Math.random() * 40);
        let g = Math.floor(Math.random() * 40);
        let h = Math.floor(Math.random() * 40);
        let i = Math.floor(Math.random() * 40);
        let j = Math.floor(Math.random() * 40);
        let k = Math.floor(Math.random() * 40);
        let l = Math.floor(Math.random() * 40);

        colGrafica += `<tr>\ 
        <th scope="row"> ${anio} </th>\
        <td style="--size: calc(${a}/ 40)"><span class="data">${a}</span></td>
        <td style="--size: calc(${b}/ 40)"><span class="data">${b}</span></td>
        <td style="--size: calc(${c}/ 40)"><span class="data">${c}</span></td>
        <td style="--size: calc(${d}/ 40)"><span class="data">${d}</span></td>
        <td style="--size: calc(${e}/ 40)"><span class="data">${e}</span></td>
        <td style="--size: calc(${f}/ 40)"><span class="data">${f}</span></td>
        <td style="--size: calc(${g}/ 40)"><span class="data">${g}</span></td>
        <td style="--size: calc(${h}/ 40)"><span class="data">${h}</span></td>
        <td style="--size: calc(${i}/ 40)"><span class="data">${i}</span></td>
        <td style="--size: calc(${j}/ 40)"><span class="data">${j}</span></td>
        <td style="--size: calc(${k}/ 40)"><span class="data">${k}</span></td>
        <td style="--size: calc(${l}/ 40)"><span class="data">${l}</span></td>`;

        anio++

        puntos += a + b + c + d + e + f + g + h + i + j + k + l;

    }

    tAnual.innerHTML += colGrafica;
    totalPuntos = `<h3>Total de puntos ganados: ${puntos}</h3>`;
    pAnual.innerHTML += totalPuntos

}