<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container py-3">
        <a class="navbar-brand" href="{{ route('home') }}">BHS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add-request') }}">Add Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('progress') }}">Progress</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                    @auth
                        <li class="nav-item">
                            Remaining Request Today (0)
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Hello, {{ Auth::user()->name }}!
                            </a>
                            <ul class="dropdown-menu bg-primary">
                                <li><a class="dropdown-item" href="{{ env('APP_ACCOUNT_URL') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('requests') }}">My Requests</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item me-2 mb-md-2">
                            <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>
