@props([
    'align' => null,
])

@php
    $textAlign = $align === 'center' ? 'center' : $align;
@endphp

<p 
    @class([
        'text-base md:text-lg font-normal leading-relaxed',

        'text-left' => $textAlign === 'left', // Aplica os estilos caso o alinhamento for 'left'
        'text-center' => $textAlign === 'center', // Aplica os estilos caso o alinhamento for 'center'
        'text-right' => $textAlign === 'right', // Aplica os estilos caso o alinhamento for 'right'
    ])>

    {{ $slot }}

</p>