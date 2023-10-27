<x-layouts.admin-layout>
  <h1>Enfermedades</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">
      Agregar Enfermedad
      <img src="{{ asset('assets/icons/admin/heart.svg') }}" alt="">
    </button>
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

        <div class="divTableRow">
          <div class="divTableCell">Diabetes</div>
          <div class="divTableCell">Activo</div>
          <div class="divTableCell">Problemas de diabetes 2</div>
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
    <div action="" class="modal">
      <button id="close-modal" type="button">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>

      <section class="content">
        <div class="form-container">
          <div class="title">Registrar enfermedad/condicion</div>
          <div class="content">
            <form action="" class="formularioAdmin dos-col">
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" required id="nombre" name="nombre"
                    placeholder="Nombre de la enfermedad o condición">
                </div>
                <div class="input-box">
                  <span class="details">Estatus</span>
                  <select id="estatus" required name="estatus" placeholder="Estatus">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="ACTIVO">Activo</option>
                    <option value="DESACTIVADO">Inactivo</option>
                  </select>
                </div>
              </div>
              <div class="input-box observaciones">
                <span class="details">Observaciones</span>
                <textarea id="" cols="50" rows="5" class="form-control" name="observaciones"
                  placeholder="Observaciones acerca de la enfermedad/condición"></textarea>
              </div>
              <div class="btn-form-admin">
                <input type="submit" value="Registrar">
              </div>
          </div>
        </div>
      </section>

    </div>
  </div>
</x-layouts.admin-layout>
