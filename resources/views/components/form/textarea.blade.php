@props([
    'name',
    'placeholder' => '',
])

<div class="w-full">
    <div {{ $attributes->merge(['class' => 'w-full flex items-start gap-3 bg-secondary-background p-3 rounded-md  text-base text-main-text placeholder:text-gray-500 border border-borders']) }}>
    
        <textarea type="text"
            class="w-full h-full focus:outline-0 min-h-[160px] max-h-[300px] resize-none"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"    
        ></textarea>
    
    </div>
    
    @error($name)
        <x-error-span text="{{ $message }}" />
    @enderror
</div>
