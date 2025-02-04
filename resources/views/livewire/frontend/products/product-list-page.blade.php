<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>

    <x-slot:innerBanner :show="false"> </x-slot:innerBanner>

    <livewire:frontend.partials.products-section sectionTitle="products" sectionSubTitle="our most valuable products" />
</main>
