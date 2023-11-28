<x-layouts.user-layout>
  <link rel="stylesheet" href="{{ asset('css/home/routine.css') }}">

  <section>
    <h3 class="home__title">Rutina Cardio</h3>
    <article>
      <x-home.timer.timer />
    </article>
    <ul class="routine__menu">
      <li onclick="toggleVisibility('warm-up')">Calentamiento</li>
      <li onclick="toggleVisibility('exercises')">Ejercicios</li>
      <li onclick="toggleVisibility('cooldown')">Relajación</li>
    </ul>

    <section>
      <article id="warm-up" class="section__exercises toggle__section">
        <div class="exercises__video">
          <iframe src="https://www.youtube.com/embed/uNeIBIHYAGg?si=5y-cmMdB_VllWym3" title="Video de calentamiento"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </article>

      <article id="exercises" class="section__exercises toggle__section">
        <div class="exercises">
          <ul class="exercises__list">
            <li>
              <img src="{{ asset('assets/routine/exercises/ejercicio1.gif') }}" alt="Ejercicio 1">
            </li>
            <li>
              <img src="{{ asset('assets/routine/exercises/ejercicio2.gif') }}" alt="Ejercicio 2">
            </li>
            <li>
              <img src="{{ asset('assets/routine/exercises/ejercicio3.gif') }}" alt="Ejercicio 3">
            </li>
            <li>
              <img src="{{ asset('assets/routine/exercises/ejercicio4.gif') }}" alt="Ejercicio 4">
            </li>
            <li>
              <img src="{{ asset('assets/routine/exercises/ejercicio5.gif') }}" alt="Ejercicio 5">
            </li>
          </ul>
          <div class="exercises__select">
            <picture class="exercises__content d-flex">
              <div class="exercises__info">
                <p>Marcha elevando brazos</p>
                <span>Marcha o trote en su lugar elevando los brazos como se muestra</span>
              </div>
              <img src="{{ asset('assets/routine/exercises/ejercicio1.gif') }}" alt="Ejercicio 1">
            </picture>
            <picture class="exercises__content d-none">
              <div class="exercises__info">
                <p>Flexión lateral manos agarradas</p>
                <span>Flexión lateral del tronco agarrándose las manos todo el tiempo y moviendo brazos como se
                  muestra</span>
              </div>
              <img src="{{ asset('assets/routine/exercises/ejercicio2.gif') }}" alt="Ejercicio 2">
            </picture>
            <picture class="exercises__content d-none">
              <div class="exercises__info">
                <p>Flexión lateral y tocar piso</p>
                <span>Flexión lateral tronco con movs brazos, luego bajarlas y tocar rodillas, posterior flexionar
                  rodillas y tocar piso y regresar a tocar rodillas y flexión lateral al otro lado</span>
              </div>
              <img src="{{ asset('assets/routine/exercises/ejercicio3.gif') }}" alt="Ejercicio 3">
            </picture>
            <picture class="exercises__content d-none">
              <div class="exercises__info">
                <p>Desplaz lateral con manos agarradas</p>
                <span>Desplazam lateral c/ 1 o 2 saltos laterales estirando brazos con manos agarradas y flexionar
                  tronco,
                  luego 1 o 2 para el otro lado con los mismos movimientos</span>
              </div>
              <img src="{{ asset('assets/routine/exercises/ejercicio4.gif') }}" alt="Ejercicio 4">
            </picture>
            <picture class="exercises__content d-none">
              <div class="exercises__info">
                <p>Abrir cerrar con brincos</p>
                <span>Abrir y cerrar piernas con brincos como se muestra. Si hay dolor de espalda evita el impacto y
                  haz
                  desplazamientos laterales como la rutina anterior</span>
              </div>
              <img src="{{ asset('assets/routine/exercises/ejercicio5.gif') }}" alt="Ejercicio 5">
            </picture>
          </div>
        </div>
      </article>

      <article id="cooldown" class="section__exercises toggle__section">
        <div class="exercises__video">
          <iframe src="https://www.youtube.com/embed/ZAbls6xmkUk?si=vIMiP1AHUmepuTwm" title="Video de enfriamiento"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </article>
    </section>

  </section>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('js/home/routine.js') }}"></script>
</x-layouts.user-layout>
