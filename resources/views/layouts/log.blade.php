<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/output.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body class="font-monserat">

    @yield('container')


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- javascript -->
    {{-- <script src="js/dashboard.js"></script> --}}
    <script src="{{ asset('js/script-nav.js') }}"></script>
    <script src="{{ asset('js/flowbite.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</body>

</html>
