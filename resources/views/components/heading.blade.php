@props([
    'tag' => 'h2',
    'color' => null,
    'align' => 'center',
])

@php
    $headingTag = $tag === 'h1' ? 'h1' : 'h2';

    $textColor = $color === 'gray-100' ? 'gray-100' : 'gray-800';

    $textAlign = $align === 'center' ? 'center' : $align;
@endphp

<{{ $headingTag }} 
    @class([
        'w-fit text-center tracking-tight leading-tight text-',

        'text-5xl md:text-6xl lg:text-7xl font-bold' => $headingTag == 'h1', // Aplica os estilos caso a tag for 'h1'
        'text-4xl md:text-5xl lg:text-[3.5rem] font-semibold' => $headingTag == 'h2', // Aplica os estilos caso a tag for 'h1'

        'text-gray-800' => $textColor === 'gray-800', // Aplica os estilos caso a cor for 'gray-800'
        'text-gray-100' => $textColor === 'gray-100', // Aplica os estilos caso a cor for 'gray-100'

        'text-left' => $textAlign === 'left', // Aplica os estilos caso o alinhamento for 'left'
        'text-center' => $textAlign === 'center', // Aplica os estilos caso o alinhamento for 'center'
        'text-right' => $textAlign === 'right', // Aplica os estilos caso o alinhamento for 'right'
    ])
>

    {{ $slot }}

</{{ $headingTag }}>