<x-layouts.admin-layout>
  <h1>Recomendación nutricional</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">Agregar dieta <img
        src="{{ asset('assets/icons/admin/food.svg') }}" alt=""></button>
  </div>

  <section class="table">
    <div class="divTable">
      <div class="divTableBody">
        <div class="divTableHeading">
          <div class="divTableCell">Titulo</div>
          <div class="divTableCell">Categoria</div>
          <div class="divTableCell">Descripción</div>
          <div class="divTableCell">Imagen</div>
          <div class="divTableCell"></div>
        </div>

       @foreach ($nutricion as $item)
        <div class="divTableRow">
          <div class="divTableCell">{{$item->titulo}}</div>
          <div class="divTableCell">{{$item->tipo}}</div>
          <div class="divTableCell">{{ strip_tags($item->descripcion) }}</div>
          <div class="divTableCell"> 
            @if ($item->imagen)
            <img src="{{ asset('storage/' . $item->imagen) }}" width="70px" height="50px" alt="Imagen del ejercicio">
            @else
                No hay imagen
            @endif
          </div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <form action="{{route('nutritional-recommendation.destroy',$item->id)}}" method="POST" class="delete">
                @csrf 
                @method('DELETE')
              <button class="delete" type="submit">
                <img src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar" loading="lazy">
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
    @if ($nutricion->onFirstPage())
        <button id="prev" title="Anterior" disabled>
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </button>
    @else
        <a href="{{ $nutricion->previousPageUrl() }}" title="Anterior">
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </a>
    @endif

    @for ($i = 1; $i <= $nutricion->lastPage(); $i++)
        <button class="{{ $i === $nutricion->currentPage() ? 'active' : '' }}">
            <a href="{{ $nutricion->url($i) }}">{{ $i }}</a>
        </button>
    @endfor

    @if ($nutricion->hasMorePages())
        <a href="{{ $nutricion->nextPageUrl() }}" title="Siguiente">
            <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
        </a>
    @else
        <button id="next" title="Siguiente" disabled>
            <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
        </button>
    @endif
</article>

  <div class="modal__container">
    <div action="" class="modal">
      <button id="close-modal" type="button">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>
      <section class="content">
        <div class="form-container">
          <div class="title">Registrar dieta</div>
          <div class="content">
            <form action="{{route('nutritional-recommendation.store')}}" enctype="multipart/form-data" method="POST" class="formularioAdmin una-col">
              @csrf
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" id="titulo" required name="titulo" placeholder="Nombre de la dieta">
                </div>
                <div class="input-box">
                  <span class="details">Descripción</span>
                  <textarea class="ckeditor" name="descripcion" id="editor1" required cols="255" rows="450" class="form-control"
                    placeholder="Descripción de la dieta"></textarea>
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

  @if(session('Eliminado'))
  <script>
    iziToast.error({
        title: 'Correcto!',
        message: '{{ session('Eliminado')}}',
        position: 'topRight'
    })
    </script>
  @endif

  @if(session('Valida'))
  <script>
    iziToast.error({
        title: 'ERROR!',
        message: '{{ session('Valida')}}',
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
        message: '{{ session('Editado')}}'
    })
    </script>
  @endif


  <script>

      document.querySelectorAll('.delete button[type="submit"]').forEach(button => {
        button.addEventListener('click', function (event) {
          event.preventDefault();
          
          const confirmation = confirm('¿Estás seguro de que deseas eliminar este usuario?');
          
          if (confirmation) {
            // Si el usuario confirma, envía el formulario de eliminación
            event.target.closest('form').submit();
          }
        });
      });

  </script>
  
</x-layouts.admin-layout>
