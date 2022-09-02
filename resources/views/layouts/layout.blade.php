<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
</head>

<body class="bg-gray-100 dark:bg-zinc-800 min-h-screen flex justify-between items-center flex-col max-w-full">
    
    @include('layouts.componentes.header')
    
    @yield('content')
    
    {{-- Footer --}}

    @include('layouts.componentes.footer')
</body>

</html>
