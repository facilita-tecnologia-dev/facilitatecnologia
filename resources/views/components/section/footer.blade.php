<footer class="border-t border-gray-500 mt-5">

    <x-section>

        <x-container width="1180">

            <div class="flex flex-col gap-8 lg:gap-16 items-center lg:flex-row lg:items-start">

                <a href="{{ route('home') }}" aria-label="Ir para a Home">
                    @if($companyInfos['logo-small'][0]->value)
                        <img src="{{ asset($companyInfos['logo-small'][0]->value) }}" alt="" class="h-[65px]">
                    @elseif($companyInfos['logo-big'][0]->value)
                        <img src="{{ asset($companyInfos['logo-big'][0]->value) }}" alt="" class="h-[65px]">
                    @else
                        <img src="{{ asset('assets/icon-facilita.svg') }}" alt="" class="h-[65px]">
                    @endif
                </a>
                
                <div class="grid grid-cols-1 gap-8 items-start sm:grid-cols-2 lg:grid-cols-4 lg:flex-1">

                    <nav class="flex flex-col items-center lg:items-start gap-4">
                        <x-text-content>
                            <span class="uppercase text-gray-400 font-medium tracking-wider">Empresa</span>
                        </x-text-content>
                        <x-action href="{{ route('home') }}" variant="simple" alignment="left">Home</x-action>
                        <x-action href="{{ route('about') }}" variant="simple" alignment="left">Sobre nós</x-action>
                    </nav>

                    <nav class="flex flex-col items-center lg:items-start gap-4">
                        <x-text-content>
                            <span class="uppercase text-gray-400 font-medium tracking-wider">Serviços</span>
                        </x-text-content>
                        <x-action href="{{ route('services') }}" variant="simple" alignment="left">Serviços</x-action>
                    </nav>

                    <nav class="flex flex-col items-center lg:items-start gap-4">
                        <x-text-content>
                            <span class="uppercase text-gray-400 font-medium tracking-wider">Suporte</span>
                        </x-text-content>
                        <x-action href="{{ route('contact') }}" variant="simple" alignment="left">Entrar em contato</x-action>
                        <x-action href="{{ route('contact') }}?secao=status" variant="simple" alignment="left">Status do sistema</x-action>
                    </nav>

                    <nav class="flex flex-col items-center lg:items-start gap-4">
                        <x-text-content>
                            <span class="uppercase text-gray-400 font-medium tracking-wider">Saúde Mental</span>
                        </x-text-content>
                        <div class="px-2 py-1.5 rounded-md" 
                            style="
                                background: rgb(201,255,249);
                                background: linear-gradient(135deg, rgba(201,255,249,1) 0%, rgba(255,193,204,1) 50%, rgba(180,223,251,1) 100%);"
                            >
                            <x-action href="https://saudemental.facilitatecnologia.com.br" variant="simple">
                                <span class="text-gray-800">Facilita Saúde Mental</span>
                            </x-action>
                        </div>
                    </nav>

                </div>

            </div>

        </x-container>
    
    </x-section>

    <x-container width="1180">

        <div class="px-4 py-8 flex flex-col items-center gap-4 lg:flex-row lg:justify-between border-t border-gray-500">

            <x-text-content alignment="center">
                © 2025 Facilita Tecnologia. Todos os direitos reservados.
            </x-text-content>

            <div class="flex flex-col items-center lg:flex-row justify-center gap-6">
                    <div class="flex items-center gap-4">
                        @if($companyInfos['facebook'][0]->value)
                            <x-action variant="simple" href="{{ $companyInfos['facebook'][0]->value }}" aria-label="Visitar Facebook da Facilita">
                                <i class="fa-brands fa-square-facebook text-2xl text-gray-800"></i>
                            </x-action>
                        @endif
                        @if($companyInfos['linkedin'][0]->value)
                            <x-action variant="simple" href="{{ $companyInfos['linkedin'][0]->value }}" aria-label="Visitar Linkedin da Facilita">
                                <i class="fa-brands fa-linkedin text-2xl text-gray-800"></i>
                            </x-action>
                        @endif
                    </div>

                    <div>
                        <img src="{{ asset('assets/aws-logo.png') }}" alt="" class="h-[25px] object-contain">
                    </div>
            </div>

        </div>
    </x-container>

</footer>