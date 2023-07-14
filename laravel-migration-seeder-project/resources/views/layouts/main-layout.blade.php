<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MIGRATIONS/FAKER</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark text-white">

    <div class="container">
        QUESTA è LA PAGINA PHP DEL LAYOUT

        @include('components.header')

        @yield('content')

        @include('components.footer')

    </div>

</body>

</html>