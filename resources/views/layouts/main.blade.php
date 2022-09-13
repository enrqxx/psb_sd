<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    {{-- AOS --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/> --}}

    {{-- BOOTSTRAPS CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- ICON --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icon.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @yield('css')
    <title>An-Nahar | {{ $title }}</title>
</head>

<body id="top">
    @include('partials.navbar')
    @yield('container')
    @include('partials.footer')

    <script src="js/script.js"></script>


    {{-- AOS CDN LINK --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    {{-- ICON --}}
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    @yield('js')
</body>

</html>
