@php
  $userName = auth()->user()->name;
@endphp

<x-layouts.user-layout>
  <section>
    <h3 class="home__title">Bienvenido de nuevo <span>{{ $userName }}</span></h3>
    <article class="home__options-container">
      {{-- cardio --}}
      <div class="home__option">
        <div class="home__option-content">
          <div class="home__option-text">
            <h5>Cardio</h5>
            <p>Rutinas para mejorar tu resistencia y salud.</p>
          </div>
          <div class="home__option-buttons">
            <a href="#">Rutina 1 😮‍💨</a>
            <a href="#">Rutina 2 🔥</a>
          </div>
        </div>
        <img src="{{ asset('assets/images/home/cardio.png') }}" alt="Cardio">
      </div>
      {{-- cardio --}}
      {{-- tono muscular --}}
      <div class="home__option">
        <div class="home__option-content">
          <div class="home__option-text">
            <h5>Tono muscular</h5>
            <p>Fortalece y tonifica tus músculos.</p>
          </div>
          <div class="home__option-buttons">
            <a href="#">Continuar 🔥</a>
          </div>
        </div>
        <img src="{{ asset('assets/images/home/tono-muscular.png') }}" alt="Cardio">
      </div>
      {{-- tono muscular --}}
    </article>
    <article class="home__options-container-secondary">

      <div class="home__option">
        <div class="home__option-content">
          <div class="home__option-text">
            <h5>Recomendacion Nutricional</h5>
            <p>Optimiza tu dieta para maximizar tus resultados.</p>
          </div>
          <div class="home__option-buttons">
            <a href="#">Continuar 🍎</a>
          </div>
        </div>
        <img src="{{ asset('assets/images/home/recomnedacion.png') }}" alt="Cardio">
      </div>

      <div class="home__option">
        <div class="home__option-content">
          <div class="home__option-text">
            <h5>Cuestionario de salud</h5>
            <p>Tu salud nos importa, realiza este cuestionario para mejorar su experiencia.</p>
          </div>
          <div class="home__option-buttons">
            <a href="#">Continuar 🖊️</a>
          </div>
        </div>
        <img src="{{ asset('assets/images/home/cuestionario-salud.png') }}" alt="Cardio">
      </div>

      <div class="home__option">
        <div class="home__option-content">
          <div class="home__option-text">
            <h5>Encuesta de satisfacción</h5>
            <p>Tu opinión es muy importante para nosotros.</p>
          </div>
          <div class="home__option-buttons">
            <a href="#">Continuar 📝</a>
          </div>
        </div>
        <img src="{{ asset('assets/images/home/encuesta.png') }}" alt="Cardio">
      </div>
    </article>
  </section>
</x-layouts.user-layout>
