<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - @yield('title')</title>

    <!-- Fonts & Bootstrap CSS -->
    <link href="{{ asset('backend/plugins/bootstrap/fonts_family__Nunito_wght.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
</head>
    <body>
        <!-- Header -->
        @yield('header')

        <!-- Main Menu -->
        @yield('main_menu')

        <!-- Main Content -->
        @yield('content')

        <!-- Footer -->
        @yield('footer')

        <!-- Footer -->
        <section class="clearfix copyright">
            <div class="container">

            </div>
        </section>

        <!-- Separate Popper and Bootstrap JS -->
        <script async src="{{ asset('backend/plugins/bootstrap/jquery.slim.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>
