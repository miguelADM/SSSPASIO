<section class="benefits section">
  <div class="container">
    <div class="benefits__container">
      <article>
        <x-utils.section-title>
          Beneficios
        </x-utils.section-title>
        <div class="benefits__content">
          @foreach ($benefitsData as $benefit)
            <div class="benefit__card">
              <img src="{{ '/assets/images/' . $benefit['image'] . '.svg' }}" alt={{ $benefit['image'] }}>
              <p>{{ $benefit['description'] }}</p>
            </div>
          @endforeach
        </div>
      </article>
    </div>
  </div>
</section>
