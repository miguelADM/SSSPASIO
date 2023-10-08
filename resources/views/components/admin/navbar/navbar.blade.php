<nav class="nav">
  <div class="navbar">
    <div class="navbar__logo">
      <img src="{{ asset('assets/icons/admin/logo2.png') }}" alt="Logo Spasssio" style="width: 50px" />
      <h1>Dashboard Admin</h1>
    </div>
    {{-- <ul class="navbar__links">
      @foreach ($navLinks as $link)
        <li>
          <a href="{{ $link['href'] }}" class="navbar__link">
            <img src="{{ asset('assets/icons/admin/' . $link['icon'] . '.svg') }}" alt="">
            <span>{{ $link['text'] }}</span>
          </a>
        </li>
      @endforeach
    </ul> --}}
    <div class="navbar__user-container">
      <button class="navbar__user">
        <span class="navbar__user-avatar">A</span>
        <span class="navbar__user-name">Admin</span>
      </button>
    </div>
  </div>
</nav>
