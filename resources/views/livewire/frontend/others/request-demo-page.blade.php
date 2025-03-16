<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>

    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" :imageUrl="'Get-price-quotation.jpg'" />
    </x-slot:innerBanner>

    <livewire:frontend.components.request-demo-section />
</main>
