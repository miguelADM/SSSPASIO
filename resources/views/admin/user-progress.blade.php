<x-layouts.admin-layout>
    <h1>Progreso de Usuarios</h1>
    {{-- <div class="button-container">
        <button class="button button-primary" type="button" id="open-modal">Agregar nuevo
            <img src="{{ asset('assets/icons/admin/chart-bar.svg') }}" alt=""></button>
    </div> --}}

    <section class="table">
        <div class="divTable userProgressTable">
            <div class="divTableBody">
                <div class="divTableHeading">
                    <div class="divTableCell">Id</div>
                    <div class="divTableCell">Usuario</div>
                    <div class="divTableCell">Inicio</div>
                    <div class="divTableCell">Fin</div>
                    <div class="divTableCell">Rutina</div>
                    <div class="divTableCell">Coronas</div>
                    <div class="divTableCell btnCell"></div>
                </div>

                <div class="divTableRow">
                    <div class="divTableCell">1</div>
                    <div class="divTableCell">Pepe el Toro</div>
                    <div class="divTableCell">01/07/2023</div>
                    <div class="divTableCell">31/07/2023</div>
                    <div class="divTableCell">Tono muscular 1</div>
                    <div class="divTableCell">25</div>
                    <div class="divTableCell btnCell">
                        <a class="button button-primary" href="usuarioTemp">Ver a
                            detalle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
</x-layouts.admin-layout>
