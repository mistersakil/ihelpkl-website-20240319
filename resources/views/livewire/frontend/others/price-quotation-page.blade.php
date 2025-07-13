<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>

    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" :imageUrl="'Get-price-quotation.jpg'" />
    </x-slot:innerBanner>

    <div class="contact-area my-4">

        <div class="container">
            <div class="contact-form">
                <div class="section-title">
                    <span class="sp-title2">{{ __('request demo') }}</span>
                    <h2>{{ __('demo heading text') }}</h2>
                </div>

                <livewire:frontend.components.visitors-query-form-section :showTermsConditionCheck="false" :showSendMessageButton="false"
                    :showSubjectInput="false" />
            </div>
        </div>
    </div>
</main>
