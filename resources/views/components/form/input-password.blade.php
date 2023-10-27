<div>
  <div class="form__input">
    <label for="email">Contraseña</label>
    <div class="input">
      <img src="{{ asset('assets/icons/lock.svg') }}" alt="icono de candado" loading="lazy">
      <input type="password" name="password" id="password" value="{{ old('password') }}"
        placeholder="Ingrese su contraseña" />
      <button id="showPassword" type="button">
        <img src="{{ asset('assets/icons/eye.svg') }}" alt="icono de ojo abierto" loading="lazy">
        <img src="{{ asset('assets/icons/eye2.svg') }}" alt="icono de ojo cerrado" loading="lazy">
      </button>
    </div>
  </div>
  @error('password')
    <p class="form__error">{{ $message }}</p>
  @enderror
</div>
