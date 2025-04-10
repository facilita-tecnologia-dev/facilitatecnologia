<x-container>

    <header class="flex items-center justify-between p-4">
        
        <a href="{{ route('home') }}" aria-label="Ir para a Home">
            @if($companyInfos['logo-big'][0]->value)
                <img src="{{ asset($companyInfos['logo-big'][0]->value) }}" alt="" class="h-[45px] lg:h-[55px] hover:scale-105 transition duration-100">
            @elseif($companyInfos['logo-small'][0]->value)
                <img src="{{ asset($companyInfos['logo-small'][0]->value) }}" alt="" class="h-[45px] lg:h-[55px] hover:scale-105 transition duration-100">
            @else
                <img src="{{ asset('assets/logo-facilita.svg') }}" alt="" class="h-[45px] lg:h-[55px] hover:scale-105 transition duration-100">
            @endif
        </a>
        
        <nav class="hidden lg:flex items-center gap-6">
            <div class="px-2 py-1.5 rounded-md" 
                style="
                    background: rgb(201,255,249);
                    background: linear-gradient(135deg, rgba(201,255,249,1) 0%, rgba(255,193,204,1) 50%, rgba(180,223,251,1) 100%);"
                >
                <x-action href="https://saudemental.facilitatecnologia.com.br" variant="simple">
                    <span class="text-gray-800">Facilita Saúde Mental</span>
                </x-action>
            </div>
            <x-action href="{{ route('home') }}" variant="simple">Home</x-action>
            <x-action href="{{ route('about') }}" variant="simple">Sobre nós</x-action>
            <x-action href="{{ route('services') }}" variant="simple">Serviços</x-action>
            <x-action href="{{ route('contact') }}" variant="simple">Contato</x-action>

            <div class="h-9 w-0.5 bg-gray-800"></div>

            <x-action href="https://www.facilitarh.com.br/sistema" variant="solid" size="s">Login</x-action>
        </nav>
        
        <div id="menumobile-trigger" class="block lg:hidden cursor-pointer">
            <img src="{{ asset('assets/icons/menu-hamburguer.svg') }}" alt="" class="h-[45px]">
        </div>{{-- Icone Menu Mobile --}}

        <div id="menumobile-overlay" class="hidden fixed w-screen h-screen left-0 top-0 bg-gray-800/20 z-40"></div>

        <div id="menumobile" class="menumobile flex flex-col lg:hidden items-center px-4 py-12 fixed w-full max-w-[320px] h-screen bg-gray-100 shadow-lg shadow-gray-800/40 top-0 z-50">
            <div id="menumobile-close" class="absolute left-3 top-3 cursor-pointer">
                <img src="{{ asset('assets/icons/menu-hamburguer-close.svg') }}" alt="" class="h-[45px]">
            </div>
            
            <a href="{{ route('home') }}" aria-label="Ir para a Home">
                @if($companyInfos['logo-big'][0]->value)
                    <img src="{{ asset($companyInfos['logo-big'][0]->value) }}" alt="" class="h-[45px] lg:h-[55px]">
                @elseif($companyInfos['logo-small'][0]->value)
                    <img src="{{ asset($companyInfos['logo-small'][0]->value) }}" alt="" class="h-[45px] lg:h-[55px]">
                @else
                    <img src="{{ asset('assets/logo-facilita.svg') }}" alt="" class="h-[45px] lg:h-[55px]">
                @endif
            </a>

            <nav class="flex flex-col items-center gap-5 py-12 flex-1">
                <div class="px-2 py-1.5 rounded-md" 
                    style="
                        background: rgb(201,255,249);
                        background: linear-gradient(135deg, rgba(201,255,249,1) 0%, rgba(255,193,204,1) 50%, rgba(180,223,251,1) 100%);"
                    >
                    <x-action href="https://saudemental.facilitatecnologia.com.br" variant="simple">
                        <span class="text-gray-800">Facilita Saúde Mental</span>
                    </x-action>
                </div>
                <x-action href="{{ route('home') }}" variant="simple">Home</x-action>
                <x-action href="{{ route('about') }}" variant="simple">Sobre nós</x-action>
                <x-action href="{{ route('services') }}" variant="simple">Serviços</x-action>
                <x-action href="{{ route('contact') }}" variant="simple">Contato</x-action>
                <x-action href="https://www.facilitarh.com.br/sistema" variant="solid" size="s">Login</x-action>
            </nav>

            <div class="space-y-4">

                <x-text-content alignment="center">
                    © 2025 Facilita Tecnologia. Todos os direitos reservados.
                </x-text-content>

                <div class="w-full flex justify-center gap-4">
                    @if($companyInfos['facebook'][0]->value)
                        <x-action variant="simple" href="{{ $companyInfos['facebook'][0]->value }}">
                            <i class="fa-brands fa-square-facebook text-2xl text-gray-800"></i>
                        </x-action>
                    @endif

                    @if($companyInfos['linkedin'][0]->value)
                        <x-action variant="simple" href="{{ $companyInfos['linkedin'][0]->value }}">
                            <i class="fa-brands fa-linkedin text-2xl text-gray-800"></i>
                        </x-action>
                    @endif
                </div>

            </div>
        </div>
        
    </header>

</x-container>