<div class="nk-header nk-header-fixed is-light" style="z-index: 2000 !important;">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ route('commissioner.backend.index') }}" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('app/images/logo.png')  }}" srcset="{{ asset('app/images/logo.png')  }} 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('app/images/logo.png')  }}" srcset="{{ asset('app/images/logo.png')  }} 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-header-search ml-3 ml-xl-0"></div>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="icon-status icon-status-info">
                                <em class="icon ni ni-bell"></em>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end" style="">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="{{ route('admins.notification.markReads') }}">Mark All as Read</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    @foreach(auth()->user()->unreadNotifications as $notification)
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                @if($notification->type == "App\Notifications\ApartmentNotification")
                                                    <div class="nk-notification-text">
                                                        {{ $notification->data['email'] }} vient d'ajoutez une nouvelle maison
                                                    </div>
                                                @elseif($notification->type == "App\Notifications\ReservationCancelNotification")
                                                    <div class="nk-notification-text">
                                                        {{ $notification->data['house'] }} vient d'annuler sa reservation
                                                    </div>
                                                @elseif($notification->type == "App\Notifications\ActivateApartmentNotification")
                                                    <div class="nk-notification-text">
                                                        {{ $notification->data['email'] }} la confirmation de votre maison vient d'etre effectuer
                                                    </div>
                                                @elseif($notification->type == "App\Notifications\BookingNotification")
                                                    <div class="nk-notification-text">
                                                        {{ $notification->data['reference'] }} une reservation a ete effectuer
                                                    </div>
                                                @else
                                                    <div class="nk-notification-text">
                                                        {{ $notification->data['transaction_code'] }} vient d'etre confirmer
                                                    </div>
                                                @endif
                                                <div class="nk-notification-time">
                                                    {{$notification->created_at->diffForHumans()}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="dropdown-foot center">
                                <a href="{{ route('admins.notification.index') }}">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status user-status-active">{{ auth()->user()->name ?? "" }}</div>
                                    <div class="user-name dropdown-indicator">{{ auth()->user()->email ?? "" }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>{{ substr(auth()->user()->name, 0,2) ?? "" }}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ auth()->user()->name ?? "" }}</span>
                                        <span class="sub-text">{{ auth()->user()->email ?? "" }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <em class="icon ni ni-signout"></em>
                                            <span>Sign out</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
