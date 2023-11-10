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
          <div class="divTableCell">Objetivo</div>
          <div class="divTableCell">Descripcion</div>
          <div class="divTableCell">Clasificacion</div>
          <div class="divTableCell">Imagen</div>
          <div class="divTableCell"></div>
        </div>

        @foreach ($ejercicios as $item)
        <div class="divTableRow">
          <div class="divTableCell">{{$item->name_ejercicio}}</div>
          <div class="divTableCell">{{$item->objetivo_ejercicio}}</div>
          <div class="divTableCell">{{$item->descripcion_ejercicio}}</div>
          <div class="divTableCell">{{$item->name_clasificacion}}</div>
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
              
              <form action="{{route('exercises.destroy',$item->id_ejercicio)}}" method="POST" class="delete">
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
    @if ($ejercicios->onFirstPage())
        <button id="prev" title="Anterior" disabled>
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </button>
    @else
        <a href="{{ $ejercicios->previousPageUrl() }}" title="Anterior">
            <img src="{{ asset('assets/icons/admin/arrow-left.svg') }}" alt="flecha izquierda" loading="lazy">
        </a>
    @endif

    @for ($i = 1; $i <= $ejercicios->lastPage(); $i++)
        <button class="{{ $i === $ejercicios->currentPage() ? 'active' : '' }}">
            <a href="{{ $ejercicios->url($i) }}">{{ $i }}</a>
        </button>
    @endfor

    @if ($ejercicios->hasMorePages())
        <a href="{{ $ejercicios->nextPageUrl() }}" title="Siguiente">
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
          <div class="title">Registrar ejercicio</div>
          <div class="content">
            <form action="{{route('exercises.store')}}" method="POST" enctype="multipart/form-data"class="formularioAdmin una-col">
              @csrf
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" id="nombre" name="nombre" placeholder="Nombre del ejercicio" value="{{old('nombre')}}">
                  @error('nombre')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                <div class="input-box">
                  <span class="details">Descripción</span>
                  <input id="descripcion" cols="20" rows="50" class="form-control" value="{{old('descripcion')}}" name="descripcion">
                  @error('descripcion')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                <div class="input-box">
                  <span class="details">Objetivos</span>
                  <input id="objetivo" cols="20" rows="50" class="form-control" name="objetivo" value="{{old('objetivo')}}">
                  @error('objetivo')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                
                <div class="input-box">
                  <span class="details">GIF</span>
                  <div class="custom-file">
                    <input type="file" accept="image/gif" class="custom-file-input"  id="exampleInputFile" name="imagen">
                  </div>
                </div>

                <div class="input-box">
                  <span class="details">clasificacion</span>
                  <select name="clasificacion" class="form-control" id="clasificacion" >
                    <option>Seleccione una clasificacion</option>
                @foreach ($clasificacion as $class)
                    <option value="{{$class->id}}">{{$class->id}}  {{$class->nombre}}</option>
                @endforeach
                </select>
                @error('clasificacion')
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
        
        const confirmation = confirm('¿Estás seguro de que deseas eliminar este usuario?');
        
        if (confirmation) {
          // Si el usuario confirma, envía el formulario de eliminación
          event.target.closest('form').submit();
        }
      });
    });
  </script>

</x-layouts.admin-layout>
