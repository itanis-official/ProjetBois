<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ProjetBois')</title>

    <!-- CSS Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


    @stack('styles')
</head>

<body>

    <!-- HEADER -->
    <x-stricky-header-two />

    <!-- CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <x-footer.footer-style-two />

    <!-- JS Template -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @stack('scripts')
</body>

</html>
