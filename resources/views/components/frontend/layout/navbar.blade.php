<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container-fluid">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a wire:navigate href="{{ route('web.home') }}">
                        <img src="{{ $logo }}" class="logo_img" alt="Logo">
                    </a>
                </div>
            </div>
            <!-- /.mobile-responsive-menu -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.mobile-responsive-nav -->

    <div class="desktop-nav nav-area desktop-nav-one"
        style="background: #eeeeee;    border-bottom: 1px dashed darkgray;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @if (isset($navItems) && is_array($navItems) && count($navItems))
                            @foreach ($navItems as $itemKey => $item)
                                <li class="nav-item">
                                    @if (isset($item['children']) && is_array($item['children']))
                                        <a href="javascript:void(0)" class="nav-link {{ $item['isActive'] }}">
                                            {{ $item['title'] }}
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            @foreach ($item['children'] as $childKey => $childItem)
                                                <li class="nav-item">
                                                    <a wire:navigate href="{{ $childItem['link'] }}"
                                                        class="nav-link {{ $childItem['isActive'] }}">
                                                        {{ $childItem['title'] }}
                                                    </a>
                                                </li>
                                                <!-- /.nav-item -->
                                            @endforeach
                                        </ul>
                                    @else
                                        <a wire:navigate href="{{ $item['link'] }}"
                                            class="nav-link {{ $item['isActive'] }}">
                                            {{ $item['title'] }}
                                        </a>
                                    @endif
                                </li>
                                <!-- /.nav-item -->
                            @endforeach
                        @endif
                    </ul>
                    <!-- /.navbar-nav -->

                    <div class="nav-sidebar">
                        {{-- <a href="contact.html" class="default-btn border-radius-5">
                            <span>{{ __('request') }}</span>
                            <span>{{ __('demo') }}</span>
                        </a> --}}

                        <div class="nav-search">
                            <i id="search-btn" class="bx bx-search"></i>
                            <div id="search-overlay" class="block">
                                <div class="centered">
                                    <div id="search-box">
                                        <i id="close-btn" class="bx bx-x"></i>
                                        <form>
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <button type="submit" class="btn">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.search-overlay -->
                        </div>
                        <!-- /.nav-search -->

                        <div class="modal-icon">
                            <a wire:navigate href="{{ route('web.request.demo') }}" class="default-btn border-radius-5">
                                <span>{{ __('request demo') }}</span>
                            </a>
                        </div>
                    </div>
                    <!-- /.nav-sidebar -->
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.navbar -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.desktop-nav -->
</div>
