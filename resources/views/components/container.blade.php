@props([
    'width' => null,
])

@php
    $containerWidth = $width === null ? '1440' : $width;
@endphp

<div 
    @class([
        "w-full mx-auto",
        'max-w-[1440px]' => $containerWidth === '1440',
        'max-w-[1180px]' => $containerWidth === '1180',
        'max-w-[900px]' => $containerWidth === '900',
    ])
>

    {{ $slot }}

</div>