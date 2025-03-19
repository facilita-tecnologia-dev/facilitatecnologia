@props([
    'tag' => 'a',

    'type' => ($tag ?? 'a') === 'button' ? 'submit' : null, // Se for um botão, coloca o type pardrão como submit
    'href' => ($tag ?? 'a') === 'a' ? '#' : null, // Se for um link, coloca o href pardrão como todo

    'variant' => 'solid',
    'size' => 'm',

    'color' => 'gray-800',
])

@php
    $elementTag = $tag === 'button' ? 'button' : 'a';
@endphp

<{{ $elementTag }} 

    {{ $type ? "type=$type" : '' /* Se houver type (se for botão) coloca o atributo type */}}
    {{ $href ? "href=$href" : '' /* Se houver href (se for link) coloca o atributo href */}}
    @class([
        'block w-fit rounded-md cursor-pointer font-medium transition duration-200',

        'px-12 py-3' => $size === 'm', // Aplica os estilos se o size for 'm'
        'px-7 py-1.5' => $size === 's', // Aplica os estilos se o size for 's'

        'bg-gray-800 text-gray-100 border border-transparent hover:bg-sky-500' => $variant === 'solid', // Aplica os estilos se a variant for 'solid'
        'bg-transparent text-gray-800 border border-gray-800 hover:text-sky-500 hover:border-sky-500' => $variant === 'outline', // Aplica os estilos se a variant for 'outline'
        '!p-0 bg-transparent hover:underline' => $variant === 'simple', // Aplica os estilos se a variant for 'outline'

        'text-gray-800' => $variant === 'simple' && $color === "gray-800",
        'text-gray-100' => $variant === 'simple' && $color === "gray-100",
    ])
>

    {{ $slot }}

</{{ $elementTag }}>