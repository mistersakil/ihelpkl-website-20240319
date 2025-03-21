<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>

            <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal"
                data-bs-target="#SearchModal">
                <input class="form-control px-5" disabled type="search" placeholder="Search">
                <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5">
                    <i class='bx bx-search'></i>
                </span>
            </div>


            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal"
                        data-bs-target="#SearchModal">
                        <a class="nav-link" href="avascript:void(0)">
                            <i class='bx bx-search'></i>
                        </a>
                    </li>
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
                            <i class='bx bx-moon'></i>
                        </a>
                    </li>
                    <!-- /.nav-item  -->

                    <livewire:backend.partials.header-notification-component />


                </ul>
                <!-- /.navbar-nav  -->
            </div>
            <!-- /.top-menu  -->
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ Vite::image('avatar-2.png') }}" class="user-img" alt="user_avatar">
                    <div class="user-info">
                        <p class="user-name mb-0">{{ $user_name }}</p>
                        <p class="designattion mb-0">{{ $user_email }}</p>
                    </div>
                </a>
                <!-- /.nav-link -->
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                class="bx bx-user fs-5"></i><span>Profile</span></a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                class="bx bx-cog fs-5"></i><span>Settings</span></a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                class="bx bx-download fs-5"></i><span>Downloads</span></a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <livewire:backend.auth.logout />
                </ul>
                <!-- /.dropdown-menu -->
            </div>
            <!-- /.user-box  -->
        </nav>
        <!-- /.navbar  -->
    </div>
    <!-- /.topbar  -->
</header>
