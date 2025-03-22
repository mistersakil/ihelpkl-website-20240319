<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>
    <x-slot:metaDescription> {{ __($metaDescription) }} </x-slot:metaDescription>

    <livewire:frontend.partials.home-slider />
    {{-- <livewire:frontend.partials.home-banner /> --}}
    {{-- <livewire:frontend.partials.home-projects /> --}}

    <livewire:frontend.partials.solutions-section sectionTitle="solutions" sectionSubTitle="Our provided best solutions"
        :limit="5" />

    <livewire:frontend.partials.products-section sectionTitle="products" sectionSubTitle="our most valuable products"
        :limit="6" />

    <livewire:frontend.components.why-choose-us-section :item="$data" />

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

    {{-- <livewire:frontend.partials.home-work-process-section /> --}}

    {{-- <livewire:frontend.partials.home-blog-section /> --}}
</main>
