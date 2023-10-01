<section class="about section" id="about">
  <div class="container">
    <x-utils.section-title>
      Sobre Nosotros
    </x-utils.section-title>
    <article class="about__container">
      @foreach ($aboutData as $aboutItem)
        <div class="about__content"
          style="background-image: url({{ '/assets/images/' . $aboutItem['image'] . '.jpg' }});">
          <p class="about__title">{{ $aboutItem['title'] }}</p>
          <div class="about__description">
            <h5>{{ $aboutItem['title'] }}</h5>
            <p>{{ $aboutItem['description'] }}</p>
          </div>
        </div>
      @endforeach
    </article>
  </div>
</section>
