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
                <p class="msg-header-title">My Cart</p>
                <p class="msg-header-badge">10 Items</p>
            </div>
        </a>
        <div class="header-message-list">
            <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                    <div class="position-relative">
                        <div class="cart-product rounded-circle bg-light">
                            <i class="{{ _icons('bell') }}"></i>
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
