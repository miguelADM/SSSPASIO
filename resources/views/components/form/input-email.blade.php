<div>
  <div class="form__input">
    <label for="email">Correo electrónico</label>
    <div class="input">
      <img src="{{ asset('assets/icons/mail.svg') }}" alt="icono de correo" loading="lazy">
      <input type="email" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo" />
    </div>
  </div>
  @error('email')
    <p class="form__error">{{ $message }}</p>
  @enderror
</div>
