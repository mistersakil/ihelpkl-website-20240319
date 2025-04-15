<li class="nav-item dropdown dropdown-large position-relative" id="cartDropdown">
    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:void(0)"
        id="cartToggle">
        <span class="alert-count">8</span>
        <i class="{{ _icons('bell') }}"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-end" id="cartMenu"
        style="display: none; position: absolute; top: 102%; right: 0%;">
        <a href="javascript:;">
            <div class="msg-header">
                <p class="msg-header-title">{{ __('visitors query') }}</p>
                <p class="msg-header-badge">{{ $unreadQueryCount }} {{ __('items') }}</p>
            </div>
        </a>
        <div class="header-message-list">
            <article class="dropdown-item">
                <div class="d-flex align-items-center w-100 gap-1">

                    <!-- Icon section (10%) -->
                    <div class="position-relative flex-shrink-0" style="width: 10%;">
                        <i class="rounded-circle bg-info p-1 {{ _icons('bell') }} text-white"></i>
                    </div>

                    <!-- Content section (80%) -->
                    <div class="dropdownContent text-wrap" style="width: 80%;">
                        <p class="cart-product-price mb-0">
                            New query received from <b>Sakil Mahmud</b> (<em>sakil@ihelpbd.com</em>
                            ), based in <b>Bangladesh</b>
                        </p>
                    </div>

                    <!-- Radio button section (10%) -->
                    <div class="form-check form-check-success flex-shrink-0 text-end" style="width: 10%;"
                        title="{{ __('mark as read') }}">
                        <input class="form-check-input" type="radio" checked />
                    </div>

                </div>
            </article>

        </div>
        <a href="javascript:;">
            <div class="text-center msg-footer">
                <button class="btn btn-primary w-100">{{ __('view all') }}</button>
            </div>
        </a>
    </div>
</li>

@push('dynamic_js')
    <script type="module">
        $(document).ready(function() {
            /* Toggle dropdown on click */
            $('#cartToggle').on('click', function(e) {
                e.preventDefault();
                $('#cartMenu').toggle();
            });

            /* Hide dropdown when clicking outside */
            $(document).on('click', function(e) {
                let $target = $(e.target);
                if (
                    !$target.closest('#cartDropdown').length &&
                    $('#cartMenu').is(':visible')
                ) {
                    $('#cartMenu').hide();
                }
            });
        });
    </script>
@endpush
