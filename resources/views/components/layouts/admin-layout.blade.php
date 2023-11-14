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
    
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
  {{-- font --}}
  <link rel="icon" type="shortcut icon" href="{{ asset('assets/icons/favicon.ico') }}">
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
</body>

</html>
