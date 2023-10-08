@php
  $adminOptions = [['text' => 'Usuarios', 'href' => 'usuarios', 'icon' => 'users', 'color' => '#FFB6C1'], ['text' => 'Grupos de Trabajo', 'href' => 'grupos-trabajo', 'icon' => 'add-group', 'color' => '#87CEEB'], ['text' => 'Enfermedades', 'href' => 'enfermedades', 'icon' => 'heart', 'color' => '#98FB98'], ['text' => 'Clasificacion de Ejercicios', 'href' => 'clasificacion', 'icon' => 'trophy', 'color' => '#FFD700'], ['text' => 'Ejercicios', 'href' => 'ejercicios', 'icon' => 'weights', 'color' => '#FFA07A'], ['text' => 'Rutinas', 'href' => 'rutinas', 'icon' => 'exercise-running', 'color' => '#B0E0E6'], ['text' => 'Nutricional', 'href' => 'recomendacion-nutricional', 'icon' => 'food', 'color' => '#FF69B4'], ['text' => 'Tips', 'href' => 'tips', 'icon' => 'tips', 'color' => '#90EE90'], ['text' => 'Progreso de Usuarios', 'href' => 'progreso', 'icon' => 'chart-bar', 'color' => '#ADD8E6']];
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
