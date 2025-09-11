<x-section class="bg-white flex flex-col gap-8 lg:gap-12">
    <div class="flex flex-col items-center gap-2">
        <x-subtitle>{!! $ourPurpose['subtitle']->value !!}</x-subtitle>
        <x-heading>{!! $ourPurpose['title']->value !!}</x-heading>
    </div>
    <div>
        <img src="{{ asset($ourPurpose['diagram-image']->value) }}" alt="" class="w-full max-w-[545px]" loading="lazy">
    </div>
</x-section>