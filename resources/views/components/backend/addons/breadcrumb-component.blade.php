<main>
    <div class="page-breadcrumb d-flex align-items-center mb-3">
        <div class="d-none d-sm-inline-block  breadcrumb-title pe-3 text-capitalize">{{ $title }}
        </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}" wire:navigate>
                            <i class="{{ $icons['home'] }}"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-capitalize">{{ $active_item }}</li>
                </ol>
                <!-- /.breadcrumb -->
            </nav>
            <!-- /nav -->
        </div>
        <!-- /.ps-3 -->
        <div class="ms-auto">
            {{ $add_new ?? false }}
            {{ $generate_button ?? false }}
        </div>
        <!-- /.ms-auto -->

    </div>
    <hr>
</main>
<!-- /.page-breadcrumb -->
