<html lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Spasssio" />
  <meta name="description"
    content="En Spasssio desarrollamos programas y realizamos investigación de campo con la intención de ofrecerte las propuestas idóneas de acondicionamiento físico para ti." />
  <title>{{ $title ?? 'Spasssio | Inicio' }}</title>
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
  <link rel="stylesheet" href="{{ asset('css/home/home.css') }}" />
</head>

<body>
  <x-home.navbar.navbar/>
  <x-home.sidebar.sidebar/>
  <main class="main">
    {{ $slot }}
  </main>
  <script src="{{ asset('js/components/home/app.js') }}" type="module"></script>
</body>
</html>
