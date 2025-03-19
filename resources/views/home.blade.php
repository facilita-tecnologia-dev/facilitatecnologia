<x-layouts.app>
    <x-container>

        <header class="flex items-center justify-between p-4">
            <div>
                <img src="{{ asset('assets/logo-facilita.svg') }}" alt="" class="h-[45px] lg:h-[55px]">
            </div>
            
            <nav class="hidden lg:flex items-center gap-6">
                <x-action href="#" variant="simple">Home</x-action>
                <x-action href="#" variant="simple">Sobre nós</x-action>
                <x-action href="#" variant="simple">Serviços</x-action>
                <x-action href="#" variant="simple">Contato</x-action>
                <x-action href="#" variant="simple">Contato</x-action>

                <div class="h-9 w-0.5 bg-gray-800"></div>

                <x-action href="#" variant="solid" size="s">Login</x-action>
            </nav>
            
            <div class="block lg:hidden">
                <img src="{{ asset('assets/icons/menu-hamburguer.svg') }}" alt="" class="h-[45px]">
            </div>{{-- Icone Menu Mobile --}}
        </header>
        {{-- TODO: Menu mobile --}}
    </x-container>

    <x-section class="space-y-12">
        
        <div class="flex flex-col items-center gap-6">
            
            <div class="flex flex-col items-center gap-2">
            
                <x-subtitle>Menos desafios, mais resultados</x-subtitle>
            
                <x-heading tag="h1">Tecnologia que <span class="text-sky-500">serve</span> você.</x-heading>
            
            </div>
            
            <x-text-content>Desenvolvemos soluções personalizadas que transformam <strong>desafios</strong> em <strong>praticidade</strong>.</x-text-content>
            
            <div class="flex gap-4 items-center flex-col sm:flex-row">
            
                <x-action href="#" variant="outline">Conheça-nos</x-action>
            
                <x-action href="#" variant="solid">Nossos serviços</x-action>
            
            </div>
        
        </div>

        <div>
            <img src="{{ asset('assets/hero-illustration.svg') }}" alt="" class="hidden md:block w-full max-w-[545px]">
            <img src="{{ asset('assets/hero-illustration-mobile.svg') }}" alt="" class="block md:hidden w-full">
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
</x-layouts.app>