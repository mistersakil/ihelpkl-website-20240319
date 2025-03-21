{{-- <div>
    <li class="nav-item d-sm-flex">
        <span class="nav-link position-relative" title="{{ __('Notification') }}">
            <i class="{{ _icons('email') }}"></i>
            <span id="submission-count" class="notification-count">{{ $submissionCount }}</span>
        </span>
    </li>
</div> --}}


<div>
    <livewire:frontend.components.form-section @submitted="incrementCounter" />
    <p>Submission Count: {{ $submissionCount }}</p>
</div>
