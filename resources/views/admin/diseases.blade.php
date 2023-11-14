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
          <div class="divTableCell">Descripcion</div>
          <div class="divTableCell"></div>
        </div>
        @foreach ($enfermedad as $item)
        <div class="divTableRow">
          <div class="divTableCell">{{$item->nombre}}</div>
          <div class="divTableCell">{{$item->descripcion}}</div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit" for="#editar-{{$item->id}}"  class="btn btn-circle btn-primary" data-bs-toggle="modal" data-bs-target="#editar-{{$item->id}}">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              

              <form action="{{route('diseases.destroy',$item->id)}}" method="POST" id="delete">
                @csrf 
                @method('DELETE')
                <button class="delete">
                <img type="submit" src="{{ asset('assets/icons/admin/round-delete.svg') }}"  alt="icono de eliminar" loading="lazy">
              </button>
              </form>
              
            </div>
          </div>
        </div>
        
        @endforeach
        
      </div>
    </div>
    <article class="pagination">
      @if ($enfermedad->onFirstPage())
          <button id="prev" title="Anterior" disabled>
              <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
          </button>
      @else
          <a href="{{ $enfermedad->previousPageUrl() }}" title="Anterior">
              <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
          </a>
      @endif
  
      @for ($i = 1; $i <= $enfermedad->lastPage(); $i++)
          <button class="{{ $i === $enfermedad->currentPage() ? 'active' : '' }}">
              <a href="{{ $enfermedad->url($i) }}">{{ $i }}</a>
          </button>
      @endfor
  
      @if ($enfermedad->hasMorePages())
          <a href="{{ $enfermedad->nextPageUrl() }}" title="Siguiente">
              <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
          </a>
      @else
          <button id="next" title="Siguiente" disabled>
              <img src="{{ asset('assets/icons/admin/arrow-right.svg') }}" alt="flecha derecha" loading="lazy">
          </button>
      @endif
  </article>
  </section>
  
<!------------------------------------------ Modal Agregar --------------------------------------------->
  <div class="modal__container">
    <div action="" class="modal">
      <button id="close-modal" type="button">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>

      <section class="content">
        <div class="form-container">
          <div class="title">Registrar enfermedad/condicion</div>
          <div class="content">
            <form action="{{route('diseases.store')}}" method="POST" class="formularioAdmin una-col">
              @csrf
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}"
                    placeholder="Nombre de la enfermedad o condición">
                    @error('nombre')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
              </div>
              <div class="user-details">
              <div class="input-box">
                <span class="details">Descripcion</span>
                <input id="" cols="50" rows="5" class="form-control" name="descripcion"
                  placeholder="Observaciones acerca de la enfermedad/condición" value='{{old('descripcion')}}'>
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
<!------------------------------------------ Modal Agregar --------------------------------------------->

<!------------------------------------------ Modal Editar --------------------------------------------->
<!-- Modal Editar -->

<!-- /Modal Editar -->
<!------------------------------------------ Modal Editar --------------------------------------------->

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
        Swal.fire({
  title: "¿Seguro de Eliminar la enfermedad?",
  text: "No podras revertir esto",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Si, Eliminarla",
  cancelButtonText: "No Eliminarla"
}).then((result) => {
  if (result.isConfirmed) {
    event.target.closest('form').submit();
  }
});
      });
    });
  </script>
   
</x-layouts.admin-layout>

