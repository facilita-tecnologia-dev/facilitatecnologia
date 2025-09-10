<x-layouts.app>
    <x-section.header :companyInfos="$companyInfos" />

    <x-section class="">
        <x-container width="700">
        
            <div class="flex flex-col gap-8 items-center">
                
                <div class="flex flex-col gap-3 items-center">    
        
                    <x-heading>{!! $contactForm['title']->value !!}</x-heading>
                    
                    <div class="flex flex-col items-center">
                        <x-text-content>
                            {!! $contactForm['description']->value !!}
                        </x-text-content>
                    </div>

                </div>
                
                <a href="https://wa.me/{{ $companyInfos['whatsapp'][0]->value }}" class="group w-full flex items-center justify-between gap-4 border-2 border-borders rounded-md p-4 hover:border-success transition">
                    <x-text-content alignment="left">Clique aqui para entrar em contato conosco!</x-text-content>

                    <i class="fa-brands fa-whatsapp text-2xl text-gray-500 group-hover:text-success transition"></i>
                </a>
            </div>
        
        </x-container>
    </x-section>

    <x-section.footer :companyInfos="$companyInfos"  />
</x-layouts.app>