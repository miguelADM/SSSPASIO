<nav>
  <div class="container">
    <div class="navbar">
      <a href="/">
        <h2>SPASSSIO</h2>
      </a>
      <ul class="navbar__links">
        @foreach ($navLinks as $link)
          <li>
            <a href="{{ $link['href'] }}" class="navbar__link">
              {{ $link['text'] }}
            </a>
          </li>
        @endforeach
        @if (Route::has('login'))
          <li>
            <a href={{ route('login') }} class="button button-primary">Iniciar Sesión</a>
          </li>
        @endif
      </ul>
      <button class="navbar__menu-btn">
        <img src="{{ asset('assets/icons/menu.svg') }}" alt="icono de menu">
      </button>
    </div>
  </div>
</nav>
<script src="{{ asset('js/components/ui/Navbar.js') }}"></script>
