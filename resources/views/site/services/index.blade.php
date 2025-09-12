<x-layouts.app>
    
    <x-section.header :companyInfos="$companyInfos" />

    {{-- nova seção --}}

    @if($ourPlansContent && $ourPlansList)
        <x-section id="our-plans">
            <x-container width="1180">
                <div class="flex flex-col gap-8 md:gap-12 items-center">
                    <div class="flex flex-col gap-3 items-center">
                        <x-heading>Nossas Soluções</x-heading>
                    </div>

                    <div class="grid grid-cols-3 gap-6 items-start">
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Riscos Psicossociais',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                            'pageUrl' => config('app.riscos-psicossociais-url')
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Canal de Denúncias',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                            'pageUrl' => config('app.canal-denuncias-url')
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de EPI\'s',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Recrutamento & Seleção',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de Treinamentos',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Intranet',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de Terceiros',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de Desempenho',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de Cargos & Salários',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão NR20',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])              
                        @include('site.services.service-card.index', [
                            'active' => false,
                            'name' => 'Gestão de Segurança',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => false,
                            'name' => 'Gestão de Manutenção',
                            'description' => 'A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                    </div>
                </div>
            </x-container>

        </x-section>
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />
</x-layouts.app>