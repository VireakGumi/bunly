<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- tittle --}}
    <title>
        @section('title')
            Website Title
        @endsection
    </title>

    {{-- icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Style That Apply To All Pages Who Extended This Layout -->

    @yield('stylesheet') {{-- custom stylesheet --}}

</head>

<body>

    <!-- navbar content -->
    <div id="navbar-content">
        @include('website.partials.navbar')
    </div>

    <!-- body content -->
    <div id="body-content">
        @yield('body-content')
    </div>

    <!-- footer content -->
    <div id="footer-content">
        @include('website.partials.footer')
    </div>

</body>
<script src="{{ asset('js/app.js') }}"></script> <!-- Custom Script That Apply To All Pages Who Extended This Layout -->

@yield('script') {{-- custom script --}}

</html>
