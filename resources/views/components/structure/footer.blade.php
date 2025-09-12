<footer class="border-t border-gray-500 mt-5">

    <x-section>

        <x-container width="1180">

            <div class="flex flex-col gap-12 lg:gap-4 lg:flex-row lg:justify-between items-start">
                <a href="{{ route('home') }}" aria-label="Ir para a Home">
                    @if($companyInfos['logo-small'][0]->value)
                        <img src="{{ asset($companyInfos['logo-small'][0]->value) }}" alt="" class="h-[65px]">
                    @elseif($companyInfos['logo-big'][0]->value)
                        <img src="{{ asset($companyInfos['logo-big'][0]->value) }}" alt="" class="h-[65px]">
                    @else
                        <img src="{{ asset('assets/icon-facilita.svg') }}" alt="" class="h-[65px]">
                    @endif
                </a>
                
                <div class="flex items-start flex-col md:flex-row gap-8 md:gap-20 xl:gap-28">
                    <nav class="flex flex-col gap-4">
                        <span class="uppercase text-gray-400 font-medium tracking-wider text-base md:text-lg">Navegação</span>
                        
                        <x-action href="{{ route('home') }}" variant="simple" alignment="left">Home</x-action>
                        <x-action href="{{ route('about') }}" variant="simple" alignment="left">Sobre nós</x-action>
                        <x-action href="{{ route('services') }}" variant="simple" alignment="left">Soluções</x-action>
                        <x-action href="{{ route('services') }}" variant="simple" alignment="left">Contato</x-action>
                    </nav>

                    <nav class="flex flex-col items-start gap-4">
                        <span class="uppercase text-gray-400 font-medium tracking-wider text-base md:text-lg">Termos e Política</span>
                        
                        <x-action href="{{ route('contact') }}" variant="simple" alignment="left">Política de Privacidade</x-action>
                        <x-action href="{{ route('contact') }}" variant="simple" alignment="left">Termos de Uso</x-action>
                        <x-action href="https://canaldenuncias.facilitatecnologia.com.br/facilita-tecnologia" target="_blank" rel="noreferrer nofollow noopener" variant="simple" alignment="left">Canal de Denúncias</x-action>
                    </nav>

                    <nav class="flex flex-col items-start gap-4">
                        <span class="uppercase text-gray-400 font-medium tracking-wider text-base md:text-lg">Entre em contato</span>
                        
                        <x-action href="mailto:{{ config('app.facilita-contact-email') }}" variant="simple" alignment="left">{{ config('app.facilita-contact-email') }}</x-action>
                        <x-action href="{{ route('contact') }}" variant="simple" alignment="left">{{ config('app.facilita-contact-landline') }}</x-action>
                        <x-action href="{{ config('app.facilita-whatsapp-phone-1_url') }}" variant="simple" alignment="left">{{ config('app.facilita-whatsapp-phone-1') }}</x-action>
                        <x-action href="{{ config('app.facilita-whatsapp-phone-2_url') }}" variant="simple" alignment="left">{{ config('app.facilita-whatsapp-phone-2') }}</x-action>
                    </nav>
                </div>
            </div>

        </x-container>
    
    </x-section>

    <x-container width="1180">
        <div class="px-4 py-8 flex flex-col items-start md:items-center gap-4 md:flex-row md:justify-between border-t border-gray-500">

            <x-text-content alignment="left">
                Todos os direitos reservados &copy; 2025 Facilita Tecnologia
            </x-text-content>

            <div class="flex items-center justify-center gap-6">
                <div class="flex items-center gap-4">
                    @if($companyInfos['facebook'][0]->value)
                        <x-action variant="simple" href="{{ $companyInfos['facebook'][0]->value }}" aria-label="Visitar Facebook da Facilita">
                            <i class="fa-brands fa-square-facebook text-2xl text-main-text"></i>
                        </x-action>
                    @endif
                    @if($companyInfos['linkedin'][0]->value)
                        <x-action variant="simple" href="{{ $companyInfos['linkedin'][0]->value }}" aria-label="Visitar Linkedin da Facilita">
                            <i class="fa-brands fa-linkedin text-2xl text-main-text"></i>
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