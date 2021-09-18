<div class="sidebar">
    <a class="brand-logo" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
        <span>{{ config('app.name') }}</span>
    </a>
    <div class="menu">
        <ul>
            <li>
                <a href="{{ route('dashboard') }}">
                    <span><i class="mdi mdi-view-dashboard"></i></span>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li><a href="#">
                    <span><i class="mdi mdi-repeat"></i></span>
                    <span class="nav-text">Exchange</span>
                </a>
            </li>
            <li><a href="#">
                    <span><i class="mdi mdi-account"></i></span>
                    <span class="nav-text">Account</span>
                </a>
            </li>
            <li><a href="#">
                    <span><i class="mdi mdi-settings"></i></span>
                    <span class="nav-text">Setting</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidebar-footer">
        <div class="social">
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <div class="copy_right">
            &copy; {{ now()->year }} {{ config('app.name') }}
        </div>
    </div>

</div>
