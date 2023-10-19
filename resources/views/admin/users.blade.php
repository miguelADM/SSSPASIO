<x-layouts.admin-layout>
  <h1>Usuarios</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">Agregar Usuario <img
        src="{{ asset('assets/icons/admin/add-group.svg') }}" alt=""></button>
  </div>
  <section>
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
  </section>
  <div class="modal__container">
    <form action="" class="modal">
      <button id="close-modal" type="button">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>
      <input type="text" name="username">
      <input type="text" name="name">
      <button type="submit" id="enviar">Enviar</button>
    </form>
  </div>
</x-layouts.admin-layout>
