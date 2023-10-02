<div>
  <div class="form__input">
    <label for="email">Contraseña</label>
    <div class="input">
      <img src="/assets/icons/lock.svg" alt="icono de candado">
      <input type="password" name="password" id="password" value="{{ old('password') }}"
        placeholder="Ingrese su contraseña" />
      <button id="showPassword" type="button">
        <img src="/assets/icons/eye.svg" alt="icono de ojo abierto">
        <img src="/assets/icons/eye2.svg" alt="icono de ojo cerrado">
      </button>
    </div>
  </div>
  @error('password')
    <p class="form__error">{{ $message }}</p>
  @enderror
</div>
