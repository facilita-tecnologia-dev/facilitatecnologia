@props([
    'tag' => 'a',

    'form' => ($tag ?? 'a') === 'button' ? '' : null, // Se for um botão, coloca o form pardrão como null

    'type' => ($tag ?? 'a') === 'button' ? 'submit' : null, // Se for um botão, coloca o type pardrão como submit
    'href' => ($tag ?? 'a') === 'a' ? '#' : null, // Se for um link, coloca o href pardrão como #

    'variant' => 'solid',
    'size' => 'm',

    'color' => 'main-text',
    'alignment' => 'center',
])

@php
    $elementTag = $tag === 'button' ? 'button' : 'a';

    $textAlign = $alignment === 'center' ? 'center' : $alignment;
@endphp

<{{ $elementTag }} 

    {{ $form ? "form=$form" : '' /* Se houver form (se for botão) coloca o atributo form */}}
    {{ $type ? "type=$type" : '' /* Se houver type (se for botão) coloca o atributo type */}}
    {{ $href ? "href=$href" : '' /* Se houver href (se for link) coloca o atributo href */}}
    {{ $attributes }}
    @class([
        'block w-fit rounded-md cursor-pointer font-medium transition duration-200 whitespace-nowrap',

        'px-12 py-3' => $size === 'm', // Aplica os estilos se o size for 'm'
        'px-7 py-1.5' => $size === 's', // Aplica os estilos se o size for 's'

        'bg-main-text text-main-background border border-transparent hover:bg-sky-500' => $variant === 'solid', // Aplica os estilos se a variant for 'solid'
        'bg-transparent text-main-text border border-main-text hover:text-sky-500 hover:border-sky-500' => $variant === 'outline', // Aplica os estilos se a variant for 'outline'
        '!p-0 bg-transparent hover:underline' => $variant === 'simple', // Aplica os estilos se a variant for 'outline'

        'text-main-text' => $variant === 'simple' && $color === "main-text",
        'text-main-background' => $variant === 'simple' && $color === "main-background",

        'text-left' => $textAlign === 'left', // Aplica os estilos caso o alinhamento for 'left'
        'text-center' => $textAlign === 'center', // Aplica os estilos caso o alinhamento for 'center'
        'text-right' => $textAlign === 'right', // Aplica os estilos caso o alinhamento for 'right'
        'text-justify' => $textAlign === 'justify', // Aplica os estilos caso o alinhamento for 'right'
    ])
>

    {{ $slot }}

</{{ $elementTag }}>