<x-layouts.admin-layout>
  <h1>Tips</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">Agregar tips <img
        src="{{ asset('assets/icons/admin/tips.svg') }}" alt=""></button>
  </div>

  <section class="table">
    <div class="divTable">
      <div class="divTableBody">
        <div class="divTableHeading">
          <div class="divTableCell">Titulo</div>
          <div class="divTableCell">Categoria</div>
          <div class="divTableCell">Descripción</div>
          <div class="divTableCell">imagen</div>
          <div class="divTableCell"></div>
        </div>
        @foreach ($tips as $tip)
        <div class="divTableRow">
          <div class="divTableCell">{{$tip->titulo}}</div>
          <div class="divTableCell">{{$tip->tipo}}</div>
          <div class="divTableCell">{{$tip->descripcion}}</div>
          <div>
              
              <img src="assets/images/home/imagetips/{{$tip->imagen}}" alt="" class="img2">
               
            </div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <form action="{{route('tips.destroy',$tip->id)}}" method="POST" class="delete">
                @csrf 
                @method('DELETE')
                <button type="submit" class="delete">
                <img  src="{{ asset('assets/icons/admin/round-delete.svg') }}"  alt="icono de eliminar" loading="lazy">
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
    @if ($tips->onFirstPage())
        <button id="prev" title="Anterior" disabled>
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </button>
    @else
        <a href="{{ $tips->previousPageUrl() }}" title="Anterior">
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </a>
    @endif

    @for ($i = 1; $i <= $tips->lastPage(); $i++)
        <button class="{{ $i === $tips->currentPage() ? 'active' : '' }}">
            <a href="{{ $tips->url($i) }}">{{ $i }}</a>
        </button>
    @endfor

    @if ($tips->hasMorePages())
        <a href="{{ $tips->nextPageUrl() }}" title="Siguiente">
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
          <div class="title">Registrar tips</div>
          <div class="content">
            <form action="{{route('tips.store')}}" method="POST"  class="formularioAdmin una-col" accept="image/*" enctype="multipart/form-data">
              @csrf
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Título</span>
                  <input type="text" id="nombre" required name="titulo" placeholder="Título del tip">
                </div>
                <div class="input-box">
                  <span class="details">Categoría</span>
                  <select id="cat" required name="tipo">
                    <option disabled selected value>Seleccionar...</option>
                    <option value="Tips">Tips</option>
                    <option value="Enterate">Enterate</option>
                    <option value="Motivate">Motivate</option>
                    <option value="Algo Más">Algo Más</option>
                  </select>
                </div>
                
              </div>
              <div class="input-box">
                <span class="details">Descripcion</span>
                <textarea class="ckeditor" name="descripcion" id="editor1" rows="10" cols="80" placeholder="Contenido del artículo"></textarea>
              </div>

              <div class="input-box">
                <span class="details">Imagen</span>
                <input type="file"  class="custom-file-input"  id="exampleInputFile"
                  name="imagen">
              </div>

              <div class="btn-form-admin">
                <input type="submit" value="Registrar" >
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

  @if(session('Agregado'))
  <script>
    iziToast.success({
        title: 'Correcto!',
        message: '{{ session('Agregado')}}',
        position: 'topRight'

    })
    </script>
  @endif

  @if(session('Eliminado'))
  <script>
    iziToast.error({
        title: 'Correcto!',
        message: '{{ session('Eliminado')}}',
        position: 'topRight'
    })
    </script>
  @endif

  <script>
    
    document.querySelectorAll('.delete button[type="submit"]').forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault();
        
        iziToast.error({
            timeout: false,
            close: false,
            overlay: false,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            title: '¿Seguro que quieres Borrar este Tip?',
            position: 'center',
            buttons: [
                ['<button><b>Si</b></button>', function (instance, toast) {
                
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    // Si el usuario confirma, envía el formulario de eliminación
                    event.target.closest('form').submit();
                }, true],
                ['<button>NO</button>', function (instance, toast) {
                
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                
                }],
            ],
            onClosing: function(instance, toast, closedBy){
                console.info('Closing | closedBy: ' + closedBy);
            },
            onClosed: function(instance, toast, closedBy){
                console.info('Closed | closedBy: ' + closedBy);
            }
});
        
      });
    });

    </script>
</x-layouts.admin-layout>
