<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <a href="{{ route('home') }}" class="c-sidebar-brand d-lg-down-none">
        <div class="c-sidebar-brand-full">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" style="max-height: 46px; height: 36px;">
                <span class="text-white font-weight-bold d-inline-block ml-2" style="font-size: 1.25rem;">{{ config('app.name') }}</span>
            </div>
        </div>
        <img class="c-sidebar-brand-minimized" src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" style="max-height: 46px;">
    </a>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link @if(request()->routeIs('admin.dashboard')) c-active @endif" href="{{route('admin.dashboard')}}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{asset('svg_sprites/free.svg#cil-speedometer')}}"></use>
                </svg>
                Dashboard
            </a>
        </li>


        <!-- All User can Access This Panel-->
        <li class="c-sidebar-nav-title">Website</li>
        <li class="c-sidebar-nav-item ">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <svg class="c-sidebar-nav-icon">
                <use xlink:href="{{asset('svg_sprites/free.svg#cil-backspace')}}"></use>
                </svg>Go back to site
            </a>
        </li>
        <form action="{{ route('logout') }}" method="POST" style="display: inline">
            @csrf
            <li class="c-sidebar-nav-item">
                <button type="submit" class="c-sidebar-nav-link" style="border: 0;">
                    <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{asset('svg_sprites/free.svg#cil-account-logout')}}"></use>
                    </svg> Logout
                </button>
            </li>
        </form>
    </ul>
</div>
