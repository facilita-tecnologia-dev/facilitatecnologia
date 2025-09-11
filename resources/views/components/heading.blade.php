@props([
    'tag' => 'h2',
    'color' => null,
    'alignment' => 'center',
])

@php
    $headingTag = $tag === 'h1' ? 'h1' : 'h2';

    $textColor = $color === 'main-background' ? 'main-background' : 'main-text';

    $textAlign = $alignment === 'center' ? 'center' : $alignment;
@endphp

<{{ $headingTag }} 

    {{ $attributes }}
    
    @class([
        'w-fit text-center tracking-tight',

        'text-5xl md:text-6xl lg:text-7xl font-bold leading-14' => $headingTag == 'h1', // Aplica os estilos caso a tag for 'h1'
        'text-3xl md:text-4xl lg:text-5xl font-semibold leading-12' => $headingTag == 'h2', // Aplica os estilos caso a tag for 'h1'

        'text-main-text' => $textColor === 'main-text', // Aplica os estilos caso a cor for 'main-text'
        'text-main-background' => $textColor === 'main-background', // Aplica os estilos caso a cor for 'main-background'

        'text-left' => $textAlign === 'left', // Aplica os estilos caso o alinhamento for 'left'
        'text-center' => $textAlign === 'center', // Aplica os estilos caso o alinhamento for 'center'
        'text-right' => $textAlign === 'right', // Aplica os estilos caso o alinhamento for 'right'
    ])
>

    {{ $slot }}

</{{ $headingTag }}>