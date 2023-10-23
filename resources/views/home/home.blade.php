@php
  $userName = auth()->user()->name ?? 'Invitado';
@endphp
<x-layouts.user-layout>
  <section>
    <h3 class="home__title">Bienvenido de nuevo <span>{{ $userName }}</span></h3>
    <article class="home__options-container">
      <div class="home__option">
        <div class="home__option-content">
          <div class="home__option-text">
            <h5>Rutinas</h5>
            <p>Visualiza tus rutinas de cardio y tono muscular.</p>
          </div>
          <div class="home__option-buttons">
            <a href="/routines">Continuar 😮‍💨</a>
          </div>
        </div>
        <img src="{{ asset('assets/images/home/rutinas.png') }}" alt="Rutinas">
      </div>

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
        <img src="{{ asset('assets/images/home/recomnedacion.png') }}" alt="Dieta">
      </div>

      <div class="home__option">
        <div class="home__option-content">
          <div class="home__option-text">
            <h5>Cuestionario de salud</h5>
            <p>Tu salud nos importa, realiza este cuestionario para mejorar su experiencia.</p>
          </div>
          <div class="home__option-buttons">
            <a href="https://forms.gle/16Min5R8dxWdBc2r8">Continuar 🖊️</a>
          </div>
        </div>
        <img src="{{ asset('assets/images/home/cuestionario-salud.png') }}" alt="Cuestionario">
      </div>

      <div class="home__option">
        <div class="home__option-content">
          <div class="home__option-text">
            <h5>Encuesta de satisfacción</h5>
            <p>Tu opinión es muy importante para nosotros.</p>
          </div>
          <div class="home__option-buttons">
            <a href="https://forms.gle/di9VmRu2zKZvCuUNA">Continuar 📝</a>
          </div>
        </div>
        <img src="{{ asset('assets/images/home/encuesta.png') }}" alt="Encuesta">
      </div>
    </article>
  </section>
</x-layouts.user-layout>
