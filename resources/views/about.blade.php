<x-layouts.app>

    <x-section class="!px-0">
        <x-container>
            <div class="flex flex-col items-center gap-8 md:gap-10">

                <x-heading>Nossa história</x-heading>

            
                <div class="swiper flex-1 w-full h-[185px] !pb-14">

                    <div class="swiper-wrapper">
                    
                        <div class="swiper-slide w-screen h-full cursor-grab active:cursor-grabbing">
                            <div class="flex flex-col items-center gap-3">

                                <x-text-content>2020</x-text-content>

                                <div class="w-full relative flex justify-center">
                                    <div class="absolute left-0 top-1/2 -translate-1/2 h-4 w-4 rounded-full bg-gray-400"></div>

                                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-gray-400"></div>
                                    <div class="h-8 w-8 rounded-full bg-sky-500 relative border-8 border-gray-100 outline-2 outline-gray-400"></div>
                                </div>

                                <div class="w-full max-w-[300px] space-y-3">
                                    <x-subtitle>Lorem ipsum domor amet dolor losi eia esa</x-subtitle>
                                    <x-text-content>Lorem ipsum domor amet lorem ipsum domor amet Lorem ipsum domor amet</x-text-content>
                                </div>

                            </div>
                        </div>
                        
                        <div class="swiper-slide w-screen h-full cursor-grab active:cursor-grabbing">
                            <div class="flex flex-col items-center gap-3">

                                <x-text-content>2021</x-text-content>

                                <div class="w-full relative flex justify-center">
                                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-gray-400"></div>
                                    <div class="h-8 w-8 rounded-full bg-sky-500 relative border-8 border-gray-100 outline-2 outline-gray-400"></div>
                                </div>

                                <div class="w-full max-w-[300px] space-y-3">
                                    <x-subtitle>Lorem ipsum domor amet dolor</x-subtitle>
                                    <x-text-content>Lorem ipsum domor amet lorem ipsum domor amet .</x-text-content>
                                </div>

                            </div>
                        </div>
                        
                        <div class="swiper-slide w-screen h-full cursor-grab active:cursor-grabbing">
                            <div class="flex flex-col items-center gap-3">

                                <x-text-content>2022</x-text-content>

                                <div class="w-full relative flex justify-center">
                                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-gray-400"></div>
                                    <div class="h-8 w-8 rounded-full bg-sky-500 relative border-8 border-gray-100 outline-2 outline-gray-400"></div>
                                </div>

                                <div class="w-full max-w-[300px] space-y-3">
                                    <x-subtitle>Lorem ipsum domor amet dolor losi eia esa ipsum domor amet</x-subtitle>
                                    <x-text-content>Lorem ipsum domor amet lorem ipsum domor amet Lorem ipsum.</x-text-content>
                                </div>

                            </div>
                        </div>
                        
                        <div class="swiper-slide w-screen h-full cursor-grab active:cursor-grabbing">
                            <div class="flex flex-col items-center gap-3">

                                <x-text-content>2020</x-text-content>

                                <div class="w-full relative flex justify-center">
                                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-gray-400"></div>
                                    <div class="h-8 w-8 rounded-full bg-sky-500 relative border-8 border-gray-100 outline-2 outline-gray-400"></div>
                                </div>

                                <div class="w-full max-w-[300px] space-y-3">
                                    <x-subtitle>Lorem ipsum domor amet dolor losi eia esa</x-subtitle>
                                    <x-text-content>Lorem ipsum domor amet lorem ipsum domor amet Lorem ipsum domor amet</x-text-content>
                                </div>

                            </div>
                        </div>
                        
                        <div class="swiper-slide w-screen h-full cursor-grab active:cursor-grabbing">
                            <div class="flex flex-col items-center gap-3">

                                <x-text-content>2021</x-text-content>

                                <div class="w-full relative flex justify-center">
                                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-gray-400"></div>
                                    <div class="h-8 w-8 rounded-full bg-sky-500 relative border-8 border-gray-100 outline-2 outline-gray-400"></div>
                                </div>

                                <div class="w-full max-w-[300px] space-y-3">
                                    <x-subtitle>Lorem ipsum domor amet dolor</x-subtitle>
                                    <x-text-content>Lorem ipsum domor amet lorem ipsum domor amet .</x-text-content>
                                </div>

                            </div>
                        </div>
                        
                        <div class="swiper-slide w-screen h-full cursor-grab active:cursor-grabbing">
                            <div class="flex flex-col items-center gap-3">

                                <x-text-content>2022</x-text-content>

                                <div class="w-full relative flex justify-center">
                                    <div class="absolute right-0 top-1/2 translate-x-1/2 -translate-y-1/2 h-4 w-4 rounded-full bg-gray-400"></div>

                                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-gray-400"></div>
                                    <div class="h-8 w-8 rounded-full bg-sky-500 relative border-8 border-gray-100 outline-2 outline-gray-400"></div>
                                </div>

                                <div class="w-full max-w-[300px] space-y-3">
                                    <x-subtitle>Lorem ipsum domor amet dolor losi eia esa ipsum domor amet</x-subtitle>
                                    <x-text-content>Lorem ipsum domor amet lorem ipsum domor amet Lorem ipsum.</x-text-content>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="swiper-pagination"></div>

                </div>

            </div>
        </x-container>

        
    </x-section>

    <x-section class="bg-white flex flex-col gap-8 lg:gap-12">
        
        <div class="flex flex-col items-center gap-2">
            <x-subtitle>Nosso propósito</x-subtitle>
            <x-heading>Facilitar processos por meio da tecnologia.</x-heading>
        </div>

        <div>
            <img src="{{ asset('assets/diagram-facilita.svg') }}" alt="" class="w-full max-w-[545px]">
        </div>

    </x-section>

    <x-section class="gap-8 md:gap-10">
        <x-heading>Nossa equipe</x-heading>

        <div class="flex flex-col sm:flex-row sm:flex-wrap items-center gap-6 sm:gap-x-20 sm:gap-y-10x sm:justify-center">
            <div class="flex flex-col items-center gap-3">
                <div class="bg-gray-400 grayscale-100 hover:grayscale-0 transition duration-100 bg-center rounded-full w-44 h-44" style="background-image: url('{{ asset('assets/testimonials.png') }}')"></div>

                <div class="flex flex-col items-center gap-1">
                    <x-subtitle alignment="center">Nome</x-subtitle>
                    <x-text-content alignment="center">CEO Facilita Tecnologia</x-text-content>
                </div>
            </div>
            <div class="flex flex-col items-center gap-3">
                <div class="bg-gray-400 grayscale-100 hover:grayscale-0 transition duration-100 bg-center rounded-full w-44 h-44" style="background-image: url('{{ asset('assets/testimonials.png') }}')"></div>

                <div class="flex flex-col items-center gap-1">
                    <x-subtitle alignment="center">Nome</x-subtitle>
                    <x-text-content alignment="center">CEO Facilita Tecnologia</x-text-content>
                </div>
            </div>
            <div class="flex flex-col items-center gap-3">
                <div class="bg-gray-400 grayscale-100 hover:grayscale-0 transition duration-100 bg-center rounded-full w-44 h-44" style="background-image: url('{{ asset('assets/testimonials.png') }}')"></div>

                <div class="flex flex-col items-center gap-1">
                    <x-subtitle alignment="center">Nome</x-subtitle>
                    <x-text-content alignment="center">CEO Facilita Tecnologia</x-text-content>
                </div>
            </div>
        </div>
    </x-section>

    <x-section class="space-y-8">
        <x-subtitle>Grandes empresas escolhem a Facilita</x-subtitle>

        <div class="flex justify-center flex-wrap gap-x-6 lg:gap-12 gap-y-8">
            <x-action href="#" variant="simple">
                <img src="{{ asset('assets/logoipsum-1.svg') }}" alt="" class="h-7 grayscale-100 hover:grayscale-0 transition">
            </x-action>
            <x-action href="#" variant="simple">
                <img src="{{ asset('assets/logoipsum-2.svg') }}" alt="" class="h-7 grayscale-100 hover:grayscale-0 transition">
            </x-action>
            <x-action href="#" variant="simple">
                <img src="{{ asset('assets/logoipsum-3.svg') }}" alt="" class="h-7 grayscale-100 hover:grayscale-0 transition">
            </x-action>
            <x-action href="#" variant="simple">
                <img src="{{ asset('assets/logoipsum-4.svg') }}" alt="" class="h-7 grayscale-100 hover:grayscale-0 transition">
            </x-action>
            <x-action href="#" variant="simple">
                <img src="{{ asset('assets/logoipsum-5.svg') }}" alt="" class="h-7 grayscale-100 hover:grayscale-0 transition">
            </x-action>
        </div>
    </x-section>

    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/about.js') }}" type="module"></script>
</x-layouts.app>