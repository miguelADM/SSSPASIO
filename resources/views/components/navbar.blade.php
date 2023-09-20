@php
  $links = [['href' => '/', 'text' => 'Inicio'], ['href' => '/servicios', 'text' => 'Servicios'], ['href' => '/testimonios', 'text' => 'Testimonios'], ['href' => '/planes', 'text' => 'Planes'], ['href' => '/beneficios', 'text' => 'Beneficios'], ['href' => '/nosotros', 'text' => 'Nosotros']];
@endphp
<nav>
  <div class="container">
    <div class="navbar">
      <a href="/">
        <h2>SPASSSIO</h2>
      </a>
      <ul class="navbar__links">
        @foreach ($links as $link)
          <li>
            <a href="{{ $link['href'] }}" class="navbar__link">
              {{ $link['text'] }}
            </a>
          </li>
        @endforeach
        <li><a href="#" class="button button-primary">Iniciar Sesión</a></li>
      </ul>
    </div>
  </div>
</nav>
