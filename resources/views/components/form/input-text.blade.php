@props([
    'name',
    'id' => null,
    'placeholder' => '',
    'type' => 'text',
    'value' => null,
    'label' => null,
    
    'icon' => null,
])

<div class="w-full">
    @if($label)
        <label
            class="text-lg font-semibold mb-3"
            for="{{ $id ? $id : $name }}"
        >
            {{ $label }}
        </label>
    @endif

    <div {{ $attributes->merge(['class' => 'w-full flex items-center gap-3 bg-gray-200 px-3 rounded-md text-base text-gray-800 placeholder:text-gray-500 border border-gray-300']) }}>
        
        @if($icon && $icon === 'search')
            <i class="fa-solid fa-magnifying-glass"></i>
        @endif

        <input type="{{ $type }}" 
            class="w-full h-[45px] focus:outline-0"
            name="{{ $name }}"
            id="{{ $id ? $id : $name }}"
            placeholder="{{ $placeholder }}"
            value="{{ $value }}"
        >

    </div>

    @error($name)
        <div class="w-full">
            <span class="text-xs text-rose-400">{{ $message }}</span>
        </div>
    @enderror
</div>
