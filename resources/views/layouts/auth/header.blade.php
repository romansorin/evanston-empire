<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="/">
            {{-- <img alt="logo" src="images/logo.svg"/> --}}
        </a>
        <a class="navbar-brand brand-logo-mini" href="/">
            {{-- <img alt="logo" src="images/logo-mini.svg"/> --}}
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a aria-expanded="false" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                    id="profileDropdown">
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">
                            {{ auth()->user()->name }}
                        </p>
                    </div>
                </a>
                <div aria-labelledby="profileDropdown" class="dropdown-menu navbar-dropdown">
                    <a class="dropdown-item" href="/dashboard/settings">
                        <i class="mdi mdi-cached mr-2 text-success">
                        </i>
                        Settings
                    </a>
                    <div class="dropdown-divider">
                    </div>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form">
                        @csrf
                        <a class="dropdown-item"
                            onclick="event.preventDefault(); document.querySelector('#logout-form').submit();" href="#">
                            <i class="mdi mdi-logout mr-2 text-primary">
                            </i>
                            Log out
                        </a>
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" data-toggle="offcanvas"
            type="button">
            <span class="mdi mdi-menu">
            </span>
        </button>
    </div>
</nav>