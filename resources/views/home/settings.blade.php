<x-layouts.user-layout>
  <section>
    <article class="settings__container">
      <div class="settings__avatar">
        <div class="settings__avatar-img">
          <img src="{{ asset('assets/images/home/avatar1.webp') }}" alt="">
          <button>
            <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
          </button>
        </div>
        <div class="settings__avatar-info">
          <h3>Ajustes de usuario</h3>
          <p>spasssio@gmail.com</p>
        </div>
      </div>
      <section class="settings__forms">
        <form class="form">
          <h5 class="form__title">Información Personal</h5>
          <div class="form__group">

            <div class="form__input-group">

              <div class="form__input">
                <label for="name">Nombre</label>
                <div class="input">
                  <img src="{{ asset('assets/icons/home/user.svg') }}" alt="icono de correo" loading="lazy">
                  <input type="text" name="name" placeholder="Ingrese su nombre" value="Juan Carlos" />
                </div>
              </div>

              <div class="form__input">
                <label for="lastname">Apellidos</label>
                <div class="input">
                  <img src="{{ asset('assets/icons/home/user.svg') }}" alt="icono de correo" loading="lazy">
                  <input type="text" name="lastname" placeholder="Ingrese sus apellidos" value="Bodoque" />
                </div>
              </div>

            </div>

            <div class="form__input">
              <label for="email">Correo electrónico</label>
              <div class="input">
                <img src="{{ asset('assets/icons/mail.svg') }}" alt="icono de correo" loading="lazy">
                <input type="email" name="email" placeholder="Ingrese su correo"
                  value="juan_carlos_bodoque@gmail.com" />
              </div>
            </div>

            <div class="form__input">
              <label for="phone">Teléfono</label>
              <div class="input">
                <img src="{{ asset('assets/icons/home/phone.svg') }}" alt="icono de correo" loading="lazy">
                <input type="phone" name="phone" placeholder="Ingrese su numero de telefono" value="55488937621" />
              </div>
            </div>

          </div>
          <div class="form__button">
            <button type="submit" class="button button-primary">Guardar Cambios</button>
          </div>
        </form>
        <form class="form">
          <h5 class="form__title">Contraseña</h5>
          <div class="form__group">

            <div class="form__input">
              <label for="email">Contraseña actual</label>
              <div class="input">
                <img src="{{ asset('assets/icons/lock.svg') }}" alt="icono de correo" loading="lazy">
                <input type="password" name="email" placeholder="Ingrese su contraseña actual" />
              </div>
            </div>

            <div class="form__input-group">

              <div class="form__input">
                <label for="name">Contraseña nueva</label>
                <div class="input">
                  <img src="{{ asset('assets/icons/lock.svg') }}" alt="icono de correo" loading="lazy">
                  <input type="password" name="name" placeholder="Ingrese su nombre" />
                </div>
              </div>

              <div class="form__input">
                <label for="lastname">Repetir Contraseña</label>
                <div class="input">
                  <img src="{{ asset('assets/icons/lock.svg') }}" alt="icono de correo" loading="lazy">
                  <input type="password" name="lastname" placeholder="Ingrese sus apellidos" />
                </div>
              </div>

            </div>

          </div>
          <div class="form__button">
            <button type="submit" class="button button-primary">Guardar Nueva Contraseña</button>
          </div>
        </form>
      </section>
    </article>
  </section>
</x-layouts.user-layout>
