<x-layouts.admin-layout>
  <h1>Grupos de trabajo</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">Agregar grupo de trabajo <img
        src="{{ asset('assets/icons/admin/add-group.svg') }}" alt=""></button>
  </div>

  <section class="table">
    <div class="divTable">
      <div class="divTableBody">
        <div class="divTableHeading">
          <div class="divTableCell">Nombre</div>
          <div class="divTableCell">Estatus</div>
          <div class="divTableCell">Observaciones</div>
          <div class="divTableCell"></div>
        </div>
        {{-- row --}}
        <div class="divTableRow">
          <div class="divTableCell">Spasssio0001</div>
          <div class="divTableCell">
            Kazahura Miller
          </div>
          <div class="divTableCell">
            Son personas que viven en esa zona
          </div>
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
      </div>
    </div>
  </section>

  <div class="modal__container">
    <div action="" class="modal">
      <button id="close-modal" type="button">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>

      <section class="content">
        <div class="form-container">
          <div class="title">Registrar grupo de trabajo</div>
          <div class="content">
            <form action="" class="formularioAdmin dos-col">
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" id="nombre" name="nombre" placeholder="Nombre del grupo de trabajo">
                </div>
                <div class="input-box">
                  <span class="details">Estatus</span>
                  <select id="estatus" required name="estatus">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="ACTIVO">Activo</option>
                    <option value="DESACTIVADO">Inactivo</option>
                  </select>
                </div>
              </div>
              <div class="input-box observaciones">
                <span class="details">Observaciones</span>
                <textarea id="" cols="50" rows="5" class="form-control" name="observaciones"
                  placeholder="Observaciones acerca del grupo de trabajo"></textarea>
              </div>
              <div class="btn-form-admin">
                <input type="submit" value="Registrar">
              </div>
            </form>
          </div>
        </div>
      </section>

    </div>
  </div>
</x-layouts.admin-layout>
