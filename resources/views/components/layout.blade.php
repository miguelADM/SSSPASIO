<html lang="es">

<head>
  <meta name="viewport" content="width=divice-width, initial-scale=1.0" />
  <meta name="author" content="Miguel_Ambrosi" />
  <title>{{ $title ?? 'Spasssio' }}</title>
  {{-- font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400&display=swap"
    rel="stylesheet">
  {{-- font --}}
  <link rel="stylesheet" href="/assets/images/logo.png" />
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>
  {{ $slot }}
</body>

</html>
