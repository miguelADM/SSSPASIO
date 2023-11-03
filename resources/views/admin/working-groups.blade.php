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
          <div class="divTableCell">Observaciones</div>
          <div class="divTableCell"></div>
        </div>
        {{-- row --}}
        @foreach ($grupos_trabajo as $item)
        <div class="divTableRow">
          <div class="divTableCell">{{$item->nombre}}</div>
          <div class="divTableCell">
            {{$item->descripcion}}
          </div>
          <div class="divTableCell">
            No existe ninguna observación
          </div>
          <div class="divTableCell relative">
            <button class="table__options" type="button" data-id="1">
              <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones" loading="lazy">
            </button>
            <div class="table__options-menu">
              <button class="edit">
                <img src="{{ asset('assets/icons/admin/edit.svg') }}" alt="icono de editar" loading="lazy">
              </button>
              <form action="{{ route('ejercicios.destroy', $item->id) }}" method="POST" class="delete">
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
  

  <div class="modal__container">
    <div action="" class="modal">
      <button id="close-modal" type="button">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>

      <section class="content">
        <div class="form-container">
          <div class="title">Registrar grupo de trabajo</div>
          <div class="content">
            <form action="{{route('working-groups.store')}}" method="POST" class="formularioAdmin dos-col">
              @csrf
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Nombre</span>
                  <input type="text" id="nombre" name="nombre" placeholder="Nombre del grupo de trabajo">
                </div>
              </div>
              <div class="input-box observaciones">
                <span class="details">Descripcion</span>
                <textarea id="" cols="50" rows="5" class="form-control" name="descripcion"
                  placeholder="Observaciones acerca del grupo de trabajo"></textarea>
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
