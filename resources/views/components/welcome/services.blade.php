<section class="services section" id="services">
  <div class="container">
    <x-utils.section-title>
      Servicios
    </x-utils.section-title>
    <article class="services__container">
      @foreach ($servicesData as $service)
        <div class="service__card">
          <img src="{{ asset('/assets/images/' . $service['image'] . '.png') }}" alt={{ $service['title'] }}
            loading="lazy">
          <h5>{{ $service['title'] }}</h5>
          <p>{{ $service['description'] }}</p>
        </div>
      @endforeach
    </article>
  </div>
</section>
