<x-container width="1180">
    <x-section class="space-y-8">
        <x-subtitle>{!! $ourPartners['title']->value !!}</x-subtitle>
        <div class="flex justify-center flex-wrap gap-x-6 lg:gap-12 gap-y-8">
            @foreach($ourPartners["partner-logo"] as $partnerLogo)
                <div>
                    <img src="{{ asset($partnerLogo['value']) }}" alt="" class="h-7 md:h-9 grayscale-0 md:grayscale-100 md:hover:grayscale-0 transition">
                </div>
            @endforeach
        </div>
    </x-section>
</x-container>