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
            <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                    <div class="position-relative">
                        {{-- <div class="cart-product rounded-circle bg-light"> --}}
                        <i class="rounded-circle bg-info p-1 {{ _icons('bell') }}"></i>
                        {{-- </div> --}}
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                        <p class="cart-product-price mb-0">1 X $29.00</p>
                    </div>

                    <div class="form-check form-check-warning">
                        <input class="form-check-input" type="radio" checked />
                    </div>

                </div>
            </a>

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
