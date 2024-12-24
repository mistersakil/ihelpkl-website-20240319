<div class="alert alert-warning border-0 bg-warning fade show py-2 d-flex justify-content-between">
    <div class="d-flex align-items-center">
        <div class="font-35 text-dark">
            <i class="{{ _icons('warning') }}"></i>
        </div>
        <div class="ms-3">
            <h6 class="mb-0 text-dark">{{ __('ops') }}</h6>
            <div class="text-dark">
                {{ __('no data found') }}
            </div>
        </div>
    </div>
    <a wire:navigate href="{{ $goBackRoute }}" type="button"
        class="btn btn-outline-danger text-dark d-flex align-items-center justify-content-center">
        <i class="{{ _icons('back') }} "></i> {{ __('go back') }}
    </a>
</div>
