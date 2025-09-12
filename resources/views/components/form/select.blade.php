@props([
    'options' => [],
    'placeholder' => 'Selecione uma opção',
    'name',
    'label' => null,
    'value' => null,
])

@if($label)
    <label
        class="text-lg font-semibold mb-3"
        for="{{ $name }}"
    >
        {{ $label }}
    </label>
@endif

<div onclick="toggleSelect(event)" {{ $attributes->merge(['class' => 'select relative w-full flex items-center justify-between gap-3 cursor-pointer bg-secondary-background p-3 rounded-md h-[45px] text-base text-main-text placeholder:text-gray-500 border border-borders']) }}>
    
    <input type="hidden" name="{{ $name }}" value="{{ $value }}">
    
    <span>{{ $placeholder }}</span>

    <i class="fa-solid fa-chevron-down pointer-events-none"></i>
    
    <div class="dropdown absolute hidden top-[110%] left-0 w-full bg-secondary-background  p-3 rounded-md border border-borders space-y-0.5">
        @foreach ($options as $option)
            @php
                $optionText = isset($option['option']) ? $option['option'] : $option;
                $value = "";

                // dump($options);

                if(is_array($option) && isset($option['value'])){
                    $value = $option['value'];
                } else if(is_array($option) && isset($option['option'])){
                    $value = $option['option'];
                } else{
                    $value = $option;
                }
            @endphp

            <div 
                class="bg-transparent p-1.5 hover:bg-borders transition duration-100 rounded-md text-base text-main-text" 
                onclick="handleOptionSelect('{{ $value }}')"
            >
                {{ $optionText }}
            </div>        

        @endforeach
        {{-- <div class="bg-transparent p-1.5 hover:bg-borders transition duration-100 rounded-md text-base text-main-text" onclick="handleOptionSelect('2')">Opção 2</div>
        <div class="bg-transparent p-1.5 hover:bg-borders transition duration-100 rounded-md text-base text-main-text" onclick="handleOptionSelect('3')">Opção 3</div> --}}
    </div>
</div>

<script>
    function toggleSelect(event){
        
        if(event.target.classList.contains('select')){
            const dropdown = event.target.querySelector('.dropdown');
            
            if(dropdown.classList.contains('hidden')){
                dropdown.classList.replace('hidden', 'block');

            } else if(dropdown.classList.contains('block')){
                dropdown.classList.replace('block', 'hidden');

            } else{
                return false;
            }
        }

    }

    function handleOptionSelect(selectedOptionValue){

        const selectedOption = event.target;
        const optionValue = selectedOptionValue;
        
        const parentDropdown = selectedOption.parentElement; // option.dropdown

        const parentSelect = parentDropdown.parentElement; // dropdown.select

        const parentSelectTextContent = parentSelect.querySelector('span');

        const inputHidden = parentSelect.querySelector('input[type="hidden"]');

        parentSelectTextContent.innerText = selectedOption.innerText;

        inputHidden.value = optionValue;

        parentDropdown.classList.replace('block', 'hidden');

    }
</script>