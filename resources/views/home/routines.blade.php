<x-layouts.user-layout>
    <section>
        <h3 class="home__title">Bienvenido de nuevo <span>Usuario</span></h3>
        <article class="home__options-container">
            {{-- cardio --}}
            <div class="home__option">
                <div class="home__option-content">
                    <div class="home__option-text">
                        <h5>Cardio</h5>
                        <p>Rutinas para mejorar tu resistencia y salud.</p>
                    </div>
                    <div class="home__option-buttons">
                        <a href="#">Rutina 1 😮‍💨</a>
                        <a href="#">Rutina 2 🔥</a>
                    </div>
                </div>
                <img src="{{ asset('assets/images/home/cardio.png') }}" alt="Cardio">
            </div>
            {{-- cardio --}}

            {{-- tono muscular --}}
            <div class="home__option">
                <div class="home__option-content">
                    <div class="home__option-text">
                        <h5>Tono muscular</h5>
                        <p>Fortalece y tonifica tus músculos.</p>
                    </div>
                    <div class="home__option-buttons">
                        <a href="#">Continuar 🔥</a>
                    </div>
                </div>
                <img src="{{ asset('assets/images/home/tono-muscular.png') }}" alt="Cardio">
            </div>
            {{-- tono muscular --}}
        </article>
    </section>

    <section class="temp">

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

        <div class="sections__menu-container">
            <ul class="sections__menu">
                <li><a href="#tutorial">Tutorial</a></li>
                <li><a href="#warm-up">Calentamiento</a></li>
                <li><a href="#">Ejercicios</a></li>
                <li><a href="#cooldown">Enfriamiento</a></li>
            </ul>
        </div>

        <div id="tutorial" class="section__video">
            <h2>Tutorial</h2>
            <iframe src="https://www.youtube.com/embed/0ORbQuMKUk4?si=m1dk_o88p4g07sEP" title="Video tutorial"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <div id="warm-up" class="section__video">
            <h2>Calentamiento</h2>
            <iframe src="https://www.youtube.com/embed/uNeIBIHYAGg?si=5y-cmMdB_VllWym3" title="Video de calentamiento"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <div id="cooldown" class="section__video">
            <h2>Enfriamiento</h2>
            <iframe src="https://www.youtube.com/embed/ZAbls6xmkUk?si=vIMiP1AHUmepuTwm" title="Video de enfriamiento"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </section>

</x-layouts.user-layout>
