<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>    

    <x-slot:innerBanner :show="false"></x-slot:innerBanner>

    <livewire:frontend.partials.solutions-section sectionTitle="solutions"
        sectionSubTitle="Our provided best solutions" />

    <livewire:frontend.partials.products-section sectionTitle="products" sectionSubTitle="Our most valuable products"
        :limit="3" />

    <livewire:frontend.components.why-choose-us-section sectionTitle="why choose us"
        sectionSubTitle="Why you will give us priority" />

</main>
