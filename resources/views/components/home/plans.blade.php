@php
  $plans = [['planName' => 'Plan Basico', 'image' => 'basico'], ['planName' => 'Plan Premium', 'image' => 'premium'], ['planName' => 'Plan Empresarial', 'image' => 'empresarial']];
@endphp
<section class="plans section">
  <div class="container">
    <x-utils.section-title>
      Nuestros Planes
    </x-utils.section-title>
    <div class="plans__container">
      @foreach ($plans as $plan)
        <div class="plan__card">
          <h5>{{ $plan['planName'] }}</h5>
          <img src={{ '/assets/images/' . $plan['image'] . '.png' }} alt="{{ $plan['planName'] }}">
          <a href="#" class="button button-primary">Lo quiero!</a>
        </div>
      @endforeach
    </div>
  </div>
</section>
