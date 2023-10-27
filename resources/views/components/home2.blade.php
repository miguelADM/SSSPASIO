{{auth()->user()->password}}



<form action="{{ route('logout')}}" method="POST">
    @csrf
    <button>cerrar sesion</button>
</form>