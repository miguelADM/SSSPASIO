<x-layouts.user-layout>
    <style>
        
    </style>
    
        <section>
            <h3 class="home__title">Bienvenido de nuevo <span>Usuario</span></h3>
            <article class="home__options-container">
                {{-- rutinas --}}
                @foreach ($rutinas as $item)
                <div class="home__option">
                    <div class="home__option-content">
                        <div class="home__option-text">
                            <h5>{{$item->rutina_nombre}}</h5>
                            <p>{{$item->rutina_objetivo}}</p>
                        </div>
                        <div class="home__option-buttons">
                            <a href="/rt-cardio">Ejercicio 1 😮‍💨</a>
                            <a href="/rt-cardio">Ejercicio 2 🔥</a>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/home/cardio.png') }}" alt="Cardio">
                </div>
                @endforeach
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
    </x-layouts.user-layout>