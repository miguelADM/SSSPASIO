<nav class="nav">
  <div class="navbar">
    <div class="navbar__logo-container">
      <button class="sidebar__toggle">
        <img src="{{ asset('assets/icons/menu.svg') }}" alt="icono de menu">
      </button>
      <a href="{{ route('admin') }}" class="navbar__logo">
        <img src="{{ asset('assets/icons/admin/logo2.png') }}" alt="Logo Spasssio" style="width: 50px" />
        <h1>Dashboard</h1>
      </a>
    </div>
    <form action="{{ route('logout') }}" method="POST" class="navbar__user-container">
      @csrf
      <button type="submit" class="navbar__user">
        <span class="navbar__user-avatar">A</span>
        <span class="navbar__user-name">Admin</span>
        <img src="{{ asset('assets/icons/admin/logout.svg') }}" alt="logout">
      </button>
    </form>
  </div>
</nav>
