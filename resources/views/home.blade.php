<x-layouts.app>

    <x-section class="space-y-12">
        
        <div class="flex flex-col items-center gap-6">
            
            <div class="flex flex-col items-center gap-2">

                <x-subtitle>{{ $heroSection['subtitle']->value }}</x-subtitle>
            
                <x-heading tag="h1">
                    <span id="type"></span>
                </x-heading>
            
            </div>
            
            <x-text-content>{!! $heroSection['text']->value !!}</x-text-content>
            
            <div class="flex gap-4 items-center flex-col sm:flex-row">
            
                <x-action href="{{ route('about') }}" variant="outline">Conheça-nos</x-action>
            
                <x-action href="{{ route('services') }}" variant="solid">Nossos serviços</x-action>
            
            </div>
        
        </div>

        <div class="relative group">

            <x-illustrations.hero-illustration-desktop class="hidden md:block w-full max-w-[545px] group-hover:scale-105 transition duration-100" />
            <x-illustrations.hero-illustration-mobile class="block md:hidden w-full" />
            

            <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute left-0 top-2.5 -translate-x-[40%] xl:-translate-x-[110%] pointer-events-none">
            
                <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                    Aumento de produtividade
                    <i class="fa-solid fa-chart-line"></i>
                </span>
            
            </div>

            <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute -left-8 top-1/2 -translate-y-1/2 -translate-x-[40%] xl:-translate-x-[110%] pointer-events-none">
            
                <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                    Redução de custos
                    <i class="fa-solid fa-dollar-sign"></i>
                </span>
            
            </div>

            <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute left-0 bottom-2.5 -translate-x-[40%] xl:-translate-x-[110%] pointer-events-none">
            
                <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                    Padronização de processos
                    <i class="fa-solid fa-list-check"></i>
                </span>
            
            </div>

            <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute right-0 top-2.5 translate-x-[40%] xl:translate-x-[110%] pointer-events-none">
            
                <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                    <i class="fa-solid fa-folder-closed"></i>
                    Centralização das informações
                </span>
            
            </div>

            <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute -right-8 top-1/2 -translate-y-1/2 translate-x-[40%] xl:translate-x-[110%] pointer-events-none">
            
                <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                    <i class="fa-solid fa-lock"></i>
                    Segurança jurídica
                </span>
            
            </div>

            <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute right-0 bottom-2.5 translate-x-[40%] xl:translate-x-[110%] pointer-events-none">
            
                <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                    <i class="fa-solid fa-users-gear"></i>
                    Facilidade no controle
                </span>
            
            </div>

        </div>

    </x-section>

    <x-section class="space-y-8">
        <x-subtitle>{{ $ourPartners['title']->value }}</x-subtitle>
        <div class="flex justify-center flex-wrap gap-x-6 lg:gap-12 gap-y-8">
            @foreach($ourPartners["partner-logo"] as $partnerLogo)
                <x-action href="#" variant="simple">
                    <img src="{{ asset($partnerLogo['value']) }}" alt="" class="h-7 grayscale-0 md:grayscale-100 md:hover:grayscale-0 transition">
                </x-action>
            @endforeach
        </div>
    </x-section>

    <x-section class="bg-white flex flex-col gap-8 lg:gap-12">
        <div class="flex flex-col items-center gap-2">
            <x-subtitle>{{ $ourPurpose['subtitle']->value }}</x-subtitle>
            <x-heading>{{ $ourPurpose['title']->value }}</x-heading>
        </div>
        <div>
            <img src="{{ asset($ourPurpose['diagram-image']->value) }}" alt="" class="w-full max-w-[545px]">
        </div>
    </x-section>

    <x-section class="max-md:!p-0">
        <x-container width="1180">
            <div 
                style="background-image: url('{{ asset($CTABanner['background-image']->value) }}');" 
                class="bg-no-repeat bg-cover relative md:rounded-md overflow-hidden px-4 py-12 lg:p-20 flex justify-end"
            >
                <div class="w-full h-full absolute left-0 top-0 bg-black/40"></div>
                <div class="relative w-full max-w-[600px] flex flex-col gap-4">
                    <x-heading color="gray-100" alignment="left">{{ $CTABanner['title']->value }}</x-heading>
                    <x-text-content color="gray-100" alignment="left">
                        {{ $CTABanner['text']->value }}
                    </x-text-content>
                    <x-action variant="simple" color="gray-100">Solicite uma demonstração</x-action>
                    {{-- TODO: Link para whatsapp com mensagem pedindo demosntração --}}
                </div>
            </div>
        </x-container>
    </x-section>

    <x-section>
        <x-container width="1180">
            <div class="flex flex-col items-center gap-4 md:gap-6 lg:gap-8">
                <x-heading>{{ $testimonials['title']->value }}</x-heading>
                <div class="relative w-full sm:max-w-3/4 md:max-w-full flex flex-col md:flex-row items-center md:items-start gap-8 pb-8 md:pb-0">
                    <img src="{{ asset($testimonials['image']->value) }}" alt="" class="min-w-[300px] min-h-[275px] max-h-[350px] w-2/5 object-cover rounded-md">
                    <div class="!static swiper flex-1 w-full h-auto">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials['items'] as $testimonial)
                                <div class="swiper-slide w-screen cursor-grab active:cursor-grabbing">
                                    <div class="w-full h-full flex flex-col gap-6 items-center">
                                        <div class="flex-1 overflow-auto max-h-[200px] md:max-h-[150px]">
                                            <x-text-content alignment="justify">"{{ $testimonial['text']['value'] }}"</x-text-content>
                                        </div>
                                        <div class="w-full text-left">
                                            <x-text-content alignment="left">{{ $testimonial['author']['value'] }}</x-text-content>
                                            <x-subtitle alignment="left">{{ $testimonial['author-company']['value'] }}</x-subtitle>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        <div class="swiper-pagination md:!w-fit md:!left-[calc(40%+32px)]"></div>
                    </div>

                </div>
            </div>

        </x-container>

    </x-section>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/home.js') }}" type="module"></script>

</x-layouts.app>