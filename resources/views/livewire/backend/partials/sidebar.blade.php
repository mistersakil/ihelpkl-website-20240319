<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ $logo }}" class="logo-icon" alt="logo icon">
        </div>
        <div class="toggle-icon ms-auto">
            <i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!-- /.sidebar-header -->
    <ul class="metismenu" id="menu">
        @foreach ($nav_links as $nav_link)
            @if ($nav_link['nav_is_readonly'])
                <li class="menu-label">
                    {{ $nav_link['nav_title'] }}
                </li>
            @elseif (!$nav_link['nav_is_readonly'] && !$nav_link['nav_has_children'])
                <li>
                    <a href="{{ $nav_link['nav_url'] }}">
                        <div class="parent-icon">
                            <i class="{{ $nav_link['nav_icon'] }}"></i>
                        </div>
                        <div class="menu-title text-capitalize">
                            {{ $nav_link['nav_title'] }}
                        </div>
                    </a>
                </li>
            @else
                <li>
                    <a class="has-arrow" href="javascript:void(0)">
                        <div class="parent-icon">
                            <i class="{{ $nav_link['nav_icon'] }}"></i>
                        </div>
                        <div class="menu-title text-capitalize">
                            {{ $nav_link['nav_title'] }}
                        </div>
                    </a>
                    @if ($nav_link['nav_has_children'])
                        <ul>
                            @foreach ($nav_link['nav_children'] as $nav_child)
                                <li>
                                    <a href="{{ $nav_child['url'] }}" class="text-capitalize">
                                        <i class="{{ $icon_circle }}"></i>
                                        {{ $nav_child['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>

                <li>
                    <a class="has-arrow" href="javascript:void(0)">
                        <div class="parent-icon">
                            <i class="{{ $nav_link['nav_icon'] }}"></i>
                        </div>
                        <div class="menu-title text-capitalize">
                            {{ $nav_link['nav_title'] }}
                        </div>
                    </a>
                    @if ($nav_link['nav_has_children'])
                        <ul>
                            @foreach ($nav_link['nav_children'] as $nav_child)
                                <li>
                                    <a href="{{ $nav_child['url'] }}" class="text-capitalize">
                                        <i class="{{ $icon_circle }}"></i>
                                        {{ $nav_child['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>
    <!-- /.metismenu -->
</div>
