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

<body>
    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')
    <script src="{{ URL::asset('js/accordion.js') }}"></script>
</body>

<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        console.log("close", id);
        document.getElementById(id).classList.add('hidden');
    }

    window.addEventListener('click', function(e) {
        document.querySelectorAll('[id^="modal-"]').forEach(modal => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
</script>

</html>
