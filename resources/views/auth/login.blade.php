<x-layouts.layout>
  @if(session('error'))
      <div clas="alert alert-danger">
          {{ session('error') }}
      </div>
  @endif
  <main class="login">
    <section class="login__container">
      <x-form.button-return />
      <x-form.header-form-login />
      <form action="{{ route('loginMultiple') }}" method="POST" class="login__form">
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
  <script src="{{ asset('js/auth/Login.js') }}"></script>
</x-layouts.layout>