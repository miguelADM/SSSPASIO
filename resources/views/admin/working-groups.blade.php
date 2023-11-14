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
          <div class="divTableCell">Descripción</div>
          <div class="divTableCell"></div>
        </div>
        {{-- row --}}
        @foreach ($grupos_trabajo as $item)
        <div class="divTableRow">
          <div class="divTableCell">{{$item->nombre}}</div>
          <div class="divTableCell">
            {{$item->descripcion}}
          </div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit" id="abrir-modal">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <form action="{{ route('working-groups.destroy', $item->id) }}" method="POST" class="delete">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">
                  <img src="{{ asset('assets/icons/admin/round-delete.svg') }}" alt="icono de eliminar" loading="lazy">
                </button>
              </form>
            </div>
          </div>
        </div>
        
        

        {{-- row --}}
        @endforeach
      </div>
    </div>
  </section>
  
  <article class="pagination">
    @if ($grupos_trabajo->onFirstPage())
        <button id="prev" title="Anterior" disabled>
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </button>
    @else
        <a href="{{ $grupos_trabajo->previousPageUrl() }}" title="Anterior">
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </a>
    @endif

    @for ($i = 1; $i <= $grupos_trabajo->lastPage(); $i++)
        <button class="{{ $i === $grupos_trabajo->currentPage() ? 'active' : '' }}">
            <a href="{{ $grupos_trabajo->url($i) }}">{{ $i }}</a>
        </button>
    @endfor

    @if ($grupos_trabajo->hasMorePages())
        <a href="{{ $grupos_trabajo->nextPageUrl() }}" title="Siguiente">
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
          <div class="title">Registrar grupo de trabajo</div>
          <div class="content">
            <form action="{{route('working-groups.store')}}" method="POST" class="formularioAdmin una-col">
              @csrf
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" id="nombre" name="nombre" placeholder="Nombre del grupo de trabajo" value="{{old('nombre')}}">
                  @error('nombre')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
              </div>
              <div class="user-details">
              <div class="input-box ">
                <span class="details">Descripcion</span>
                <input type="text" id="descripcion" name="descripcion" rows=3  placeholder="Descripcion del grupo de trabajo" value="{{old('descripcion')}}">
                  @error('descripcion')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
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
        message: '{{ session('Editado')}}',
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
            title: '¿Seguro que quieres Borrar este Grupo de Trabajo?',
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
