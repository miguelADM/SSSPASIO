<aside class="social__networks">
  @foreach ($socialNetworks as $network)
    <a href="{{ $network['url'] }}" target="_blank" class="social__network" style="background: {{ $network['color'] }}">
      <img src="/assets/icons/{{ $network['name'] . '.svg' }}" alt={{ $network['name'] }}>
    </a>
  @endforeach
</aside>
