<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    <livewire:frontend.components.about-page-about-section :item="$data" />


    <livewire:frontend.partials.home-projects :item="$data" />

</main>
