<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }} - @yield('page.title')</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

@include('layout.header')

<div class="contact--floated">
    <i class="fas fa-comment-dots"></i>
</div>

<div class="contact--floated--expanded">
    <a href="TEL:{{ $company_details->telephone }}">
        <i class="fas fa-phone"></i>
    </a>
    <a href="MAILTO:{{ $company_details->email }}">
        <i class="far fa-envelope"></i>
    </a>
</div>

@yield('content')

@include('layout.footer')

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

</body>
</html>