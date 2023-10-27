<x-layouts.admin-layout>
  <h1>Rutinas</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">Agregar rutina <img
        src="{{ asset('assets/icons/admin/exercise-running.svg') }}" alt=""></button>
  </div>

  <section class="table">
    <div class="divTable">
      <div class="divTableBody">
        <div class="divTableHeading">
          <div class="divTableCell">Tipo</div>
          <div class="divTableCell">Nombre</div>
          <div class="divTableCell"></div>
        </div>

        <div class="divTableRow">
          <div class="divTableCell">Cardio</div>
          <div class="divTableCell">CARDIO 2</div>
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
          <div class="title">Registrar rutina</div>
          <div class="content">
            <form action="" class="formularioAdmin">
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Tipo</span>
                  <select required id="cat" name="cat">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="Cardio">Cardio</option>
                    <option value="Force">Force</option>
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" id="nombre" required name="nombre" placeholder="Nombre de la rutina">
                </div>
                <div class="input-box">
                  <span class="details">Audio</span>
                  <input type="text" required name="audio" placeholder="URL de Soundcloud">
                </div>
                <div class="input-box">
                  <span class="details">Instrucciones</span>
                  <textarea class="ckeditor" name="descripcion" id="editor1" rows="10" cols="80" required=""
                    placeholder="Instrucciónes a seguir"></textarea>
                </div>
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
