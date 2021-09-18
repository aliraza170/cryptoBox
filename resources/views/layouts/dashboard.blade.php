<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon Links & meta -->

    <!-- Goole Fonts Import -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- SEO rules -->
    <meta name="keywords" content="{{ $keywords ?? config('app.name')}}">
    <meta name="description" content="{{ $page_description ?? config('app.name')}}">
    <title>{{ $pageTitle ? $pageTitle . " | Admin |" . config('app.name')  : "Admin Dashboard | " . config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <!-- SlimSelect -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.css" rel="stylesheet">

    <!-- IcoFont -->
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">

    <!-- CoreUI Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/coreui/coreui/dist/css/coreui.min.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendor/coreui/icons@2.0.0-beta.3/css/all.min.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ mix('css/dashboard/app.css') }}">
    {{ $head_tags ?? '' }}
</head>

<body class="c-app">
    @include('layouts.dashboard.sidebar')
    <div class="c-wrapper c-fixed-components">
        @include('layouts.dashboard.header')
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div>
                        @include('layouts.dashboard.alerts')
                    </div>
                    <div class="fade-in">
                        {{ $slot }}
                    </div>
                </div>
            </main>
            @include('layouts.dashboard.footer')
        </div>
    </div>

    <!-- CoreUI JavaScript -->
    <script src="{{ asset('vendor/coreui/coreui/dist/js/coreui.bundle.min.js') }}"></script>
    <!--[if IE]><!-->
    <script src="{{ asset('vendor/coreui/icons@2.0.1/js/svgxuse.min.js') }}"></script>
    <!--<![endif]-->
    <script src="{{ asset('vendor/coreui/chartjs@2.0.0/dist/js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('vendor/coreui/utils@1.3.1/dist/coreui-utils.js') }}"></script>

    <!-- DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

    <!-- SlimSelect -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ mix('js/dashboard/app.js') }}"></script>
    {{ $scripts ?? '' }}
</body>

</html>
