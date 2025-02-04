<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>
    <x-slot:metaDescription> {{ __($metaDescription) }} </x-slot:metaDescription>

    <x-slot:innerBanner :show="false"> </x-slot:innerBanner>

    <livewire:frontend.partials.home-about-section :item="$itemDetails" />

    <livewire:frontend.partials.home-projects :item="$itemDetails" />

    <livewire:frontend.components.key-characteristics :item="$itemDetails" />

    <livewire:frontend.components.services-two :item="$itemDetails" />

    {{-- <livewire:frontend.components.article-section-one :item="$itemDetails" /> --}}

    <livewire:frontend.components.why-choose-us-section-two :item="$itemDetails" />

    <livewire:frontend.components.faq-list :item="$itemDetails" />


</main>
