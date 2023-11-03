<x-layouts.admin-layout>
  <h1>Ejercicios</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">Agregar ejercicio <img
        src="{{ asset('assets/icons/admin/weights.svg') }}" alt=""></button>
  </div>

  <section class="table">
    <div class="divTable">
      <div class="divTableBody">
        <div class="divTableHeading">
          <div class="divTableCell">Nombre</div>
          <div class="divTableCell">Clasificacion</div>
          <div class="divTableCell">Descripcion</div>
          <div class="divTableCell"></div>
        </div>

        <div class="divTableRow">
          <div class="divTableCell">T 1 D Abdomen bajo y tríceps (con una silla)</div>
          <div class="divTableCell">1-sentado harás tracción de piernas al pecho con barbilla al pecho para evitar dolor
            de espalda</div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <form action="{{route('clasificacion_ejercicios.destroy',$user->id)}}" method="POST" class="delete">
                @csrf 
                @method('DELETE')
                <button class="delete">
                <img type="submit" src="{{ asset('assets/icons/admin/round-delete.svg') }}"  alt="icono de eliminar" loading="lazy">
              </button>
              </form>
              
              
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
          <div class="title">Registrar ejercicio</div>
          <div class="content">
            <form action="" class="formularioAdmin dos-col">
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" id="nombre" name="nombre" placeholder="Nombre del ejercicio" required>
                </div>
                <div class="input-box">
                  <span class="details">Descripción</span>
                  <textarea id="descripcion" cols="50" rows="3" class="form-control" name="descripcion"></textarea>
                </div>
                <div class="input-box">
                  <span class="details">Repeticiones</span>
                  <input type="number" placeholder="No. de repeticiones" id="repeticiones" required
                    name="repeticiones">
                </div>
                <div class="input-box">
                  <span class="details">Duración</span>
                  <input type="number" id="duracion" required name="duracion" placeholder="Duración en segundos">
                </div>
                <div class="input-box">
                  <span class="details">GIF</span>
                  <div class="custom-file">
                    <input type="file" accept="image/gif" class="custom-file-input" required id="exampleInputFile"
                      name="gif">
                  </div>
                </div>
                <div class="input-box">
                  <span class="details">Clasificación</span>
                  <select class="form-control" required id="grupo" name="id_clasificacion">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="1">Clasificación 1</option>
                    <option value="2">Clasificación 2</option>
                    <option value="3">Clasificación 3</option>
                    <option value="4">Clasificación 4</option>
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

    </div>
  </div>
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css') }}" />
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')}}"></script>

  @if(session('success'))
  <script>
    iziToast.success({
        title: 'Correcto!',
        message: '{{ session('success')}}',
        possition: 'center'
    })
    </script>
  @endif
</x-layouts.admin-layout>
