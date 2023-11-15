<x-layouts.admin-layout>
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
                        <p class="tag">Salud</p>
                        <p id="health">Saludable</p>
                    </div>

                    <div class="user__data">
                        <p class="tag">Rutina</p>
                        <p id="routine">Cardio 1</p>
                    </div>

                    <div class="user__data">
                        <p class="tag">Inicio</p>
                        <p id="sDate">01/07/2023</p>
                    </div>

                    <div class="user__data">
                        <p class="tag">Final</p>
                        <p id="eDate">31/07/2023</p>
                    </div>

                </div>
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
            <div id="current__points" class="points">
            </div>

            <div class="progress__chart">
                <table id="grafica__actual"
                    class="grafica__progreso charts-css column show-labels show-primary-axis show-4-secondary-axes">
                    
                </table>
                <div class="primary-axis">Días</div>
                <div class="data-axis-1"> Puntos</div>
            </div>
        </div>

        <div id="month" class="progress__section toggle__section">
            <div id="month__points" class="points"></div>

            <div class="progress__chart">
                <table id="grafica__mensual"
                    class="grafica__progreso charts-css column show-labels show-primary-axis show-4-secondary-axes data-spacing-3 datasets-spacing-1">
                    
                </table>
                <div class="primary-axis">Meses</div>
                <div class="data-axis-1"> Puntos</div>
            </div>
        </div>

        <div id="year" class="progress__section toggle__section">
            <div id="year__points" class="points"></div>

            <div class="progress__chart">
                <table id="grafica__anual"
                    class="grafica__progreso charts-css column show-labels show-primary-axis show-4-secondary-axes data-spacing-3 datasets-spacing-1">
                    
                </table>
                <div class="primary-axis">Años</div>
                <div class="data-axis-1"> Puntos</div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/components/admin/userProgress.js') }}"></script>

</x-layouts.admin-layout>
