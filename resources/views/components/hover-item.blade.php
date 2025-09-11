@props(['value'])

<div {{ $attributes->merge(['class' => "text-main-background bg-main-text shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute pointer-events-none"]) }} >
    <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
        {!! $value !!}
    </span>
</div>