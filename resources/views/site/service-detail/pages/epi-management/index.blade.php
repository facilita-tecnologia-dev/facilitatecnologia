<x-layouts.service service="epi-management">

    <main>
      @include('site.service-detail.components.hero-section.index', [
            'titleId' => 'epi-management-animated-title',
            'subtitle' => 'Chega de papel, extravios e processos trabalhistas',
            'swiperVideos' => [
                [
                    'video' => asset('assets/service-videos/epi-management/cadastrar-epi.mp4'),
                    'label' => 'Cadastrar EPI'
                ],
                [
                    'video' => asset('assets/service-videos/epi-management/visualizar-epis-cadastrados.mp4'),
                    'label' => 'Visualizar EPI\'s cadastrados'
                ],
                [
                    'video' => asset('assets/service-videos/epi-management/visualizar-epis-entregues.mp4'),
                    'label' => 'Visualizar EPI\'s entregues'
                ],
                [
                    'video' => asset('assets/service-videos/epi-management/visualizar-epis-atrasados.mp4'),
                    'label' => 'Visualizar EPI\'s atrasados'
                ],
            ],
            'phrase' => 'Otimize e descomplique a gestão de EPI\'s na sua empresa'
        ])

        @include('site.service-detail.components.how-it-works.index', [
            'steps' => [
                [
                    'title' => 'Entrega Segura',
                    'description' => 'Distribua EPIs por biometria, garantindo rapidez e o item correto para cada trabalhador.',
                ],
                [
                    'title' => 'Controle Inteligente',
                    'description' => 'Monitore durabilidade, consumo, estoque e periodicidade de troca com alertas automáticos.',
                ],
                [
                    'title' => 'Gestão Automatizada',
                    'description' => 'Gere relatórios completos, acompanhe movimentações e automatize compras com base nas necessidades reais.',
                ],
                [
                    'title' => 'Conformidade Garantida',
                    'description' => 'Ficha de EPI digital, assinaturas seguras e conformidade com normas e auditorias.',
                ]
            ]
        ])

        @include('site.service-detail.components.system-resources.index', [
            'resources' => [
                [
                    'icon' => 'fingerprint',
                    'title' => 'Entrega por Biometria',
                    'description' => 'Mais agilidade e precisão na entrega dos EPIs.',
                ],
                [
                    'icon' => 'dashboard-layout',
                    'title' => 'Relatórios e Dashboard',
                    'description' => 'Controle total sobre uso, gastos e CAs vencidos.',
                ],
                [
                    'icon' => 'boxes',
                    'title' => 'Gestão de Estoque',
                    'description' => 'Monitore movimentações e necessidades em tempo real.',
                ],
                [
                    'icon' => 'scroll-paper',
                    'title' => 'Ficha de EPI Digital',
                    'description' => 'Registros eletrônicos seguros com assinatura digital ou biométrica.',
                ],
            ]
        ])

        @include('site.service-detail.components.why-choose-us.index', [
            'benefits' => [
                [
                    'icon' => 'thunder',
                    'title' => 'Agilidade',
                ],
                [
                    'icon' => 'check',
                    'title' => 'Redução de Custos',
                ],
                [
                    'icon' => 'shield-check',
                    'title' => 'Segurança',
                ],
                [
                    'icon' => 'scroll-paper',
                    'title' => 'Conformidade Legal',
                ],
            ]
        ])

    </main>

</x-layouts.service>