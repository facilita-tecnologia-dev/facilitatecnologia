<x-layouts.site>
    
    <x-structure.header :companyInfos="$companyInfos" />

    {{-- nova seção --}}

    @if($ourPlansContent && $ourPlansList)
        <x-section id="our-plans">
            <x-container width="1180">
                <div class="flex flex-col gap-8 md:gap-12 items-center">
                    <div class="flex flex-col gap-3 items-center">
                        <x-heading>Nossas Soluções</x-heading>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-start">
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Riscos Psicossociais',
                            'description' => 'Mapeie fatores de risco relacionados ao bem-estar mental, acompanhe indicadores e implemente planos de ação que promovem um ambiente de trabalho mais saudável e produtivo.',
                            'color' => 'psychosocial-primary-solid',
                            'pageUrl' => config('app.riscos-psicossociais-url')
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Canal de Denúncias',
                            'description' => 'Ofereça um espaço seguro e sigiloso para registro de ocorrências, assegurando confidencialidade, rastreabilidade e tratamento adequado de cada caso.',
                            'color' => 'psychosocial-primary-solid',
                            'pageUrl' => config('app.canal-denuncias-url')
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de EPI\'s',
                            'description' => 'Controle todo o ciclo de vida dos equipamentos de proteção, desde a entrega até a substituição, evitando atrasos e garantindo conformidade legal.',
                            'color' => 'psychosocial-primary-solid',
                            'pageUrl' => route('services.epi-management')
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Recrutamento & Seleção',
                            'description' => 'Otimize processos seletivos com banco de talentos integrado, relatórios inteligentes e acompanhamento em tempo real das etapas de contratação.',
                            'color' => 'psychosocial-primary-solid',
                            'pageUrl' => route('services.rh-management')
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de Treinamentos',
                            'description' => 'Planeje capacitações obrigatórias e de desenvolvimento, acompanhe presença, resultados e mantenha o histórico atualizado para auditorias e certificações.',
                            'color' => 'psychosocial-primary-solid',
                            'pageUrl' => route('services.training-management')
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Intranet',
                            'description' => 'Centralize comunicados, documentos e recursos em uma plataforma única, fortalecendo a comunicação interna e o engajamento entre equipes.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de Terceiros',
                            'description' => 'Gerencie fornecedores e prestadores de serviço com segurança, controlando contratos, documentações e conformidade legal em tempo real.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de Desempenho',
                            'description' => 'Acompanhe metas e resultados por colaborador ou equipe, realize avaliações periódicas e potencialize o desenvolvimento profissional.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão de Cargos & Salários',
                            'description' => 'Organize estruturas de cargos, defina faixas salariais e facilite a evolução de carreira, trazendo transparência e equidade para a gestão de pessoas.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => true,
                            'name' => 'Gestão NR20',
                            'description' => 'Garanta conformidade com a norma através do controle de treinamentos, certificações e monitoramento de requisitos legais específicos.',
                            'color' => 'psychosocial-primary-solid',
                        ])              
                        @include('site.services.service-card.index', [
                            'active' => false,
                            'name' => 'Gestão de Segurança',
                            'description' => 'Monitore ocorrências, identifique riscos e implemente planos de prevenção que fortalecem a cultura de segurança e reduzem acidentes.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                        @include('site.services.service-card.index', [
                            'active' => false,
                            'name' => 'Gestão de Manutenção',
                            'description' => 'Automatize ordens de serviço, organize cronogramas e registre históricos, aumentando a vida útil dos ativos e reduzindo custos operacionais.',
                            'color' => 'psychosocial-primary-solid',
                        ])
                    </div>
                </div>
            </x-container>

        </x-section>
    @endif

    <x-structure.footer :companyInfos="$companyInfos"  />
</x-layouts.site>