<section class="timer__container">
  <link rel="stylesheet" href="{{ asset('css/home/timer.css') }}">
  <div class="timers__container">
    <div class="routine__timers">
      <div class="intensity__container">
        <div class="progress">
          <div class="progress-value"></div>
        </div>
      </div>
      <div class="timers">
        <p class="intensity"></p>
        <div class="timer">
          00<span class="minutes">:</span>00
        </div>
        <div class="controls">
          <button class="control start">
            <svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <g fill="currentColor" fill-rule="evenodd">
                <path fill="currentColor"
                  d="M5.669 4.76a1.469 1.469 0 0 1 2.04-1.177c1.062.454 3.442 1.533 6.462 3.276c3.021 1.744 5.146 3.267 6.069 3.958c.788.591.79 1.763.001 2.356c-.914.687-3.013 2.19-6.07 3.956c-3.06 1.766-5.412 2.832-6.464 3.28c-.906.387-1.92-.2-2.038-1.177c-.138-1.142-.396-3.735-.396-7.237c0-3.5.257-6.092.396-7.235Z" />
              </g>
            </svg>
          </button>
          <button class="control pause">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <g fill="none">
                <path fill="#fff"
                  d="M9 3a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm8 0a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z" />
              </g>
            </svg>
          </button>
          <button class="control reset">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <g fill="none">
                <path fill="#fff"
                  d="M20 9.5a1.5 1.5 0 0 1 1.5 1.5a8.5 8.5 0 0 1-8.5 8.5h-2.382a1.5 1.5 0 0 1-2.179 2.06l-2.494-2.494a1.495 1.495 0 0 1-.445-1.052v-.028c.003-.371.142-.71.368-.97l.071-.077l2.5-2.5a1.5 1.5 0 0 1 2.18 2.061H13a5.5 5.5 0 0 0 5.5-5.5A1.5 1.5 0 0 1 20 9.5Zm-4.44-7.06l2.5 2.5a1.5 1.5 0 0 1 0 2.12l-2.5 2.5a1.5 1.5 0 0 1-2.178-2.06H11A5.5 5.5 0 0 0 5.5 13a1.5 1.5 0 1 1-3 0A8.5 8.5 0 0 1 11 4.5h2.382a1.5 1.5 0 0 1 2.179-2.06Z" />
              </g>
            </svg>
          </button>
        </div>
        <div class="timer timer__small" id="seconds">
          0 <span>segundos</span>
        </div>
      </div>
    </div>
    <div class="current__exercise">
      <img class="current__gif" src="{{ asset('assets/routine/exercises/ejercicio1.gif') }}" alt="">
    </div>
  </div>
  <script src="{{ asset('js/components/home/timer.js') }}" type="module"></script>
</section>
