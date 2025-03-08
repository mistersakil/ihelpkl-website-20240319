<div class="contact-area my-4">
    {{-- @dump($dataList) --}}
    {{-- @dump($countries) --}}
    {{-- @dump($countries) --}}
    {{-- @json($state) --}}

    <div class="container">
        <div class="contact-form">
            <div class="section-title">
                <span class="sp-title2">{{ __('request demo') }}</span>
                <h2>{{ __('demo heading text') }}</h2>
            </div>

            <livewire:frontend.components.form-section sectionTitle="request demo" sectionSubTitle="our demos"
                :showTermsConditionCheck="false" :showSendMessageButton="false"
                :showSubjectInput="false" :limit="6"/>
        </div>
    </div>
</div>
