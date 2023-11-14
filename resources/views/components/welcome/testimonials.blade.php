@php
  // mandar a la vista los testimonios para recorrerlos
  $testimonials = [
      [
          'stars' => 5,
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
          'name' => 'John Doe',
      ],
      [
          'stars' => 4,
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
          'name' => 'Benito Juarez',
      ],
      [
          'stars' => 4,
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
          'name' => 'Juan Perez',
      ],
  ];
@endphp
<section class="testimonials section" id="testimonials">
  <div class="container">
    <x-utils.section-title>
      Testimonios
    </x-utils.section-title>
    <article class="testimonials__container">
      <button class="button button-primary" id="prev">
        <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
      </button>
      @foreach ($testimonials as $testimonial)
        <section class="testimonial__card">
          <div class="testimonial__stars">
            @for ($i = 0; $i < $testimonial['stars']; $i++)
              ⭐
            @endfor
          </div>
          <p>{{ $testimonial['description'] }}</p>
          <h5>{{ $testimonial['name'] }}</h5>
        </section>
      @endforeach
      <button class="button button-primary" id="next">
        <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
      </button>
    </article>
  </div>
  <script src="{{ asset('js/components/welcome/testimonials.js') }}"></script>
</section>
