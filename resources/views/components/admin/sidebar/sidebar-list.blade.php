<ul class="sidebar__list">
  @foreach ($sidebarLinks as $link)
    <li>
      <a class="sidebar__list-item" href="{{ $link['href'] }}">
        <div>
          <img src="{{ asset('assets/icons/admin/' . $link['icon'] . '.svg') }}" alt="flecha derecha">
          <span>{{ $link['text'] }}</span>
        </div>
        {{-- <img class="right" src="{{ asset('assets/icons/admin/right-line.svg') }}" alt="flecha derecha"> --}}
      </a>
    </li>
  @endforeach
</ul>
