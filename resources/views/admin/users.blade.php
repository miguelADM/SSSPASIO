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
          <div class="divTableCell">Usuario</div>
          <div class="divTableCell">Nombre</div>
          <div class="divTableCell">Correo</div>
          <div class="divTableCell">Grupo</div>
          <div class="divTableCell">Membresia</div>
          <div class="divTableCell">Salud</div>
          <div class="divTableCell"></div>
        </div>

        <div class="divTableRow">
          <div class="divTableCell">Spasssio0001</div>
          <div class="divTableCell">
            Kazahura Miller
          </div>
          <div class="divTableCell">usuario@mail.com</div>
          <div class="divTableCell">
            UNIVERSIDAD NEZA
          </div>
          <div class="divTableCell">Premium</div>
          <div class="divTableCell">Sindrome metabólico</div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <button class="delete">
                <img src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar" loading="lazy">
              </button>
            </div>
          </div>
        </div>

        <div class="divTableRow">
          <div class="divTableCell">Spasssio0001</div>
          <div class="divTableCell">
            Kazahura Miller
          </div>
          <div class="divTableCell">usuario@mail.com</div>
          <div class="divTableCell">
            UNIVERSIDAD NEZA
          </div>
          <div class="divTableCell">Premium</div>
          <div class="divTableCell">Sindrome metabólico</div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <button class="delete">
                <img src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar" loading="lazy">
              </button>
            </div>
          </div>
        </div>
        <div class="divTableRow">
          <div class="divTableCell">Spasssio0001</div>
          <div class="divTableCell">
            Kazahura Miller
          </div>
          <div class="divTableCell">usuario@mail.com</div>
          <div class="divTableCell">
            UNIVERSIDAD NEZA
          </div>
          <div class="divTableCell">Premium</div>
          <div class="divTableCell">Sindrome metabólico</div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <button class="delete">
                <img src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar" loading="lazy">
              </button>
            </div>
          </div>
        </div>
        <div class="divTableRow">
          <div class="divTableCell">Spasssio0001</div>
          <div class="divTableCell">
            Kazahura Miller
          </div>
          <div class="divTableCell">usuario@mail.com</div>
          <div class="divTableCell">
            UNIVERSIDAD NEZA
          </div>
          <div class="divTableCell">Premium</div>
          <div class="divTableCell">Sindrome metabólico</div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <button class="delete">
                <img src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar"
                  loading="lazy">
              </button>
            </div>
          </div>
        </div>

        <div class="divTableRow">
          <div class="divTableCell">Spasssio0001</div>
          <div class="divTableCell">
            Kazahura Miller
          </div>
          <div class="divTableCell">usuario@mail.com</div>
          <div class="divTableCell">
            UNIVERSIDAD NEZA
          </div>
          <div class="divTableCell">Premium</div>
          <div class="divTableCell">Sindrome metabólico</div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones"
                loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <button class="delete">
                <img src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar"
                  loading="lazy">
              </button>
            </div>
          </div>
        </div>

        <div class="divTableRow">
          <div class="divTableCell">Spasssio0001</div>
          <div class="divTableCell">
            Kazahura Miller
          </div>
          <div class="divTableCell">usuario@mail.com</div>
          <div class="divTableCell">
            UNIVERSIDAD NEZA
          </div>
          <div class="divTableCell">Premium</div>
          <div class="divTableCell">Sindrome metabólico</div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones"
                loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <button class="delete">
                <img src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar"
                  loading="lazy">
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <article class="pagination">
    <button id="prev" title="Anterior">
      <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
    </button>
    <button class="active">1</button>
    <button>2</button>
    <button id="next" title="Siguiente">
      <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
    </button>
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
            <form action="{{ route('user.store') }}" method="POST" class="formularioAdmin dos-col">
              @csrf       
              <div class="user-details">
                <div class="input-box">
                  <span class="details">E-mail</span>
                  <input type="email" name="email" placeholder="Correo electrónico" required>
                </div>
                <div class="input-box">
                  <span class="details">Teléfono</span>
                  <input type="text" name="tel" placeholder="No. de celular">
                </div>
                <div class="input-box">
                  <span class="details">Sexo</span>
                  <select required id="sexo" name="sexo">
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
                  <select required id="rol" name="rol">
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
                  <select required id="membresia" name="membresia">
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

</x-layouts.admin-layout>
