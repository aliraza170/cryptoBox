<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar">

                    <div class="header-search d-flex align-items-center">
                        <a class="brand-logo mr-3" href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="" width="30">
                            <span>{{ config('app.name') }}</span>
                        </a>
                    </div>


                    <div class="dashboard_log">
                        <div class="d-flex align-items-center">
                            <div class="profile_log dropdown">
                                <div class="user" data-toggle="dropdown">
                                    <span class="thumb"><i class="mdi mdi-account"></i></span>
                                    <span class="name">{{ Str::title(auth()->user()->name) }}</span>
                                    <span class="arrow"><i class="la la-angle-down"></i></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">
                                        <i class="mdi mdi-account"></i> Account
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-book"></i> History
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-cog"></i> Setting
                                    </a>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="dropdown-item rounded-0" type="submit">
                                            <i class="la la-lock"></i> Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
