<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/images/beauty-logo.png') }} " type="image/png" />
    <title>@yield('title') - Beauty Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class=" bg-rose-50">

    @yield('authcontent')

    @include('sweetalert::alert')
</body>

</html>

