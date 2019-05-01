<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a class="nav-link" href="#">
                <div class="nav-profile-image">
                    {{-- <img alt="profile" src="images/faces/face1.jpg">
                    </img> --}}
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">
                        {{ auth()->user()->name }}
                    </span>
                    <span class="text-secondary text-small">
                        Employee
                    </span>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <span class="menu-title">
                    Dashboard
                </span>
                <i class="mdi mdi-home menu-icon">
                </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/employees">
                <span class="menu-title">
                    Employees
                </span>
                <i class="mdi mdi-format-list-bulleted menu-icon">
                </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/users">
                <span class="menu-title">
                    Users
                </span>
                <i class="mdi mdi-chart-bar menu-icon">
                </i>
            </a>
        </li>
    </ul>
</nav>