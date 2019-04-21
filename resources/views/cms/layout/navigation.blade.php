<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('cms.home') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('images/icon.png') }}" alt="->">
        </div>
        <div class="sidebar-brand-text mx-3">{{ env('APP_NAME') }}</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ setActive('cms.home') }}">
        <a class="nav-link" href="{{ route('cms.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        {{ __('Site') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>{{ __('News') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        {{ __('Admin') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-users fa-table"></i>
            <span>{{ __('Users') }}</span>
        </a>
    </li>

</ul>