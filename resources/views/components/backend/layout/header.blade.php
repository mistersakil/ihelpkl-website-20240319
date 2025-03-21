<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">

                    <livewire:backend.addons.count-notification />
                    {{-- <livewire:backend.components.listener /> --}}

                    {{-- <livewire:backend.components.dispatcher /> --}}

                    {{-- <li class="nav-item d-sm-flex">
                        <span class="nav-link position-relative" title="{{ __('Notification') }}">
                            <i class="{{ _icons('email') }}"></i>
                            <span id="submission-count" class="notification-count">0</span>
                        </span>
                    </li> --}}
                    <!-- /.nav-item  -->

                    <li class="nav-item d-sm-flex">
                        <a class="nav-link" href="{{ route('web.home') }}" title="{{ __('Visit Website') }}"
                            target="_blank">
                            <i class="{{ _icons('website') }}"></i>
                        </a>
                    </li>
                    <!-- /.nav-item  -->

                    <li class="nav-item dark-mode d-none d-sm-flex">
                        <a class="nav-link dark-mode-icon" href="javascript:void(0)" title="{{ __('Change Theme') }}">
                            <i class="{{ _icons('light') }}"></i>
                        </a>
                    </li>
                    <!-- /.nav-item  -->

                </ul>
                <!-- /.navbar-nav  -->
            </div>
            <!-- /.top-menu  -->
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ Vite::imageBack('avatar-2.png') }}" class="user-img" alt="user_avatar">
                    <div class="user-info">
                        <p class="user-name mb-0">{{ $user_name }}</p>
                        <p class="designattion mb-0">{{ $user_email }}</p>
                    </div>
                </a>
                <!-- /.nav-link -->
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                            <i class="{{ _icons('user') }}"></i>
                            <span>Profile</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                            <i class="{{ _icons('settings') }}"></i>
                            <span>Settings</span>
                        </a>
                    </li>

                    @if ($isDisplayLogoutAction)
                        <livewire:backend.auth.logout-component />
                    @endif
                </ul>
                <!-- /.dropdown-menu -->
            </div>
            <!-- /.user-box  -->
        </nav>
        <!-- /.navbar  -->
    </div>
    <!-- /.topbar  -->
</header>
