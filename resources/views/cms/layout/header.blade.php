<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="https://zcoin.io/wp-content/uploads/2017/01/blank-avatar-300x300.png">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="" onclick="$('#logout').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout" method="post" action="{{ route('logout') }}"></form>
            </div>
        </li>

    </ul>

</nav>