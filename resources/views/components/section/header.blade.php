<x-container>

    <header class="flex items-center justify-between p-4">
        
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/logo-facilita.svg') }}" alt="" class="h-[45px] lg:h-[55px] hover:scale-105 transition duration-100">
        </a>
        
        <nav class="hidden lg:flex items-center gap-6">
            <x-action href="{{ route('home') }}" variant="simple">Home</x-action>
            <x-action href="{{ route('about') }}" variant="simple">Sobre nós</x-action>
            <x-action href="{{ route('services') }}" variant="simple">Serviços</x-action>
            <x-action href="{{ route('contact') }}" variant="simple">Contato</x-action>

            <div class="h-9 w-0.5 bg-gray-800"></div>

            <x-action href="#" variant="solid" size="s">Login</x-action>
        </nav>
        
        <div id="menumobile-trigger" class="block lg:hidden cursor-pointer">
            <img src="{{ asset('assets/icons/menu-hamburguer.svg') }}" alt="" class="h-[45px]">
        </div>{{-- Icone Menu Mobile --}}

        <div id="menumobile-overlay" class="hidden fixed w-screen h-screen left-0 top-0 bg-gray-800/20 z-40"></div>

        <div id="menumobile" class="menumobile flex flex-col lg:hidden items-center px-4 py-12 fixed w-full max-w-[320px] h-screen bg-gray-100 shadow-lg shadow-gray-800/40 top-0 z-50">
            <div id="menumobile-close" class="absolute left-3 top-3 cursor-pointer">
                <img src="{{ asset('assets/icons/menu-hamburguer-close.svg') }}" alt="" class="h-[45px]">
            </div>
            
            <div>
                <img src="{{ asset('assets/logo-facilita.svg') }}" alt="" class="h-[45px] lg:h-[55px]">
            </div>

            <nav class="flex flex-col items-center gap-5 py-12 flex-1">
                <x-action href="{{ route('home') }}" variant="simple">Home</x-action>
                <x-action href="{{ route('about') }}" variant="simple">Sobre nós</x-action>
                <x-action href="{{ route('services') }}" variant="simple">Serviços</x-action>
                <x-action href="{{ route('contact') }}" variant="simple">Contato</x-action>
                <x-action href="#" variant="solid" size="s">Login</x-action>
            </nav>

            <div class="space-y-4">

                <x-text-content alignment="center">
                    © 2025 Facilita Tecnologia. Todos os direitos reservados.
                </x-text-content>

                <div class="w-full flex justify-center gap-4">

                    <x-action variant="simple">
                        <i class="fa-brands fa-instagram text-2xl text-gray-800"></i>
                    </x-action>

                    <x-action variant="simple">
                        <i class="fa-brands fa-linkedin text-2xl text-gray-800"></i>
                    </x-action>

                </div>

            </div>
        </div>
        
    </header>

</x-container>