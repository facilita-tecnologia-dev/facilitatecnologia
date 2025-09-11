<x-section class="max-md:!p-0">
    <x-container width="1180">
        <div 
            style="background-image: url('{{ asset($CTABanner['background-image']->value) }}');" 
            class="bg-no-repeat bg-cover relative md:rounded-md overflow-hidden px-4 py-12 lg:p-20 flex justify-end"
            loading="lazy">
            <div class="w-full h-full absolute left-0 top-0 bg-black/40"></div>
            <div class="relative w-full max-w-[600px] flex flex-col gap-4">
                <x-heading color="main-background" alignment="left">{!! $CTABanner['title']->value !!}</x-heading>
                <x-text-content color="main-background" alignment="left">
                    {{ $CTABanner['text']->value }}
                </x-text-content>

                @if($companyInfos['whatsapp'][0]->value)
                    <x-action href="https://wa.me/{{ $companyInfos['whatsapp'][0]->value }}?text=Por%20favor,%20eu%20gostaria%20de%20uma%20demonstração%20do%20produto!" variant="simple" color="main-background">Solicite uma demonstração</x-action>
                @endif
            </div>
        </div>
    </x-container>
</x-section>