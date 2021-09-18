<div class="header landing_page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 position-relative">
                <nav class="navbar navbar-expand-lg navbar-light px-0">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                        <span>{{ config('app.name') }}</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('home')) active @endif" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}/#market">Market</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}/#portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}/#testimonial">Testimonial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}/#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dashboard_log">
                        <div class="d-flex align-items-center">
                            <div class="header_auth">
                                @guest
                                    <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
                                    <a href="{{ route('register') }}" class="btn btn-outline-primary">Sign Up</a>
                                @endguest
                                @auth
                                    @if(auth()->user()->hasRole('admin'))
                                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Dashboard</a>
                                    @else
                                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
                                    @endif
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button class="btn btn-outline-primary">Logout</button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
