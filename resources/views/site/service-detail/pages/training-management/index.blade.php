<x-layouts.service service="training-management">

    <main>
        @include('site.service-detail.components.hero-section.index', [
            'titleId' => 'training-management-animated-title',
            'subtitle' => 'Chega de planilhas, papéis e esquecimentos',
            'swiperVideos' => [
                [
                    'video' => asset('assets/service-videos/training-management/cadastrar-treinamento.mp4'),
                    'label' => 'Cadastrar treinamento'
                ],
                [
                    'video' => asset('assets/service-videos/training-management/visualizar-treinamentos-cadastrados.mp4'),
                    'label' => 'Visualizar treinamentos cadastrados'
                ],
                [
                    'video' => asset('assets/service-videos/training-management/visualizar-treinamentos-realizados.mp4'),
                    'label' => 'Visualizar treinamentos realizados'
                ],
            ],
            'phrase' => 'Sua empresa no controle total dos treinamentos, com tecnologia, agilidade e segurança.'
        ])

        @include('site.service-detail.components.how-it-works.index', [
            'steps' => [
                [
                    'title' => 'Cadastro Inteligente',
                    'description' => 'Cadastre treinamentos obrigatórios e complementares, defina validade e periodicidade e gere automaticamente a LNT.',
                ],
                [
                    'title' => 'Vinculação Simplificada',
                    'description' => 'Associe treinamentos às funções, controle renovações e organize a trilha de desenvolvimento contínuo.',
                ],
                [
                    'title' => 'Gestão Eficaz e Online',
                    'description' => 'Monte turmas, gere listas de presença, acompanhe vencimentos com alertas inteligentes e emita relatórios customizáveis.',
                ],
                [
                    'title' => 'Certificação Digital',
                    'description' => 'Armazene certificados eletronicamente, emita e envie online, importe certificados externos e elimine o papel com validade jurídica.',
                ]
            ]
        ])

        @include('site.service-detail.components.system-resources.index', [
            'resources' => [
                [
                    'icon' => 'dashboard-layout',
                    'title' => 'Relatórios e Dashboard',
                    'description' => 'Visualize indicadores de treinamentos, status por cargo e conformidade.',
                ],
                [
                    'icon' => 'notification',
                    'title' => 'Alertas Inteligentes',
                    'description' => 'Receba notificações automáticas sobre vencimentos e pendências.',
                ],
                [
                    'icon' => 'monitor-phone',
                    'title' => 'Acessibilidade Total',
                    'description' => 'Gerencie de qualquer dispositivo, em tempo real.',
                ],
                [
                    'icon' => 'folder-clock',
                    'title' => 'Controle Completo',
                    'description' => 'Acesse o histórico completo de cada colaborador de forma segura na nuvem.',
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
                    'title' => 'Armazenamento Seguro',
                ],
                [
                    'icon' => 'scroll-paper',
                    'title' => 'Conformidade Garantida',
                ],
            ]
        ])
    </main>

</x-layouts.service>