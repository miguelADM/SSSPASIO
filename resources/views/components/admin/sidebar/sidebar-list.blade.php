<ul class="sidebar__list">
  @foreach ($sidebarLinks as $link)
    <li>
      <a class="sidebar__list-item" href="{{ $link['href'] }}">
        <div>
          <img src="{{ asset('assets/icons/admin/' . $link['icon'] . '.svg') }}" alt="flecha derecha">
          <span>{{ $link['text'] }}</span>
        </div>
      </a>
    </li>
  @endforeach
</ul>
