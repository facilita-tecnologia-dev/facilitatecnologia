<footer class="border-t border-gray-500 mt-5">

    <x-section>

        <x-container width="1180">

            <div class="flex flex-col gap-8 lg:gap-16 items-center lg:flex-row lg:items-start">

                <img src="{{ asset('assets/icon-facilita.svg') }}" alt="">
                
                <div class="grid grid-cols-1 gap-8 items-center sm:grid-cols-2 lg:grid-cols-4 lg:flex-1">

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
                        <x-action href="{{ route('services') }}" variant="simple" alignment="left">Planos</x-action>
                    </nav>

                    <nav class="flex flex-col items-center lg:items-start gap-4">
                        <x-text-content>
                            <span class="uppercase text-gray-400 font-medium tracking-wider">Suporte</span>
                        </x-text-content>
                        <x-action href="{{ route('contact') }}" variant="simple" alignment="left">Entrar em contato</x-action>
                        <x-action href="{{ route('contact') }}" variant="simple" alignment="left">FAQ</x-action>
                    </nav>

                    <nav class="flex flex-col items-center lg:items-start gap-4">
                        <x-text-content>
                            <span class="uppercase text-gray-400 font-medium tracking-wider">Políticas</span>
                        </x-text-content>
                        <x-action href="#" variant="simple" alignment="left">Política de Privacidade</x-action>
                        <x-action href="#" variant="simple" alignment="left">Termos de uso</x-action>
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

            <div class="flex justify-center gap-4">

                <x-action variant="simple">
                    <i class="fa-brands fa-instagram text-2xl text-gray-800"></i>
                </x-action>

                <x-action variant="simple">
                    <i class="fa-brands fa-linkedin text-2xl text-gray-800"></i>
                </x-action>

            </div>

        </div>
    </x-container>

</footer>