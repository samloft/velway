<nav class="navbar navbar-light navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="{{ env('APP_NAME') }}">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <svg height="38px" id="menu-icon"  version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"></path>
                </svg>
{{--                <i class="fas fa-bars"></i>--}}
            </span>
        </button>
        <div class="collapse navbar-collapse heading--@yield('header.color')" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ setActive('home') }}">
                    <a class="nav-link" href="{{ route('home') }}"><span>{{ __('Home') }}</span></a>
                </li>
                <li class="nav-item {{ setActive('services') }}">
                    <a class="nav-link" href="{{ route('services') }}"><span>{{ __('Services') }}</span></a>
                </li>
                <li class="nav-item {{ setActive('about') }}">
                    <a class="nav-link" href="{{ route('about') }}"><span>{{ __('About Us') }}</span></a>
                </li>
                <li class="nav-item {{ setActive('news') }}">
                    <a class="nav-link" href="{{ route('news') }}"><span>{{ __('News') }}</span></a>
                </li>
                <li class="nav-item {{ setActive('contact') }}">
                    <a class="nav-link" href="{{ route('contact') }}"><span>{{ __('Contact Us') }}</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
