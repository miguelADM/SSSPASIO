@php
  $adminOptions = getAdminLinks();
@endphp
<x-layouts.admin-layout>
  <section class="admin__options">
    @foreach ($adminOptions as $option)
      <a href="{{ $option['href'] }}" class="admin__option" style="border-color: {{ $option['color'] }};">
        <div class="admin__option-text">
          <h4>{{ $option['text'] }}</h4>
          <span>5</span>
        </div>
        <img src="{{ asset('assets/icons/admin/' . $option['icon'] . '.svg') }}" alt="icono de {{ $option['text'] }}"
          loading="lazy">
      </a>
    @endforeach
  </section>
</x-layouts.admin-layout>
