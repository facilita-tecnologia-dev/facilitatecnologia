@props([
    'name',
    'id' => null,
    'placeholder' => '',
    'type' => 'text',
    
    'icon' => null,
])

<div {{ $attributes->merge(['class' => 'w-full flex items-center gap-3 bg-gray-200 px-3 rounded-md text-base text-gray-800 placeholder:text-gray-500 border border-gray-300']) }}>
    
    @if($icon && $icon === 'search')
        <i class="fa-solid fa-magnifying-glass"></i>
    @endif

    <input type="{{ $type }}" 
        class="w-full h-[45px] focus:outline-0"
        name="{{ $name }}"
        id="{{ $id ? $id : $name }}"
        placeholder="{{ $placeholder }}"
    >

</div>
