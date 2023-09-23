<x-layouts.layout>
  <main class="login">
    <section class="login__container">
      <a href="/" class="login__return">
        <img src="/assets/icons/left.svg" alt="regresar al inicio">
      </a>
      <img src="/assets/images/logo.png" alt="Logo SPASSSIO" class="login__logo">
      <h2>Bienvenido de nuevo!</h2>
      <p>Ingrese sus credenciales para iniciar sesión</p>
      <form class="login__form">
        <div class="form__group">
          <div class="form__input">
            <label for="email">Correo electronico</label>
            <div class="input">
              <img src="/assets/icons/mail.svg" alt="icono de correo">
              <input type="email" name="email" id="email" placeholder="Ingrese su correo" />
            </div>
          </div>
          <div class="form__input">
            <label for="email">Contraseña</label>
            <div class="input">
              <img src="/assets/icons/lock.svg" alt="icono de candado">
              <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" />
            </div>
          </div>
        </div>
        <div class="form__button">
          <button type="submit" class="button button-primary">Iniciar Sesión</button>
        </div>
      </form>
    </section>
  </main>
</x-layouts.layout>
