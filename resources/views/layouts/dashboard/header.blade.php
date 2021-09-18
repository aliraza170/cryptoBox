<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="{{asset('svg_sprites/free.svg#cil-menu')}}"></use>
        </svg>
    </button>

    <a class="c-header-brand d-lg-none" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
        <span>{{ config('app.name') }}</span>
    </a>

    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="{{asset('svg_sprites/free.svg#cil-menu')}}"></use>
        </svg>
    </button>
    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{route('admin.dashboard')}}">Dashboard</a></li>
        {{-- <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li> --}}
    </ul>
    <ul class="c-header-nav ml-auto mr-4">
        {{-- <li class="c-header-nav-item dropdown mx-2">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{asset('svg_sprites/free.svg#cil-bell')}}"></use>
                    </svg>
                    <span class="badge badge-danger ml-1 @if(auth()->user()->unreadNotifications->count() == 0) d-none @endif" id="notificationCount">{{ auth()->user()->unreadNotifications->count() }}</span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" style="min-width: 320px; width: max-content; max-width: 380px;">
                <div class="dropdown-header bg-light py-2 d-flex justify-content-between"><strong>Notifications</strong> @if(auth()->user()->unreadNotifications->count() > 0)<button class="btn btn-link p-0" href="{{ route('dashboard.notification.all_read') }}" onclick="document.getElementById('allReadForm').submit()">Mark all read</button>@endif</div>
                <form action="{{ route('dashboard.notification.all_read') }}" id="allReadForm" method="POST">
                    @csrf
                </form>

                <div id="notificationContainer">
                    @forelse (auth()->user()->unreadNotifications as $notification)
                        <a class="dropdown-item py-2 align-items-start" style="white-space: normal;" href="{{ route('dashboard.notification.read', ['notification' => $notification, 'redirect_url' => $notification->data['redirect_url']]) }}">
                            <svg class="c-icon mr-2" style="width: 2rem; height: 2rem;">
                                <use xlink:href="{{asset('svg_sprites/free.svg#cil-speech')}}"></use>
                            </svg> <span>{!! $notification->data['text'] !!}</span>
                        </a>
                    @empty
                        <div class="dropdown-item py-3">
                            No unread notifications
                        </div>
                    @endforelse
                </div>

                <a class="dropdown-item bg-info text-white mt-1 py-2 d-block text-center" href="{{ route('dashboard.notification.index') }}">View all</a>
            </div>
        </li> --}}
        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="{{ auth()->user()->getProfilePictureUrl() }}" alt="{{ auth()->user()->initials }}"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                <a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{asset('svg_sprites/free.svg#cil-user')}}"></use>
                    </svg> Profile
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{asset('svg_sprites/free.svg#cil-account-logout')}}"></use>
                        </svg> Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
    @if($breadcrumb)
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            {{ $breadcrumb ?? '' }}
        </ol>
    </div>
    @endif
</header>
