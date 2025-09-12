<x-layouts.service service="rh-management">

    <main>
 @include('site.service-detail.components.hero-section.index', [
            'titleId' => 'rh-management-animated-title',
            'subtitle' => 'Mais agilidade, menos papelada',
            'swiperVideos' => [
                [
                    'video' => asset('assets/service-videos/rh-management/cadastrar-vaga.mp4'),
                    'label' => 'Cadastre uma vaga'
                ],
                [
                    'video' => asset('assets/service-videos/rh-management/visualizar-vagas-cadastradas.mp4'),
                    'label' => 'Visualizar vagas cadastradas'
                ],
                [
                    'video' => asset('assets/service-videos/rh-management/visualizar-candidatos.mp4'),
                    'label' => 'Visualizar candidatos'
                ],
            ],
            'phrase' => 'Torne seu recrutamento mais eficiente. assertivo e atraia mais talentos.'
        ])

        @include('site.service-detail.components.how-it-works.index', [
            'steps' => [
                [
                    'title' => 'Dashboard de Processos',
                    'description' => 'Acompanhe todas as etapas com relatórios visuais, centralizando o recrutamento.',
                ],
                [
                    'title' => 'Banco de Talentos',
                    'description' => 'Tenha candidatos sempre disponíveis para novas oportunidades.',
                ],
                [
                    'title' => 'Inteligência Artificial',
                    'description' => 'Triagem automática, ranqueamento e ordenação dos candidatos mais qualificados.',
                ],
                [
                    'title' => 'Gestão Online',
                    'description' => 'Gerencie o processo seletivo de qualquer dispositivo, em tempo real.',
                ]
            ]
        ])

        @include('site.service-detail.components.system-resources.index', [
            'resources' => [
                [
                    'icon' => 'check',
                    'title' => 'Recrutamento Rápido',
                    'description' => 'Aplique testes, filtros e critérios sob medida para cada vaga.',
                ],
                [
                    'icon' => 'shield-check',
                    'title' => 'Contratação Segura',
                    'description' => 'Reduza custos com rotatividade e aumente a retenção.',
                ],
                [
                    'icon' => 'message-circle',
                    'title' => 'Comunicação Direta',
                    'description' => 'Fale com candidatos e reduza o tempo de resposta.',
                ],
                [
                    'icon' => 'target',
                    'title' => 'Centralização Total',
                    'description' => 'Todos os processos em uma única plataforma integrada.',
                ],
            ]
        ])

        @include('site.service-detail.components.why-choose-us.index', [
            'benefits' => [
                [
                    'icon' => 'users',
                    'title' => 'Maior Alcance de Candidatos',
                ],
                [
                    'icon' => 'gear',
                    'title' => 'Divulgação Estratégica',
                ],
                [
                    'icon' => 'dashboard-layout',
                    'title' => 'Visão Estratégica',
                ],
                [
                    'icon' => 'sparkles',
                    'title' => 'Eficiência e Inovação',
                ],
            ]
        ])
    </main>

</x-layouts.service>