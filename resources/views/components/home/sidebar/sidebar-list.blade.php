<ul class="sidebar__list">
  @foreach ($sidebarLinks as $link)
    <li>
      <a class="sidebar__list-item" href="{{ $link['href'] }}">
        <div>
          <img src="{{ asset('assets/icons/home/' . $link['icon'] . '.svg') }}" alt="flecha derecha">
          <span>{{ $link['text'] }}</span>
        </div>
      </a>
    </li>
  @endforeach
  <li>
    <a class="sidebar__list-item" href="settings">
      <div>
        <img src="{{ asset('assets/icons/setting.svg') }}" alt="ajustes">
        <span>Ajustes</span>
      </div>
    </a>
  </li>
</ul>
