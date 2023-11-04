<x-layouts.user-layout>

    <h3 class="home__title">Mi progreso</h3>

    <section id="myProgress__info">

        <div class="progress__info">
            <div class="progress__info-card">
                <div class="info__card-img">
                    <img src="{{ asset('assets/images/home/crown.png') }}" alt="Corona">
                </div>
                <div class="info__card-text">
                    <h3>¿Cómo funciona el acumulado de puntos?</h3>
                    <p>
                        1 a 10 puntos = 1 corona </br>
                        11 a 20 puntos = 2 coronas </br>
                        21 a 30 puntos = 3 coronas </br>
                        31 a 40 puntos = 4 coronas
                    </p>
                </div>
            </div>
        </div>

        <div class="progress__info">
            <div class="progress__info-card">
                <div class="info__card-text">
                    <h2>¡Cada paso que das te acerca más a tus metas! El progreso no siempre es rápido, pero cada
                        pequeño esfuerzo cuenta. Celebra cada logro, por pequeño que sea, porque te está llevando hacia
                        un mejor y más fuerte tú. Recuerda, cada gota de sudor es un paso hacia adelante. ¡Sigue así y
                        alcanzarás todo lo que te propongas!</h2>
                </div>
                <div class="info__card-img">
                    <img src="{{ asset('assets/images/home/motivacion_progreso.png') }}" alt="Corona">
                </div>
            </div>
        </div>
    </section>

    <section id="myProgress__table">
        <div class="divTable progress__table">
            <div class="divTableBody">
                <div class="divTableHeading">
                    <div class="divTableCell tableCellProgress">Rutina</div>
                    <div class="divTableCell tableCellProgress">Periodo</div>
                    <div class="divTableCell tableCellProgress">Semana 1</div>
                    <div class="divTableCell tableCellProgress">Semana 2</div>
                    <div class="divTableCell tableCellProgress">Semana 3</div>
                    <div class="divTableCell tableCellProgress">Semana 4</div>
                    <div class="divTableCell tableCellProgress">Coronas totales</div>
                </div>

                <div class="divTableRow tableRowProgress">
                    <div class="divTableCell tableCellProgress">Cardio 1</div>
                    <div class="divTableCell tableCellProgress">Enero 2023</div>
                    <div class="divTableCell tableCellProgress">2</div>
                    <div class="divTableCell tableCellProgress">4</div>
                    <div class="divTableCell tableCellProgress">7</div>
                    <div class="divTableCell tableCellProgress">5</div>

                    <div class="divTableCell tableCellProgress">4</div>
                </div>

                <div class="divTableRow tableRowProgress">
                    <div class="divTableCell tableCellProgress">Cardio 2</div>
                    <div class="divTableCell tableCellProgress">Febrero 2023</div>
                    <div class="divTableCell tableCellProgress">5</div>
                    <div class="divTableCell tableCellProgress">7</div>
                    <div class="divTableCell tableCellProgress">10</div>
                    <div class="divTableCell tableCellProgress">10</div>

                    <div class="divTableCell tableCellProgress">4</div>
                </div>

                <div class="divTableRow tableRowProgress">
                    <div class="divTableCell tableCellProgress">Cardio 3</div>
                    <div class="divTableCell tableCellProgress">Marzo 2023</div>
                    <div class="divTableCell tableCellProgress">12</div>
                    <div class="divTableCell tableCellProgress">16</div>
                    <div class="divTableCell tableCellProgress">13</div>
                    <div class="divTableCell tableCellProgress">15</div>

                    <div class="divTableCell tableCellProgress">8</div>
                </div>

                <div class="divTableRow tableRowProgress">
                    <div class="divTableCell tableCellProgress">Tono 1</div>
                    <div class="divTableCell tableCellProgress">Abril 2023</div>
                    <div class="divTableCell tableCellProgress">17</div>
                    <div class="divTableCell tableCellProgress">21</div>
                    <div class="divTableCell tableCellProgress">23</div>
                    <div class="divTableCell tableCellProgress">20</div>

                    <div class="divTableCell tableCellProgress">11</div>
                </div>

                <div class="divTableRow tableRowProgress">
                    <div class="divTableCell tableCellProgress">Tono 2</div>
                    <div class="divTableCell tableCellProgress">Mayo 2023</div>
                    <div class="divTableCell tableCellProgress">21</div>
                    <div class="divTableCell tableCellProgress">25</div>
                    <div class="divTableCell tableCellProgress">28</div>
                    <div class="divTableCell tableCellProgress">30</div>

                    <div class="divTableCell tableCellProgress">12</div>
                </div>

                <div class="divTableRow tableRowProgress">
                    <div class="divTableCell tableCellProgress">Tono 3</div>
                    <div class="divTableCell tableCellProgress">Junio 2023</div>
                    <div class="divTableCell tableCellProgress">31</div>
                    <div class="divTableCell tableCellProgress">35</div>
                    <div class="divTableCell tableCellProgress">33</div>
                    <div class="divTableCell tableCellProgress">40</div>

                    <div class="divTableCell tableCellProgress">16</div>
                </div>
            </div>
        </div>
        <article class="pagination">
            <button id="prev" title="Anterior">
                <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
            </button>
            <button class="active">1</button>
            <button>2</button>
            <button id="next" title="Siguiente">
                <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
            </button>
        </article>
    </section>
</x-layouts.user-layout>
