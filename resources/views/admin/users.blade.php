<x-layouts.admin-layout>
  <h1>Usuarios</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">
      Agregar Usuario
      <img src="{{ asset('assets/icons/admin/add-group.svg') }}" alt="">
    </button>
  </div>
  <section class="table">
    <div class="divTable">
      <div class="divTableBody">
        <div class="divTableHeading">
          <div class="divTableCell">Usuario</div>
          <div class="divTableCell">Nombre</div>
          <div class="divTableCell">Correo</div>
          <div class="divTableCell">Grupo</div>
          <div class="divTableCell">Membresia</div>
          <div class="divTableCell">Salud</div>
          <div class="divTableCell"></div>
        </div>
        @foreach ($users as $item)
        <div class="divTableRow">
          <div class="divTableCell">
            @if ($item->rol == 1)
            Usuario
            @else
            Administrador
            @endif
          </div>
          <div class="divTableCell">
            {{$item->user_name}}
          </div>
          <div class="divTableCell">{{$item->email}}</div>
          <div class="divTableCell">
            {{$item->grupo_name}}
          </div>
          <div class="divTableCell">{{$item->membresia_name}}</div>
          <div class="divTableCell">{{$item->salud}}</div>

          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>

            <div class="table__options-menu">

              <button class="edit" id="editButton-{{ $item->id_user }}">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>

              <form action="{{route('users.destroy',$item->id_user)}}" method="POST" class="delete">
                @csrf 
                @method('DELETE')
                <button type="submit">
                <img type="submit" src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar" loading="lazy">
                </button>
              </form>
            </div>
          </div>
        </div>
        @endforeach
    
      </div>
    </div>
  </section>
  
  
  
  <article class="pagination">
    @if ($users->onFirstPage())
        <button id="prev" title="Anterior" disabled>
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </button>
    @else
        <a href="{{ $users->previousPageUrl() }}" title="Anterior">
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </a>
    @endif

    @for ($i = 1; $i <= $users->lastPage(); $i++)
        <button class="{{ $i === $users->currentPage() ? 'active' : '' }}">
            <a href="{{ $users->url($i) }}">{{ $i }}</a>
        </button>
    @endfor

    @if ($users->hasMorePages())
        <a href="{{ $grupos_trabajo->nextPageUrl() }}" title="Siguiente">
            <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
        </a>
    @else
        <button id="next" title="Siguiente" disabled>
            <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
        </button>
    @endif
  </article>

  <div class="modal__container">
    <div class="modal">
      <button id="close-modal" type="button">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>
      <section class="content">
        <div class="form-container">
          <div class="title">Registrar usuario</div>
          <div class="content">
            <form action="{{route('users.store')}}" method="POST" class="formularioAdmin dos-col">
              @csrf
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Alias</span>
                  <input type="text" id="nombre"  readonly="" disabled required>
                  
                </div>
                <div class="input-box">
                  <span class="details">E-mail</span>
                  <input type="text" placeholder="Correo electrónico" name="email" value="{{old('email')}}" >
                  @error('email')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" placeholder="nombre" name="name" value="{{old('name')}}">
                  @error('name')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                
                <div class="input-box">
                  <span class="details">Sexo</span>
                  <select  id="sexo" name="sexo">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="H">Masculino</option>
                    <option value="M">Femenino</option>
                  </select>
                  @error('sexo')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                <div class="input-box">
                  <span class="details">Contraseña</span>
                  <input type="password" id="password" name="password" placeholder="Contraseña"  autocomplete="new-password">
                  @error('password')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                <div class="input-box">
                  <span class="details">Repite la contraseña</span>
                  <input type="password" id="confirm_password" name="confirm_password"
                    placeholder="Confirmación de contraseña" >
                    @error('confirm_password')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                <div class="input-box">
                  <span class="details">Rol</span>
                  <select id="rol" name="rol">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="1">Usuario</option>
                    <option value="2">Administrador</option>
                  </select>
                  @error('rol')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                <div class="input-box">
                  <span class="details">Grupo de trabajo</span>
                  <select name="grupo" class="form-control" id="grupo">
                    <option value="">Seleccione un Grupo de Trabajo</option>
                      @foreach ($grupos_trabajo as $grupo)
                        <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
                      @endforeach
                  </select>
                  
                </div>
                <div class="input-box">
                  <span class="details">Enfermedades/Condiciones</span>
                  <select name="enfermedad" class="form-control" id="enfermedad">
                    <option value="0">Ninguna</option>
                      @foreach ($enfermedades as $enfermedad)
                        <option value="{{$enfermedad->id}}">{{$enfermedad->nombre}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Membresía</span>
                  <select name="membresia" class="form-control" id="membresia">
                    <option value="">Seleccione una membresia</option>
                @foreach ($membresias as $membresia)
                    <option value="{{$membresia->id}}">{{$membresia->nombre}}</option>
                @endforeach
                </select>
                @error('membresia')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
              </div>
              <div class="btn-form-admin">
                <input type="submit" value="Registrar" onclick="confirmAddUser()">
              </div>
            </form>
          </div>
        </div>
      </section>
      </form>
    </div>
  </div>

  
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css') }}" />
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')}}"></script>

  @if(session('Eliminado'))
  <script>
    iziToast.error({
        title: 'Correcto!',
        message: '{{ session('Eliminado')}}',
        position: 'topRight'
    })
    </script>
  @endif

  @if(session('Email'))
  <script>
    iziToast.error({
        title: 'ERROR!',
        message: '{{ session('Email')}}',
        position: 'topRight'
    })
    </script>
  @endif

    @if(session('Agregado'))
  <script>
    iziToast.success({
        title: 'Correcto!',
        message: '{{ session('Agregado')}}',
        position: 'topRight'
    })
    </script>
  @endif

  @if(session('Editado'))
  <script>
    iziToast.success({
        title: 'Correcto!',
        message: '{{ session('Editado')}}',
        position: 'topRight'
    })
    </script>
  @endif


  {{--CONFIRMAR BORRAR USUARIO--}}
  <script>
      
    document.querySelectorAll('.delete button[type="submit"]').forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault();
        
        iziToast.error({
            timeout: false,
            close: false,
            overlay: false,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            title: '¿Seguro que quieres Borrar este usuario?',
            position: 'center',
            buttons: [
                ['<button><b>Si</b></button>', function (instance, toast) {
                
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    // Si el usuario confirma, envía el formulario de eliminación
                    event.target.closest('form').submit();
                }, true],
                ['<button>NO</button>', function (instance, toast) {
                
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                
                }],
            ],
            onClosing: function(instance, toast, closedBy){
                console.info('Closing | closedBy: ' + closedBy);
            },
            onClosed: function(instance, toast, closedBy){
                console.info('Closed | closedBy: ' + closedBy);
            }
});
        
      });
    });

    function confirmAddUser() {
  const confirmation = confirm('¿Estás seguro de que deseas Agregar un nuevo usuario?');

  if (confirmation) {
    event.target.closest('form').submit();
  } 
  else{
    
  }
}
  </script>

  </x-layouts.admin-layout>
