<!-- Header -->
<nav id="mainHeader" class="navbar navbar-expand-lg navbar-light bg-white fixed-top py-3">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ $logo }}" width="140" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mobileMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                @if (isset($navItems) && is_array($navItems) && count($navItems))
                    @foreach ($navItems as $itemKey => $item)
                        <li class="nav-item dropdown">
                            @if (isset($item['children']) && is_array($item['children']))
                                <a href="javascript:void(0)" class="nav-link dropdown-toggle {{ $item['isActive'] }}"
                                    data-bs-toggle="dropdown">
                                    {{ $item['title'] }}
                                </a>

                                <ul class="dropdown-menu">
                                    @foreach ($item['children'] as $childKey => $childItem)
                                        <li class="dropdown-item">
                                            <a wire:navigate href="{{ $childItem['link'] }}"
                                                class="nav-link {{ $childItem['isActive'] }}">
                                                {{ $childItem['title'] }}
                                            </a>
                                        </li>
                                        <!-- /.nav-item -->
                                    @endforeach
                                </ul>
                            @else
                                <a wire:navigate href="{{ $item['link'] }}" class="nav-link {{ $item['isActive'] }}">
                                    {{ $item['title'] }}
                                </a>
                            @endif
                        </li>
                        <!-- /.nav-item -->
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</nav>
