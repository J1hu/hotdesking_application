<nav class="navbar navbar-expand-sm sticky-top navbar-dark" style="background-color: #27231E;">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/hot-desk-icon.png') }}" width="30" height="30" alt="">
        Hot Desk
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item dropdown mr-4">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Book a desk
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('booking') }}">Reservation</a>
                    <a class="dropdown-item" href="{{ url('calendar') }}">Calendar</a>
                </div>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('support') }}">Get help</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('images/avatar.png') }}" class="rounded-circle" width="25" height="25" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right col-md" aria-labelledby="navbarDropdownMenuLink">
                    <div class="container pt-2">
                        <div class="row mb-3 mx-auto">
                            <img src="{{ asset('images/default-avatar.png') }}" alt="..." class="rounded-circle" width="100" height="100">
                        </div>
                        <div class="row">
                            <p class="username mb-0 text-center" id="username">Rengoku Kyoujiro</p>
                            <p class="email text-warning text-center" id="email">ISPM - Group 1</p>
                        </div>
                    </div>

                    <button id="logout" type="button" class="btn btn-danger btn-block">Logout</button>
                </div>
            </li>
        </ul>
    </div>
</nav>