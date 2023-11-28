<x-layouts.admin-layout>
  <h1>Usuarios</h1>
  
  @if (session('success'))
    <div id="alertBox" class="alert alert__success">
      {{ session('success') }}
    </div>
  @endif

  @if (session('error'))
    <div id="alertBox" class="alert alert__error">
      {{ session('error') }}
    </div>
  @endif
  
  </div>
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
          <div class="divTableCell">Correo</div>
          <div class="divTableCell">Grupo</div>
          <div class="divTableCell">Membresia</div>
          <div class="divTableCell">Salud</div>
          <div class="divTableCell"></div>
        </div>
        @foreach ($users as $user)
          <div class="divTableRow">
            <div class="divTableCell">
              {{ $user->email }}
            </div>
            <div class="divTableCell">
              {{ $user->grupo->nombre ?? 'Sin Grupo' }}
            </div>
            <div class="divTableCell">
              {{ $user->membresia->nombre ?? 'Sin Membresia' }}
            </div>
            <div class="divTableCell">
             @foreach ($user->enfermedades as $enfermedad)
                {{ $enfermedad->nombre }}
              @endforeach
            </div>
            <div class="divTableCell relative">
              <button class="table__options" type="button" data-id="1">
                <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
              </button>
              <div class="table__options-menu">
                <button class="edit" onclick="editModal()">
                  <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
                </button>
                <button class="delete" onclick="confirmDelete('{{ route('user.destroy', $user->id) }}')">
                  <img src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar" loading="lazy">
                </button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <article class="pagination">
    <button id="prev" title="Anterior" @if ($users->previousPageUrl()) onclick="window.location='{{ $users->previousPageUrl() }}'" @endif>
        <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
    </button>
    @for ($i = 1; $i <= $users->lastPage(); $i++)
        <button @if ($users->currentPage() === $i) class="active" @endif onclick="window.location='{{ $users->url($i) }}'">{{ $i }}</button>
    @endfor
    <button id="next" title="Siguiente" @if ($users->nextPageUrl()) onclick="window.location='{{ $users->nextPageUrl() }}'" @endif>
        <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
    </button>
  </article>
  
  <div class="modal__container" id="agregar-usuario">
    <div class="modal">
      <button class="close-modal" type="button" id="close-modal">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>
      <section class="content">
        <div class="form-container">
          <div class="title">Registrar usuario</div>
          <div id="error-container"></div>
          <div class="content">
            <form action="{{ route('user.store') }}" method="POST" class="formularioAdmin dos-col" id="user-create">
              @csrf       
              <div class="user-details">
                <div class="input-box">
                  <span class="details">E-mail</span>
                  <input type="email" name="email" placeholder="Correo electrónico" >
                </div>
                <div class="input-box">
                  <span class="details">Teléfono</span>
                  <input type="text" name="tel" placeholder="No. de celular">
                </div>
                <div class="input-box">
                  <span class="details">Sexo</span>
                  <select  id="sexo" name="sexo">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="H">Masculino</option>
                    <option value="M">Femenino</option>
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Contraseña</span>
                  <input type="password" id="password" name="password" placeholder="Contraseña">
                </div>
                <div class="input-box">
                  <span class="details">Repite la contraseña</span>
                  <input type="password" id="confirm_password" name="confirm_password"
                    placeholder="Confirmación de contraseña">
                </div>
                <div class="input-box">
                  <span class="details">Rol</span>
                  <select  id="rol" name="rol">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="1">Usuario</option>
                    <option value="2">Administrador</option>
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Grupo de trabajo</span>
                  <select id="grupo" name="grupo">
                    <option disabled selected value>Seleccionar...</option>
                    @foreach ($grupos as $grupo)
                      <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Enfermedades/Condiciones</span>
                  <select id="enf" name="enf">
                    <option disabled selected value>Seleccionar...</option>
                    @foreach ($enfermedades as $enfermedad)
                      <option value="{{ $enfermedad->id }}">{{ $enfermedad->nombre }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Membresía</span>
                  <select  id="membresia" name="membresia">
                    <option disabled selected value>Seleccionar...</option>
                    @foreach ($membresias as $membresia)
                      <option value="{{ $membresia->id }}">{{ $membresia->nombre }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="btn-form-admin">
                <input type="submit" value="Registrar">
              </div>
            </form>
          </div>
        </div>
      </section>
      </form>
    </div>
  </div>

  <div class="modal__container" id="editar-usuario">
    <div class="modal">
      <button class="close-modal" type="button" id="close-modal">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>
      <section class="content">
        <div class="form-container">
          <div class="title">Editar usuario</div>
          <div id="error-container"></div>
          <div class="content">
            <form action="{{ route('user.update') }}" method="POST" class="formularioAdmin dos-col" id="user-create">
              @csrf
              <input type="hidden" name="id_user">
              <div class="user-details">
                <div class="input-box">
                  <span class="details">E-mail</span>
                  <input type="email" name="email" placeholder="Correo electrónico" >
                </div>
                <div class="input-box">
                  <span class="details">Teléfono</span>
                  <input type="text" name="tel" placeholder="No. de celular">
                </div>
                <div class="input-box">
                  <span class="details">Sexo</span>
                  <select  id="sexo" name="sexo">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="H">Masculino</option>
                    <option value="M">Femenino</option>
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Contraseña</span>
                  <input type="password" id="password" name="password" placeholder="Contraseña">
                </div>
                <div class="input-box">
                  <span class="details">Repite la contraseña</span>
                  <input type="password" id="confirm_password" name="confirm_password"
                    placeholder="Confirmación de contraseña">
                </div>
                <div class="input-box">
                  <span class="details">Rol</span>
                  <select  id="rol" name="rol">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="1">Usuario</option>
                    <option value="2">Administrador</option>
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Grupo de trabajo</span>
                  <select id="grupo" name="grupo">
                    <option disabled selected value>Seleccionar...</option>
                    @foreach ($grupos as $grupo)
                      <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Enfermedades/Condiciones</span>
                  <select id="enf" name="enf">
                    <option disabled selected value>Seleccionar...</option>
                    @foreach ($enfermedades as $enfermedad)
                      <option value="{{ $enfermedad->id }}">{{ $enfermedad->nombre }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Membresía</span>
                  <select  id="membresia" name="membresia">
                    <option disabled selected value>Seleccionar...</option>
                    @foreach ($membresias as $membresia)
                      <option value="{{ $membresia->id }}">{{ $membresia->nombre }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="btn-form-admin">
                <input type="submit" value="Registrar">
              </div>
            </form>
          </div>
        </div>
      </section>
      </form>
    </div>
  </div>

  <script>
    function editModal(){
      const editModal = document.getElementById(`editar-usuario`);
      editModal.classList.add('show-modal');
      const closeModalButtons = editModal.querySelectorAll('.close-modal');
      closeModalButtons.forEach(button => {
          button.addEventListener('click', () => {
              editModal.classList.remove('show-modal');
          });
      });
    }
  </script>
</x-layouts.admin-layout>
