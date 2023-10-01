<x-layouts.layout>
  <main class="login">
    <section class="login__container">
      <a href="/" class="login__return">
        <img src="/assets/icons/left.svg" alt="regresar al inicio">
      </a>
      <img src="/assets/images/logo.png" alt="Logo SPASSSIO" class="login__logo">
      <h2>Bienvenido de nuevo!</h2>
      <p>Ingrese sus credenciales para iniciar sesión</p>
      <form action="{{ route('login') }}" method="POST" class="login__form">
        @csrf
        <div class="form__group">
          <div>
            <div class="form__input">
              <label for="email">Correo electrónico</label>
              <div class="input">
                <img src="/assets/icons/mail.svg" alt="icono de correo">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo" />
              </div>
            </div>
            @error('email')
              <p class="form__error">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <div class="form__input">
              <label for="email">Contraseña</label>
              <div class="input">
                <img src="/assets/icons/lock.svg" alt="icono de candado">
                <input type="password" name="password" id="password" value="{{ old('password') }}"
                  placeholder="Ingrese su contraseña" />
                <button id="showPassword" type="button">
                  <img src="/assets/icons/eye.svg" alt="icono de candado">
                  <img src="/assets/icons/eye2.svg" alt="icono de candado">
                </button>
              </div>
            </div>
            @error('password')
              <p class="form__error">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="form__button">
          <button type="submit" class="button button-primary">Iniciar Sesión</button>
        </div>
      </form>
    </section>
  </main>
</x-layouts.layout>
<script src="{{ asset('js/auth/Login.js') }}"></script>
