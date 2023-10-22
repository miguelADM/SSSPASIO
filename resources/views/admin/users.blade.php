<x-layouts.admin-layout>
  <h1>Usuarios</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">Agregar Usuario <img
        src="{{ asset('assets/icons/admin/add-group.svg') }}" alt=""></button>
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
        {{-- row --}}
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
        {{-- row --}}
        {{-- row --}}
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
        {{-- row --}}
        {{-- row --}}
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
        {{-- row --}}
        {{-- row --}}
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
        {{-- row --}}
      </div>
    </div>
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
  </section>
  <div class="modal__container">
    <div class="modal">
      <button id="close-modal" type="button">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>
      <section class="content">
        <div class="form-container">
          <div class="title">Registrar usuario</div>
          <div class="content">
            <form action="" class="formularioAdmin dos-col">
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Alias</span>
                  <input type="text" id="nombre" name="nombre" readonly="" disabled required>
                </div>
                <div class="input-box">
                  <span class="details">E-mail</span>
                  <input type="text" placeholder="Correo electrónico" required>
                </div>
                <div class="input-box">
                  <span class="details">Teléfono</span>
                  <input type="text" placeholder="No. de celular" required>
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
                  <span class="details">Rutina</span>
                  <input type="text" required id="rutina" name="rutina" placeholder="Nombre rutina"
                    old="{{ old('rutina') }}">
                </div>
                <div class="input-box">
                  <span class="details">Grupo de trabajo</span>
                  <select required id="grupo" name="grupo">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="1">Grupo 1</option>
                    <option value="2">Grupo 2</option>
                    <option value="3">Grupo 3</option>
                    <option value="4">Grupo 4</option>
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Enfermedades/Condiciones</span>
                  <select required id="enf" name="enf">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="1">Enfermedad 1</option>
                    <option value="2">Enfermedad 2</option>
                    <option value="3">Enfermedad 3</option>
                    <option value="4">Enfermedad 4</option>
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Membresía</span>
                  <select required id="membresia" name="membresia">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="Prueba">Prueba</option>
                    <option value="Básico">Básico</option>
                    <option value="Premium">Premium</option>
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Observaciones</span>
                  <textarea id="" cols="50" rows="3" class="form-control" name="observaciones"
                    placeholder="Observaciones acerca del usuario a considerar"></textarea>
                </div>
                <div class="periodo-details">
                  <input type="radio" name="periodo" id="periodo4" value="15 Días">
                  <input type="radio" name="periodo" id="periodo5" value="1 Mes">
                  <input type="radio" name="periodo" id="periodo1" value="Trimestral">
                  <input type="radio" name="periodo" id="periodo2" value="Semestral">
                  <input type="radio" name="periodo" id="periodo3" value="Anualidad">

                  <span class="periodo-title">Periodo</span>
                  <div class="category">
                    <label for="periodo4">
                      <span class="dot one"></span>
                      <span class="periodo">15 Días</span>
                    </label>
                    <label for="periodo5">
                      <span class="dot two"></span>
                      <span class="periodo">1 Mes</span>
                    </label>
                    <label for="periodo1">
                      <span class="dot three"></span>
                      <span class="periodo">Trimestral</span>
                    </label>
                    <label for="periodo2">
                      <span class="dot four"></span>
                      <span class="periodo">Semestral</span>
                    </label>
                    <label for="periodo3">
                      <span class="dot five"></span>
                      <span class="periodo">Anualidad</span>
                    </label>
                  </div>
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
</x-layouts.admin-layout>
