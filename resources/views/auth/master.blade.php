<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }} CMS - @yield('page.title')</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="auth mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <a href="/">
                            <img src="{{ asset('images/logo.png') }}" alt="{{ env('APP.NAME') }}">
                        </a>
                    </div>

                    <div class="card-body">

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>