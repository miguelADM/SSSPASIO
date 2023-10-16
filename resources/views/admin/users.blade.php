@php

  function getAllUsers()
  {
      return $users = DB::table('users')->get();
  }

  function getProfileUser($userId): array
  {
      $profile = DB::table('profiles')
          ->where('user_id', $userId)
          ->get();
      $profileData = [
          'name' => $profile[0]->nombre_usu ?? null,
          'lastname' => $profile[0]->apellidos_usu ?? null,
          'membership' => $profile[0]->tipo_membresia ?? null,
      ];

      return $profileData;
  }

  function getIllness($illnessId)
  {
      $illnesse = DB::table('enfermedades')
          ->where('id', $illnessId)
          ->get();

      return $illnesse[0]->nombre ?? null;
  }

  function getWorkingGroup($groupId)
  {
      $group = DB::table('grupos_trabajo')
          ->where('GRUPO_ID', $groupId)
          ->get();

      return $group[0]->GRUPO_NOMBRE ?? null;
  }

  function getMappedUsers($users)
  {
      $mappedUsers = [];
      foreach ($users as $user) {
          $profileData = getProfileUser($user->id);

          $mappedUsers[] = [
              'id' => $user->id,
              'username' => $user->name,
              'name' => $profileData['name'],
              'lastname' => $profileData['lastname'],
              'membership' => $profileData['membership'],
              'illness' => getIllness($user->enfermedad_id),
              'working-group' => getWorkingGroup($user->grupo_id),
              'email' => $user->email,
          ];
      }

      return $mappedUsers;
  }

  $allUsers = getAllUsers();
  $users = getMappedUsers($allUsers);

@endphp
<x-layouts.admin-layout>
  <h1>Usuarios</h1>
  <div class="button-container">
    <button class="button button-primary" type="button" id="open-modal">Agregar Usuario <img
        src="{{ asset('assets/icons/admin/add-group.svg') }}" alt=""></button>
  </div>
  <section>
    <div class="divTable">
      <div class="divTableBody">
        <div class="divTableHeading">
          <div class="divTableCell">Usuario</div>
          <div class="divTableCell">Nombre</div>
          <div class="divTableCell">Correo</div>
          <div class="divTableCell">Grupo</div>
          <div class="divTableCell">Membresia</div>
          <div class="divTableCell">Salud</div>
          <div class="divTableCell"></div>
        </div>
        @foreach ($users as $user)
          <div class="divTableRow">
            <div class="divTableCell">{{ $user['username'] }}</div>
            <div class="divTableCell">
              @if ($user['name'] != null && $user['lastname'] != null)
                <span>{{ $user['name'] }} {{ $user['lastname'] }}</span>
              @else
                <span>Anonimo</span>
              @endif
            </div>
            <div class="divTableCell">{{ $user['email'] }}</div>
            <div class="divTableCell">
              @if ($user['working-group'] != null)
                {{ $user['working-group'] }}
              @else
                Sin grupo
              @endif
            </div>
            <div class="divTableCell">{{ $user['membership'] }}</div>
            <div class="divTableCell">{{ $user['illness'] }}</div>
            <div class="divTableCell relative">
              <button class="table__options" type="button" data-id="{{ $user['id'] }}">
                <img src="{{ asset('assets/icons/admin/options-vertical.svg') }}" alt="icono de opciones"
                  loading="lazy">
              </button>
              <div class="table__options-menu">
                <button>Eliminar</button>
                <button>Editar</button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <div class="modal__container">
    <form action="" class="modal">
      <button id="close-modal" type="button">
        <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
      </button>
      <input type="text" name="username">
      <input type="text" name="name">
      <button type="submit" id="enviar">Enviar</button>
    </form>
  </div>
</x-layouts.admin-layout>
