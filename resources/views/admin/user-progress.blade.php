<x-layouts.admin-layout>
  <h1>Progreso de Usuarios</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">Agregar nuevo
      <img src="{{ asset('assets/icons/admin/chart-bar.svg') }}" alt=""></button>
  </div>

  <section class="table">
    <div class="divTable">
      <div class="divTableBody">
        <div class="divTableHeading">
          <div class="divTableCell">Id</div>
          <div class="divTableCell">Usuario</div>
          <div class="divTableCell">Inicio</div>
          <div class="divTableCell">Fin</div>
          <div class="divTableCell">Coronas</div>
          <div class="divTableCell">Sumatoria</div>
          <div class="divTableCell">Semana 1</div>
          <div class="divTableCell">Semana 2</div>
          <div class="divTableCell">Semana 3</div>
          <div class="divTableCell">Semana 4</div>
          <div class="divTableCell">Rutina</div>
          <div class="divTableCell"></div>
        </div>

        <div class="divTableRow">
          <div class="divTableCell">1</div>
          <div class="divTableCell">US0033</div>
          <div class="divTableCell">01/07/2022</div>
          <div class="divTableCell">31/07/2022</div>
          <div class="divTableCell">8</div>
          <div class="divTableCell">28</div>
          <div class="divTableCell">7</div>
          <div class="divTableCell">7</div>
          <div class="divTableCell">7</div>
          <div class="divTableCell">7</div>
          <div class="divTableCell">Tono muscular 1</div>
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
          <div class="title">Registrar tips</div>
          <div class="content">
            <form action="" class="formularioAdmin una-col">

              <div class="user-details">
                <div class="input-box">
                  <span class="details">Título</span>
                  <input type="text" id="nombre" required name="nombre" placeholder="Título del tip">
                </div>
                <div class="input-box">
                  <span class="details">Categoría</span>
                  <select id="cat" required name="cat">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="Tips">Tips</option>
                    <option value="Enterate">Enterate</option>
                    <option value="Motivate">Motivate</option>
                    <option value="Algo Más">Algo Más</option>
                  </select>
                </div>
                <div class="input-box">
                  <span class="details">Imagen</span>
                  <input type="file" accept="image/jpg" class="custom-file-input" required id="exampleInputFile"
                    name="jpg">
                </div>
              </div>
              <div class="input-box">
                <span class="details">Contenido</span>
                <textarea class="ckeditor" name="contenido" id="editor1" rows="10" cols="80" required=""
                  placeholder="Contenido del artículo"></textarea>
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
