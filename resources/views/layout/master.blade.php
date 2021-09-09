<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(isset($meta))
        <meta name="description" content="{{ $meta['description'] }}">
    @endif

    <title>{{ isset($meta) ? $meta['title'] : env('APP_NAME') . '-' }} @yield('page.title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <script type="text/javascript" src="https://app.cookie-widget.com/cookie-widget_min.js" id="cookie-widget-script"
            cookie-type="necessary" cookie-widget-id="354107ae-b56c-4fc8-8aee-04565bae5718"></script>


    <script async type="text/plain" src="https://www.googletagmanager.com/gtag/js?id=UA-143509139-1"
            cookie-type="analytics"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-143509139-1');
    </script>

</head>
<body>

@include('layout.header')

@yield('content')

@include('layout.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.1/lottie.min.js" type="text/javascript"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('js/aos.js') }}"></script>
@yield('scripts')

<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

</body>
</html>
