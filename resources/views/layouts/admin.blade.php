<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | {{ $title }}</title>

    <!-- Styles -->
    <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/js/chart.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}" defer></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.shared.sidebar')
        @include('admin.shared.header')
        @yield('content')
    </div>
</body>
</html>