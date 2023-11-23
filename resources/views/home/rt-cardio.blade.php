<x-layouts.user-layout>
  <link rel="stylesheet" href="{{ asset('css/home/timer.css') }}">
  <section class="intro">
    <div class="intro__card">
      <div class="intro__title">
        <h6>Rutina</h6>
        <h2>Cardio 2</h2>
      </div>
      <div class="intro__info">
        <h6>
          <p>“NO IMPORTA CUAN DESPACIO VAYAS MIENTRAS SIGAS EN CONSTANTE MOVIMIENTO”
            <br>-CONFUCIO
          </p>
          <br>
        </h6>
        <p>Ya conoces la metodología del programa, por lo que solamente te comento que los
          ejercicios de calentamiento y relajación siempre serán los mismos y lo único que
          cambiará serán tus 5 ejercicios base. En esta nueva rutina habrá algunas variaciones,
          por lo que al principio te vas a cansar como en la primera rutina. Es normal, ya
          que tu cuerpo se adaptó a la rutina anterior y hay que desadaptarlo para lograr
          adecuados objetivos de salud.</p>
        <br>

        <p>SI TE SIENTES MAL EN EL EJERCICIO SUSPENDE HASTA SABER SU ORIGEN O SI ALGUN EJERCICIO TE
          LASTIMA O INCOMODA REPORTALO DIRECTAMENTE CON TU ENTRENADOR PARA CAMBIAR ESE EJERCICIO.
        </p>
      </div>
    </div>
  </section>

  <x-home.timer.timer />

  <div class="sections__menu-container">
    <ul class="sections__menu">
      <li><a id="btn_tuto" onclick="toggleVisibility('tutorial')">Tutorial</a></li>
      <li><a id="btn_warm" onclick="toggleVisibility('warm-up')">Calentamiento</a></li>
      <li><a id="btn_exe" onclick="toggleVisibility('exercises')">Ejercicios</a></li>
      <li><a id="btn_cool" onclick="toggleVisibility('cooldown')">Enfriamiento</a></li>
    </ul>
  </div>

  <div id="tutorial" class="section__video toggle__section">
    <iframe src="https://www.youtube.com/embed/0ORbQuMKUk4?si=m1dk_o88p4g07sEP" title="Video tutorial" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>
  </div>

  <div id="warm-up" class="section__video toggle__section">
    <iframe src="https://www.youtube.com/embed/uNeIBIHYAGg?si=5y-cmMdB_VllWym3" title="Video de calentamiento"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>
  </div>

  <div id="exercises" class="section__exercises toggle__section">
    <div id="music">
      <div id="spotify" class="music__player">
        <iframe style="border-radius:12px"
          src="https://open.spotify.com/embed/playlist/1E6D5TSJt4EcNWYCClGVB4?utm_source=generator" frameBorder="0"
          allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          loading="lazy"></iframe>
      </div>

      <div id="soundCloud" class="music__player">
        <iframe scrolling="no" frameborder="no" allow="autoplay"
          src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1411004923&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
        <div
          style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
          <a href="https://soundcloud.com/victor-zarraga-414151089" title="VICTOR ZARRAGA" target="_blank"
            style="color: #cccccc; text-decoration: none;">VICTOR ZARRAGA
          </a>
          ·
          <a href="https://soundcloud.com/victor-zarraga-414151089/rutina-2" title="Cardio 2" target="_blank"
            style="color: #cccccc; text-decoration: none;">Cardio 2
          </a>
        </div>
      </div>
    </div>


    <div class="excercises__container">
      <div class="box">
        <img class="box__img" src="{{ asset('assets/images/ej-temp/ej1.gif') }}" alt="Ejercicio 1">
        <div class="box__title-cont">
          <h3 class="box__title">Ejercicio 1</h3>
        </div>
        <p class="box__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere sed
          elit luctus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
          consectetur augue sed orci faucibus facilisis.</p>
      </div>

      <div class="box">
        <img class="box__img" src="{{ asset('assets/images/ej-temp/ej2.gif') }}" alt="Ejercicio 2">
        <div class="box__title-cont">
          <h3 class="box__title">Ejercicio 2</h3>
        </div>
        <p class="box__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere sed
          elit luctus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
          consectetur augue sed orci faucibus facilisis.</p>
      </div>

      <div class="box">
        <img class="box__img" src="{{ asset('assets/images/ej-temp/ej3.gif') }}" alt="Ejercicio 3">
        <div class="box__title-cont">
          <h3 class="box__title">Ejercicio 3</h3>
        </div>
        <p class="box__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere sed
          elit luctus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
          consectetur augue sed orci faucibus facilisis.</p>
      </div>

      <div class="box">
        <img class="box__img" src="{{ asset('assets/images/ej-temp/ej4.gif') }}" alt="Ejercicio 4">
        <div class="box__title-cont">
          <h3 class="box__title">Ejercicio 4</h3>
        </div>
        <p class="box__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere sed
          elit luctus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
          consectetur augue sed orci faucibus facilisis.</p>
      </div>

      <div class="box">
        <img class="box__img" src="{{ asset('assets/images/ej-temp/ej5.gif') }}" alt="Ejercicio 5">
        <div class="box__title-cont">
          <h3 class="box__title">Ejercicio 5</h3>
        </div>
        <p class="box__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere sed
          elit luctus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
          consectetur augue sed orci faucibus facilisis.</p>
      </div>

    </div>

  </div>

  <div id="cooldown" class="section__video toggle__section">
    <iframe src="https://www.youtube.com/embed/ZAbls6xmkUk?si=vIMiP1AHUmepuTwm" title="Video de enfriamiento"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

  </div>
  <script src="{{ asset('js/components/home/ejercicios.js') }}"></script>
  <script src="{{ asset('js/components/home/timer.js') }}"></script>

</x-layouts.user-layout>
