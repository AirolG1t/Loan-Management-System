@php
    $current_route = request()->route()->getName();
@endphp

<nav class="navbar navbar-expand navbar-light mb-4 bg-white topbar static-bottom shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <ul class="justify-content-center nav nav-pills m-auto">
        <li class="nav-item nav-pills">
            <a href="{{ route('dashboard') }}" class="nav-link active" aria-current="page" href="#">DASHBOARD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user') }}">USERS</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">SURVEY</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                CMS
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Home Page Content</a></li>
                <li><a class="dropdown-item" href="#">Products</a></li>
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
                <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="#">About Pages</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-item" href="#">Announcements</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                SETUP
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Loan Status</a></li>
                <li><a class="dropdown-item" href="#">Withdrawal Status</a></li>
                <li><a class="dropdown-item" href="#">Loan Type</a></li>
                <li><a class="dropdown-item" href="#">Member Level</a></li>
                <li><a class="dropdown-item" href="#">Member Location</a></li>
                <li><a class="dropdown-item" href="#">Member Workforce</a></li>
                <li><a class="dropdown-item" href="#">Withdrawal Type</a></li>
                <li><a class="dropdown-item" href="#">Change in Contribution Switch</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">REPORTS</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">IMPORT DATA</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">CONTRIBUTIONS</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Sample User</span>
                <img class="img-profile rounded-circle" src="{{ asset('admin_assets/img/undraw_profile.svg') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>

</nav>
