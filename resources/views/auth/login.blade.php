<x-layouts.layout>
  <main class="login">
    <section class="login__container">
      <x-form.button-return />
      <x-form.header-form-login />
      <form action="{{ route('login') }}" method="POST" class="login__form">
        @csrf
        <div class="form__group">
          <x-form.input-email />
          <x-form.input-password />
        </div>
        <div class="form__button">
          <button type="submit" class="button button-primary">Iniciar Sesión</button>
        </div>
      </form>
    </section>
  </main>
</x-layouts.layout>
<script src="{{ asset('js/auth/Login.js') }}"></script>
