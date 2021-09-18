<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($pageTitle) ? $pageTitle." | ".config('app.name'):config('app.name') }}</title>

        <!-- Favicon Syles -->
        <link rel="icon" href="/favicon.ico">

        <!-- Theme Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/theme/css/style.css') }}">

        {{ $styles ?? "" }}
    </head>
    <body>

        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>

        <div id="main-wrapper pt-0">
            @include('layouts.app.header')
            @include('layouts.app.sidebar')
            {{ $slot }}
            @include('layouts.app.footer')
        </div>

        <!-- Theme Scripts -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>


        <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('vendor/circle-progress/circle-progress-init.js') }}"></script>

        <script src="{{ asset('vendor/owlcarousel/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendor/theme/js/plugins/owl-carousel-init.js') }}"></script>
        <script src="{{ asset('vendor/scrollit/scrollIt.js') }}"></script>
        <script src="{{ asset('vendor/theme/js/plugins/scrollit-init.js') }}"></script>

        <!--  flot-chart js -->
        <script src="{{ asset('vendor/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('vendor/apexchart/apexchart-init.js') }}"></script>
        <script src="{{ asset('vendor/apexchart/apexchart2-init.js') }}"></script>

        <script src="{{ asset('vendor/validator/jquery.validate.js') }}"></script>
        <script src="{{ asset('vendor/validator/validator-init.js') }}"></script>

        <script src="{{ asset('vendor/theme/js/scripts.js') }}"></script>

        {{ $scripts ?? "" }}
    </body>
</html>
