<nav class="navbar navbar-expand-sm sticky-top navbar-dark" style="background-color: #27231E;">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/hot-desk-icon.png') }}" class="rounded-circle" width="30" height="30" alt="">
        <strong>ホットデスク</strong>
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/#features') }}">Features</a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('support') }}">Get help</a>
            </li>
        </ul>
    </div>
</nav>