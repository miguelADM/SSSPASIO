<x-layouts.user-layout>
  <section>
    <header class="nutritional__header"
      style="background-image: url({{ asset('assets/images/home/banner_comida.jpg') }});">
      <div class="nutritional__header-text">
        <h3>Recomendación Nutricional</h3>
        <p>Te proporcionaremos recomendaciones nutricionales personalizadas para ayudarte a alcanzar tus objetivos de
          salud sin restringir alimentos. Es esencial querer cambiar nuestros malos hábitos. Evita prácticas
          perjudiciales como provocar vómitos, seguir dietas supervisión médica o utilizar productos dudosos en tu
          rutina de ejercicio. <span>Recuerda, tu salud es lo más importante.</span>
        </p>
      </div>
    </header>
    <main class="nutritional__articles">
      <h4>Recetas Saludables para ti</h4>
      <p>No sabes que cocinar? No te preocupes, te damos algunas recomendaciones de comidas saludables.</p>
      <div class="nutritional__button">
        <button class="button button-primary" type="button" id="random-recipes">
          Cambiar recetas
        </button>
      </div>
      <ul class="nutritional__list"></ul>
      <article class="recipe__container">

      </article>
    </main>
  </section>
  <script src="{{ asset('js/home/diet.js') }}" type="module"></script>
</x-layouts.user-layout>
