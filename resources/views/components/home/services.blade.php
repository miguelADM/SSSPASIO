<section class="services section">
  <div class="container">
    <div class="section__title">
      <span></span>
      <h2>Servicios</h2>
      <span></span>
    </div>
    <article class="services__container">
      @foreach ($servicesData as $service)
        <div class="service__card">
          <img src="{{ '/assets/images/' . $service['image'] . '.png' }}" alt={{ $service['title'] }}>
          <h5>{{ $service['title'] }}</h5>
          <p>{{ $service['description'] }}</p>
        </div>
      @endforeach
    </article>
  </div>
</section>
