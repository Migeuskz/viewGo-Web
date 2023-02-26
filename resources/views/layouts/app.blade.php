<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@700&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalice.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>ViewGo - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-grisClaro">
    <header class=" p-5 border-b bg-primario shadow">
        <div class=" container mx-auto flex justify-between items-center">
            <h1 class=" text-3xl font-black text-white">
                ViewGo
            </h1>

            <nav class=" flex gap-2 items-center">
                <a href="/login" class=" text-white p-3">Login</a>
                <a href="/crear-cuenta" class=" text-white">Crear cuenta</a>

            </nav>
        </div>
    </header>

    <main class=" container mx-auto mt-10">
        <h2 class=" font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class=" mt-10 text-center text-gray-500 p-5 font-bold ">
        ViewGo - Todos los derechos reservados 
        {{ now() ->year }}
    </footer>

</body>

</html>
