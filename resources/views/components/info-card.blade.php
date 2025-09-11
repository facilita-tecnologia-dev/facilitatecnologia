@props(['icon' => null, 'title', 'description'])
<div class="bg-main-background border-borders flex flex-col items-center gap-6 rounded-lg border-2 px-4 py-6 shadow-sm transition hover:scale-[102%] md:px-6 md:py-8" data-aos="zoom-in" data-aos-duration="400" data-aos-offset="250">
    @if($icon)
        <div class="bg-borders flex h-16 w-16 items-center justify-center rounded-full">
            <x-icon icon="{{ $icon }}" class="text-primary-solid h-8 w-8 object-scale-down" />
        </div>
    @endif
    <div class="space-y-1.5 md:space-y-3">
        <h3 class="font-heading text-main-text text-center text-sm font-semibold md:text-base">{{ $title }}</h3>
        <span class="font-text text-main-text block text-center text-xs leading-5 font-normal md:text-sm">{{ $description }}</span>
    </div>
</div>