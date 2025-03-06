<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>
    <x-slot:metaDescription> {{ __($metaDescription) }} </x-slot:metaDescription>



    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    <livewire:frontend.components.contact-card-section />

    <livewire:frontend.components.contact-form-section /> 
    {{--  <livewire:frontend.components.request-demo-section :showProductInput="false" /> --}}
</main>