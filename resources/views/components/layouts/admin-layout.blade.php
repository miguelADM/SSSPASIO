<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Spasssio" />
    <meta name="description"
        content="En Spasssio desarrollamos programas y realizamos investigación de campo con la intención de ofrecerte las propuestas idóneas de acondicionamiento físico para ti." />
    <title>{{ $title ?? 'Spasssio | Administrador' }}</title>
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400&display=swap"
        rel="stylesheet">
    {{-- font --}}
    <link rel="icon" type="shortcut icon" href="{{ asset('assets/icons/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}" />
</head>

<body>
    <x-admin.navbar.navbar />
    <x-admin.sidebar.sidebar />
    <main class="main">
        {{ $slot }}
    </main>
    <script src="{{ asset('js/components/admin/app.js') }}" type="module"></script>
    <script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function confirmDelete(url) {
          console.log(url);
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¡No podrás revertir esto!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
              if (result.isConfirmed) {
                axios.delete(url)
                  .then(response => {
                    console.log(response);
                      Swal.fire(
                          '¡Eliminado!',
                          'El registro ha sido eliminado.',
                          'success'
                      );
                  })
                  .then(() => {
                      setTimeout(() => {
                          window.location.reload();
                      }, 4000);
                  })
                  .catch(error => {
                      Swal.fire(
                          'Error',
                          'Hubo un problema al eliminar el registro.',
                          'error'
                      );
                  });
              }
            });
        }
    </script>
</body>
</html>
