<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Invitación Demo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-stone-800">
        <div class="text-center text-slate-300">
            <h2 class="text-slate-200 text-2xl text-center">Invitación de ejemplo</h2>
            <p>Aquí es donde hacemos el diseño de la aplicación. El panel de control se encuentra en: </p>
            <a class="text-yellow-400" href="/tablero">tablero</a>
        </div>
    </body>
</html>
