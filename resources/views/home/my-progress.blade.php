<x-layouts.user-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">

    <h1>Progreso de Usuarios</h1>

    <section class="user__profile">

        <div class="user__profile-card">
            <img src="{{ asset('assets/images/home/avatar1.webp') }}" alt="Foto de perfil">
            <div class="user_profile-text">
                <h3>Pepe el toro</h3>
                <p>correodepepe@gmail.com</p>
                <div class="user_profile-data">

                    <div class="user__data">
                        <p class="tag">Grupo</p>
                        <p id="group">Universidad Tecnológica de Nezahualcóyotl</p>
                    </div>

                    <div class="user__data">
                        <p class="tag">Rutina(s)</p>
                        <p id="routine">Cardio 1 | Tono Muscular 1</p>
                    </div>

                    <div class="user__data">
                        <p class="tag">Inicio</p>
                        <p id="sDate">18/07/2023</p>
                    </div>

                    <div class="user__data">
                        <p class="tag">Final</p>
                        <p id="eDate">17/07/2023</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="progress__info">
            <h3>¿Que significan las calificaciones?</h3>
            <p>Las calificaciones obtenidas durante cada sesion significan la intensidad del ejercicio realizado</p>
            <p>Siendo estas:</p>
            <div class="progress__text">
                <li class="zero__col">0 = No realizó el ejercicio</li>
                <li class="one__col">1 = Lo hizo regular</li>
                <li class="two__col">2 = Lo hizo bien</li>
                <li class="three__col">3 = Lo hizo excelente</li>
            </div>
        </div>
    </section>

    <section class="user__progress">

        <div class="period__buttons-container">
            <h3>Periodos</h3>
            <div class="period__buttons">
                <button class="btn__progress-menu" id="btn__current">Actual</button>
                <button class="btn__progress-menu" id="btn__month">Mensual</button>
                <button class="btn__progress-menu" id="btn__year">Anual</button>
            </div>
        </div>

        <div id="current" class="progress__section toggle__section">
            <div id="current__points" class="points"></div>

            <div class="progress__chart">
                <table id="grafica__actual"
                    class="grafica__progreso charts-css column show-labels show-primary-axis show-3-secondary-axes">

                </table>
                <div class="primary-axis">Sesiones en el mes</div>
                <div class="data-axis-1"> Calificacion</div>
            </div>
            <div id="legend" class=""></div>

        </div>

        <div id="month" class="progress__section toggle__section">
            <div id="month__points" class="points"></div>

            <div class="progress__chart">
                <table id="grafica__mensual"
                    class="grafica__progreso charts-css column show-labels show-primary-axis show-3-secondary-axes data-spacing-3 datasets-spacing-1">

                </table>
                <div class="primary-axis">Mes</div>
                <div class="data-axis-1"> Calificacion</div>
            </div>

            <div id="crowns__container">
                <div class="crowns__info crowns__cont">
                    <h2>¿Como funcionan las coronas?</h2>
                    <p>Las coronas se otorgan mensualmente siguiendo los siguientes lineamientos:</p>
                    <div class="crowns__text">
                        <li>De 0 a 14 puntos = 1 corona</li>
                        <li>De 15 a 26 puntos = 2 coronas</li>
                        <li>De 27 a 38 puntos = 3 coronas</li>
                        <li>De 39+ puntos = 4 coronas</li>
                    </div>
                </div>
                <div class="crowns__count crowns__cont">
                    <h2>Coronas obtenidas</h2>
                    <div id="crowns">

                    </div>
                </div>
            </div>
        </div>

        <div id="year" class="progress__section toggle__section">
            <div id="year__points" class="points"></div>

            <div class="progress__chart">
                <table id="grafica__anual"
                    class="grafica__progreso charts-css column show-labels show-primary-axis show-3-secondary-axes data-spacing-3 datasets-spacing-1">

                </table>
                <div class="primary-axis">Año</div>
                <div class="data-axis-1"> Calificacion</div>
            </div>
        </div>

    </section>

    <script src="{{ asset('js/components/admin/userProgress.js') }}"></script> {{-- Se usó el mismo js que el de administrador, se debe cambiar por uno propio para usuarios --}}

</x-layouts.user-layout>
