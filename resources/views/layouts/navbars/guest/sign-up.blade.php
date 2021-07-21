<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
    <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{ route('dashboard') }}">
            Soft UI Dashboard
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto">
                @if (auth()->user())
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center me-2 active" aria-current="page"
                            href="{{ route('dashboard') }}">
                            <i class="fa fa-chart-pie opacity-6  me-1"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white me-2" href="{{ route('profile') }}">
                            <i class="fa fa-user opacity-6  me-1"></i>
                            Profile
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link text-white me-2" href="{{ auth()->user() ? route('static-sign-up') : route('sign-up') }}">
                        <i class="fas fa-user-circle opacity-6  me-1"></i>
                        Sign Up
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white me-2" href="{{ auth()->user() ? route('sign-in') : route('login') }}">
                        <i class="fas fa-key opacity-6  me-1"></i>
                        Sign In
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <a href="https://www.creative-tim.com/product/soft-ui-dashboard-laravel"
                        class="btn btn-sm btn-round mb-0 me-1 bg-gradient-light" target="_blank">Free download</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
