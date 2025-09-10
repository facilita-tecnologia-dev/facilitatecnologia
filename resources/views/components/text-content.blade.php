@props([
    'alignment' => 'center',
    'color' => null,
])

@php
    $textAlign = $alignment === 'center' ? 'center' : $alignment;
    
    $textColor = $color === 'main-background' ? 'main-background' : 'main-text';
@endphp

<p 
    @class([
        'text-base md:text-lg font-normal leading-relaxed',

        'text-left' => $textAlign === 'left', // Aplica os estilos caso o alinhamento for 'left'
        'text-center' => $textAlign === 'center', // Aplica os estilos caso o alinhamento for 'center'
        'text-right' => $textAlign === 'right', // Aplica os estilos caso o alinhamento for 'right'
        'text-justify' => $textAlign === 'justify', // Aplica os estilos caso o alinhamento for 'right'

        'text-main-text' => $textColor === 'main-text', // Aplica os estilos caso a cor for 'main-text'
        'text-main-background' => $textColor === 'main-background', // Aplica os estilos caso a cor for 'main-background'
    ])>

    {{ $slot }}

</p>