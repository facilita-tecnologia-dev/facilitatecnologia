<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/d6c8bd95ac.js" crossorigin="anonymous"></script>

    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.ico/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon.ico/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon.ico/apple-touch-icon.png') }}" />
    {{-- <link rel="manifest" ytpe href="{{ asset('assets/favicon.ico/site.webmanifest') }}" /> --}}

    <meta name="description" content="Simplifique a gestão de RH e SST com uma plataforma completa, intuitiva e automatizada. Reduza burocracias e aumente a eficiência.">
    <meta name="keywords" content="rh, segurança do trabalho, sst, plataforma rh, normas regulatórias, nr 20, nr 18, nr 1">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Facilita Tecnologia">

    {{-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Facilita Tecnologia</title>

    
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/wysiwyg-formatter.css') }}">
</head>
<body class="bg-gray-100">
    {{ $slot }}
</body>
</html>
