<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('backend.index') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('app/images/logo.png')  }}" srcset="{{ asset('app/images/logo.png') }} 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('app/images/logo.png')  }}" srcset="{{ asset('app/images/logo.png') }} 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('app/images/logo.png')  }}" srcset="{{ asset('app/images/logo.png') }} 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    @include('admins.components.link', [
                        'route' => route('backend.index'),
                        'name' => 'Dashboard',
                        'icon' => 'ni-home'
                    ])

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Administration</h6>
                    </li>
                    @include('admins.components.link', [
                        'route' => route('apartment.index'),
                        'name' => 'Appartement',
                        'icon' => 'ni-building'
                    ])

                    @include('admins.components.link', [
                        'route' => route('category.index'),
                        'name' => 'Category',
                        'icon' => 'ni-folder'
                    ])

                    @include('admins.components.link', [
                        'route' => route('images.index'),
                        'name' => 'Images',
                        'icon' => 'ni-files'
                    ])
                </ul>
            </div>
        </div>
    </div>
</div>
