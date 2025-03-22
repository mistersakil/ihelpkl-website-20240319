<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                            <i class="{{ _icons('stop') }}"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:;">
                                <div class="msg-header">
                                    <p class="msg-header-title">My Cart</p>
                                    <p class="msg-header-badge">10 Items</p>
                                </div>
                            </a>
                            <div class="header-message-list">
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="position-relative">
                                            <div class="cart-product rounded-circle bg-light">
                                                <img src="assets/images/products/11.png" class="" alt="product image">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                            <p class="cart-product-price mb-0">1 X $29.00</p>
                                        </div>
                                        <div class="">
                                            <p class="cart-price mb-0">$250</p>
                                        </div>
                                        <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            <a href="javascript:;">
                                <div class="text-center msg-footer">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h5 class="mb-0">Total</h5>
                                        <h5 class="mb-0 ms-auto">$489.00</h5>
                                    </div>
                                    <button class="btn btn-primary w-100">Checkout</button>
                                </div>
                            </a>
                        </div>
                    </li>

                    <li class="nav-item d-sm-flex">
                        <a class="nav-link" href="{{ route('web.home') }}" title="{{ __('Visit Website') }}"
                            target="_blank">
                            <i class="{{ _icons('website') }}"></i>
                        </a>
                    </li>
                    <!-- /.nav-item  -->

                    <li class="nav-item dark-mode d-none d-sm-flex">
                        <a class="nav-link dark-mode-icon" href="javascript:void(0)"
                            title="{{ __('Change Theme') }}">
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
