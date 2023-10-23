@php
  $userName = auth()->user()->name ?? 'Invitado';
  $userInitial = substr($userName, 0, 1);
@endphp
<nav class="nav">
  <div class="navbar">
    <div class="navbar__logo-container">
      <button class="sidebar__toggle">
        <img src="{{ asset('assets/icons/menu.svg') }}" alt="icono de menu">
      </button>
      <a href="{{ route('home') }}" class="navbar__logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Spasssio" style="width: 50px" />
        <h1>Spasssio</h1>
      </a>
    </div>
    <x-home.navbar.button-sign-out />
  </div>
</nav>
