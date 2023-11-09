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
          <div class="divTableCell"></div>
        </div>

        @foreach ($ejercicios as $ej)
        <div class="divTableRow">
          <div class="divTableCell">{{$ej->nombre}}</div>
          <div class="divTableCell">{{$ej->objetivo}}</div>
          <div class="divTableCell">{{$ej->descripcion}}</div>
          <div class="divTableCell">{{$ej->clasificacion_nombre}}</div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              
              <form action="{{route('exercises.destroy',$ej->id)}}" method="POST" class="form-elim">
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
            <form action="{{route('exercises.store')}}" method="POST" class="formularioAdmin una-col">
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
                  <input id="descripcion" class="form-control" value="{{old('descripcion')}}" name="descripcion">
                  @error('descripcion')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                <div class="input-box">
                  <span class="details">Objetivos</span>
                  <input id="objetivo" cols="3" rows="3" class="form-control" name="objetivo" value="{{old('objetivo')}}">
                  @error('objetivo')
                   <small style="color: crimson">{{$message}}</small>
                   <br>
                  @enderror
                </div>
                
                <div class="input-box">
                  <span class="details">GIF</span>
                  <div class="custom-file">
                    <input type="file" accept="image/gif" class="custom-file-input"  id="exampleInputFile"
                      name="imagen">
                  </div>
                </div>

                <div class="input-box">
                  <span class="details">clasificacion</span>
                  <select name="clasificacion" class="form-control" id="clasificacion" >
                    <option>Seleccione una clasificacion</option>
                @foreach ($clasi as $class)
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
</x-layouts.admin-layout>
