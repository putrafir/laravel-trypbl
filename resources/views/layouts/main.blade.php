<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/output.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body class="font-monserat">

    @include('partials.navbar')
    @yield('container')


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- javascript -->
    {{-- <script src="js/dashboard.js"></script> --}}
    <script src="{{ asset('js/flowbite.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script>
        document.getElementById('dropdownDefaultButton').addEventListener('click', function() {
            var dropdown = document.getElementById('dropdown');
            dropdown.classList.toggle('hidden');
        });
    </script>
</body>

</html>
