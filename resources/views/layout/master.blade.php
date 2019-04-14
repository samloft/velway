<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }} - @yield('page.title')</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

@include('layout.header')

@yield('content')

@include('layout.footer')

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>