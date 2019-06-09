<nav class="navbar navbar-light navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="{{ env('APP_NAME') }}">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-button">
                <i class="fas fa-bars"></i>
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
