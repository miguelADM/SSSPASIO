@php
  $userName = auth()->user()->name ?? 'Invitado';
  $userInitial = substr($userName, 0, 1);
@endphp
<form action="{{ route('logout') }}" method="POST" class="navbar__user-container">
  @csrf
  <button type="submit" class="navbar__user">
    <span class="navbar__user-avatar">{{ $userInitial }}</span>
    <span class="navbar__user-name">{{ $userName }}</span>
    <img src="{{ asset('assets/icons/admin/logout.svg') }}" alt="logout">
  </button>
</form>
