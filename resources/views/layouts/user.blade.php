<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Your Website Title')</title>
        <link rel="stylesheet" href={{ URL::asset('css/tailwind/tailwind.min.css') }}>
        <script src={{ URL::asset('js/main.js') }}></script>
        <script src={{ URL::asset('js/tailwind.config.js') }}></script>
    </head>

    <body class="flex flex-col justify-center min-h-screen py-6 bg-gray-100 sm:py-12">
        <div class="relative flex flex-col items-center justify-center h-screen overflow-hidden">
            @yield('content')
        </div>
    </body>

</html>
