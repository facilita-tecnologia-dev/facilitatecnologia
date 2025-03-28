<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* ------------ */ 
        /* --- Home --- */ 
        /* ------------ */ 

        /* --- Hero Section --- */ 

        $heroSection = DB::table('sections')->insertGetId([
            'type' => 'hero-section', 
            'order' => 1, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 1,
            'section_id' => $heroSection,
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'subtitle', 
            'value' => 'Menos desafios, mais resultados', 
            'order' => 1, 
        ]); //subtitle

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => 'Aumento de produtividade <i class="fa-solid fa-chart-line"></i>', 
            'order' => 1, 
        ]); //hover-item

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => 'Redução de custos <i class="fa-solid fa-dollar-sign"></i>', 
            'order' => 1, 
        ]);//hover-item

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => 'Padronização de processos <i class="fa-solid fa-list-check"></i>', 
            'order' => 1, 
        ]);//hover-item

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => '<i class="fa-solid fa-folder-closed"></i> Centralização das informações', 
            'order' => 1, 
        ]);//hover-item

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => '<i class="fa-solid fa-lock"></i> Segurança jurídica', 
            'order' => 1, 
        ]);//hover-item

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => '<i class="fa-solid fa-users-gear"></i> Facilidade no controle', 
            'order' => 1, 
        ]);//hover-item
         
        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'text', 
            'value' => 'Desenvolvemos soluções personalizadas que transformam <strong>desafios</strong> em <strong>praticidade</strong>.', 
            'order' => 3, 
        ]);//text

        /* --- Our Partners --- */ 
        $ourPartners = DB::table('sections')->insertGetId([
            'type' => 'our-partners', 
            'order' => 2, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 1,
            'section_id' => $ourPartners,
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 2,
            'section_id' => $ourPartners,
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Grandes empresas escolhem a Facilita', 
            'order' => 1, 
        ]); //title
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-1.svg', 
            'order' => 1, 
        ]);//partner-logo

        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-2.svg', 
            'order' => 2, 
        ]);//partner-logo
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-3.svg', 
            'order' => 3, 
        ]);//partner-logo
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-4.svg', 
            'order' => 4, 
        ]);//partner-logo
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-5.svg', 
            'order' => 5, 
        ]);//partner-logo



        /* --- History Numbers --- */ 
        $historyNumbers = DB::table('sections')->insertGetId([
            'type' => 'history-numbers', 
            'order' => 5, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 1,
            'section_id' => $historyNumbers,
        ]);

        $HNitem1 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 1, 
        ]);

        $HNitem2 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 2, 
        ]);

        $HNitem3 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 3, 
        ]);

        $HNitem4 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 4, 
        ]);

        $HNitem5 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 5, 
        ]);

        $HNitem6 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 6, 
        ]);

        $HNitem7 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 7, 
        ]);

        $HNitem8 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 8, 
        ]);


        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem1,
            'type' => 'number', 
            'value' => '1000000', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem1,
            'type' => 'text', 
            'value' => 'EPI’s entregues', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem2,
            'type' => 'number', 
            'value' => '+20', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem2,
            'type' => 'text', 
            'value' => 'anos de experiência', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem3,
            'type' => 'number', 
            'value' => '+500', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem3,
            'type' => 'text', 
            'value' => 'certificados de treinamento emitidos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem4,
            'type' => 'number', 
            'value' => '+10000', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem4,
            'type' => 'text', 
            'value' => 'colaboradores cadastrados', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem5,
            'type' => 'number', 
            'value' => '+10000', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem5,
            'type' => 'text', 
            'value' => 'currículos recebidos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem6,
            'type' => 'number', 
            'value' => '+300', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem6,
            'type' => 'text', 
            'value' => 'PRC atendidos pela NR 20', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem7,
            'type' => 'number', 
            'value' => '+20000', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem7,
            'type' => 'text', 
            'value' => 'documentos cadastrados', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem8,
            'type' => 'number', 
            'value' => '+1000', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem8,
            'type' => 'text', 
            'value' => 'colaboradores recrutados', 
            'order' => 1, 
        ]);

        $ourPurpose = DB::table('sections')->insertGetId([
            'type' => 'our-purpose', 
            'order' => 3 , 
        ]);
        
        DB::table('page_sections')->insert([
            'page_id' => 1,
            'section_id' => $ourPurpose,
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 2,
            'section_id' => $ourPurpose,
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourPurpose,
            'item_id' => null,
            'type' => 'subtitle', 
            'value' => 'Nosso propósito', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourPurpose,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Facilitar processos por meio da tecnologia.', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourPurpose,
            'item_id' => null,
            'type' => 'diagram-image', 
            'value' => 'assets/diagram-facilita.svg', 
            'order' => 1, 
        ]);


        $CTABanner = DB::table('sections')->insertGetId([
            'type' => 'cta-banner', 
            'order' => 4, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 1,
            'section_id' => $CTABanner,
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 3,
            'section_id' => $CTABanner,
        ]);

        DB::table('contents')->insert([
            'section_id' => $CTABanner,
            'item_id' => null,
            'type' => 'background-image', 
            'value' => 'assets/background-drawing.png', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $CTABanner,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Faça valer cada minuto.', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $CTABanner,
            'item_id' => null,
            'type' => 'text', 
            'value' => 'Simplifique a gestão de saúde e segurança no trabalho. Oferecemos ferramentas para um ambiente seguro, produtivo e dentro das regulamentações.', 
            'order' => 3, 
        ]);


        $testimonials = DB::table('sections')->insertGetId([
            'type' => 'testimonials', 
            'order' => 5, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 1,
            'section_id' => $testimonials,
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Cases de sucesso', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => null,
            'type' => 'image', 
            'value' => 'assets/testimonials.png', 
            'order' => 1, 
        ]);

        $item1 = DB::table('items')->insertGetId([
            'section_id' => $testimonials,
            'order' => 1, 
        ]);

        $item2 = DB::table('items')->insertGetId([
            'section_id' => $testimonials,
            'order' => 2, 
        ]);

        //

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item1,
            'type' => 'text', 
            'value' => 'O sistema de gestão de segurança para a indústria automatizou grande parte dos nossos processos, facilitando o acompanhamento de conformidade e o controle de EPIs. Com fluxos de trabalho automáticos, auditorias e inspeções são realizadas de forma rápida e eficiente, garantindo que todas as normas de segurança sejam cumpridas sem complicações. A automação trouxe mais confiança e agilidade para nossas operações.', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item1,
            'type' => 'author', 
            'value' => 'João da Silva', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item1,
            'type' => 'author-company', 
            'value' => 'Dallemole', 
            'order' => 3, 
        ]);

        //

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item2,
            'type' => 'text', 
            'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugiat odio sunt iste molestias commodi natus nisi ullam voluptate impedit quo laudantium exercitationem, dolorum animi facilis iusto, consectetur perspiciatis deleniti?', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item2,
            'type' => 'author', 
            'value' => 'Julia Santos', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item2,
            'type' => 'author-company', 
            'value' => 'Dalleaço', 
            'order' => 3, 
        ]);



        $timeline = DB::table('sections')->insertGetId([
            'type' => 'timeline', 
            'order' => 6, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 2,
            'section_id' => $timeline,
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Nossa história', 
            'order' => 1, 
        ]);

        $item1 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 1, 
        ]);

        $item2 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 2, 
        ]);

        $item3 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 3, 
        ]);

        $item4 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 4, 
        ]);

        $item5 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 5, 
        ]);

        $item6 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 6, 
        ]);

        $item7 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 7, 
        ]);

        $item8 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 8, 
        ]);

        $item9 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 9, 
        ]);
        
        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item1,
            'type' => 'year', 
            'value' => '2012', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item1,
            'type' => 'title', 
            'value' => 'Início da prestação de serviço em consultoria', 
            'order' => 1, 
        ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item2,
            'type' => 'year', 
            'value' => '2018', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item2,
            'type' => 'title', 
            'value' => 'Gestão de Recrutamento e Seleção', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item2,
            'type' => 'description', 
            'value' => 'Desenvolvimento do software de gestão conforme demandas dos clientes.', 
            'order' => 1, 
        ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item3,
            'type' => 'year', 
            'value' => '2019', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item3,
            'type' => 'title', 
            'value' => 'Módulo de gestão de cargos e salários e avaliação de desempenho.', 
            'order' => 1, 
        ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item4,
            'type' => 'year', 
            'value' => '2020', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item4,
            'type' => 'title', 
            'value' => 'Módulo de Gestão e Entrega de EPI\'s', 
            'order' => 1, 
        ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item5,
            'type' => 'year', 
            'value' => '2021', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item5,
            'type' => 'title', 
            'value' => 'NR 20', 
            'order' => 1, 
        ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item6,
            'type' => 'year', 
            'value' => '2022', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item6,
            'type' => 'title', 
            'value' => 'Gestão de treinamentos e almoxarifado.', 
            'order' => 1, 
        ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item7,
            'type' => 'year', 
            'value' => '2023', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item7,
            'type' => 'title', 
            'value' => 'Gestão de Obras', 
            'order' => 1, 
        ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item8,
            'type' => 'year', 
            'value' => '2024', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item8,
            'type' => 'title', 
            'value' => 'Gestão de Terceiros', 
            'order' => 1, 
        ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item9,
            'type' => 'year', 
            'value' => '2025', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item9,
            'type' => 'title', 
            'value' => 'Gestão de saúde mental', 
            'order' => 1, 
        ]);



        $ourBusiness = DB::table('sections')->insertGetId([
            'type' => 'our-business', 
            'order' => 1, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 2,
            'section_id' => $ourBusiness,
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourBusiness,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Nosso negócio', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourBusiness,
            'item_id' => null,
            'type' => 'text', 
            'value' => ' Nosso sistema é a solução completa para simplificar e integrar a gestão de RH e a segurança e saúde do trabalho (SST) dentro da sua empresa. Com ferramentas intuitivas e automatizadas, você pode gerenciar desde o controle de documentos e treinamentos até o cumprimento das normas regulatórias, garantindo um ambiente de trabalho seguro e produtivo. Tudo isso em uma única plataforma, que facilita a comunicação entre equipes, reduz burocracias e aumenta a eficiência operacional.<br/><br/>Seja para otimizar processos de RH, prevenir acidentes ou garantir a conformidade com as leis trabalhistas, nosso sistema é o parceiro ideal para transformar a gestão da sua empresa em algo simples, ágil e eficaz.', 
            'order' => 1, 
        ]);
    

        $ourPlans = DB::table('sections')->insertGetId([
            'type' => 'our-plans', 
            'order' => 1, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 3,
            'section_id' => $ourPlans,
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourPlans,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Nossos planos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourPlans,
            'item_id' => null,
            'type' => 'description', 
            'value' => 'Conheça os nossos planos e escolha o mais apropriado para o seu negócio.', 
            'order' => 1, 
        ]);



        $contactForm = DB::table('sections')->insertGetId([
            'type' => 'contact-form', 
            'order' => 1, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 4,
            'section_id' => $contactForm,
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $contactForm,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Contate-nos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $contactForm,
            'item_id' => null,
            'type' => 'description', 
            'value' => 'Seu feedback é <strong>valioso</strong>! Preencha o formulário e retornaremos seu contato em breve.<br>Sua mensagem será encaminhada para nosso whatsapp.', 
            'order' => 1, 
        ]);

        $systemStatus = DB::table('sections')->insertGetId([
            'type' => 'system-status', 
            'order' => 1, 
        ]);

        DB::table('page_sections')->insert([
            'page_id' => 4,
            'section_id' => $systemStatus,
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $systemStatus,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Status do sistema', 
            'order' => 1, 
        ]);
    }
}
