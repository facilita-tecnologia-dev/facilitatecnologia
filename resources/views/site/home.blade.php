<x-layouts.app>
    <x-section.header :companyInfos="$companyInfos" />

    @if($heroSection)
        <x-section class="space-y-12">
            <div class="flex flex-col items-center gap-6">
                <div class="flex flex-col items-center gap-2">
                    <x-subtitle>{!! $heroSection['subtitle']->value !!}</x-subtitle>
                    <x-heading tag="h1">
                        <span id="animated-title">&nbsp;</span>
                    </x-heading>
                </div>
                
                <x-text-content>{!! $heroSection['text']->value !!}</x-text-content>

                <div class="flex gap-4 items-center flex-col sm:flex-row">
                    <x-action href="{{ route('about') }}" variant="outline">Conheça-nos</x-action>
                    <x-action href="{{ route('services') }}" variant="solid">Nossas soluções</x-action>
                </div>
            </div>

            <div class="relative group">

                <x-illustrations.hero-illustration-desktop class="hidden md:block w-full max-w-[545px] group-hover:scale-105 transition duration-100" />
                <x-illustrations.hero-illustration-mobile class="block md:hidden w-full" />
                
                @if(isset($heroSection['hover-item'][0]))
                    <div class="text-main-background bg-main-text shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute left-0 top-2.5 -translate-x-[40%] xl:-translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][0]['value'] !!}
                        </span>
                    </div>
                @endif

                @if(isset($heroSection['hover-item'][1]))
                    <div class="text-main-background bg-main-text shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute -left-8 top-1/2 -translate-y-1/2 -translate-x-[40%] xl:-translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][1]['value'] !!}
                        </span>
                    </div>
                @endif

                @if(isset($heroSection['hover-item'][2]))
                    <div class="text-main-background bg-main-text shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute left-0 bottom-2.5 -translate-x-[40%] xl:-translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][2]['value'] !!}
                        </span>
                    </div>
                @endif                

                @if(isset($heroSection['hover-item'][3]))
                    <div class="text-main-background bg-main-text shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute right-0 top-2.5 translate-x-[40%] xl:translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][3]['value'] !!}
                        </span>
                    </div>
                @endif

                @if(isset($heroSection['hover-item'][4]))
                    <div class="text-main-background bg-main-text shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute -right-8 top-1/2 -translate-y-1/2 translate-x-[40%] xl:translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][4]['value'] !!}
                        </span>
                    </div>
                @endif
                
                @if(isset($heroSection['hover-item'][5]))
                    <div class="text-main-background bg-main-text shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute right-0 bottom-2.5 translate-x-[40%] xl:translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][5]['value'] !!}
                        </span>
                    </div>
                @endif

            </div>

        </x-section>
    @endif

    @if($ourPartners)
        <x-container width="1180">
            <x-section class="space-y-8">
                <x-subtitle>{!! $ourPartners['title']->value !!}</x-subtitle>
                <div class="flex justify-center flex-wrap gap-x-6 lg:gap-12 gap-y-8">
                    @foreach($ourPartners["partner-logo"] as $partnerLogo)
                        <div>
                            <img src="{{ asset($partnerLogo['value']) }}" alt="" class="h-7 md:h-9 grayscale-0 md:grayscale-100 md:hover:grayscale-0 transition">
                        </div>
                    @endforeach
                </div>
            </x-section>
        </x-container>
    @endif

    @if($ourHistoryNumbers)
        <x-section id="history-numbers" class="space-y-8">
            <x-container width="1180">
                <div class="w-full flex flex-wrap items-start gap-y-6 md:gap-y-8">
                    @foreach ($ourHistoryNumbers['items'] as $item)                
                        <div class="w-1/2 md:w-1/4 px-1 sm:px-2 lg:px-4 flex flex-col items-center gap-3">
                            <span class="number-counter text-gray-500 text-4xl sm:text-5xl lg:text-6xl font-extrabold" data-target="{{ $item['number']['value'] }}">0</span>
                            <x-text-content>
                                <span class="leading-tighter font-semibold">{!! $item['text']['value'] !!}</span>
                            </x-text-content>
                        </div>
                    @endforeach
                </div>
            </x-container>
        </x-section>
    @endif


    <x-section>
        <x-container width="1180">
            <div class="flex flex-col items-center gap-6 md:gap-8 lg:gap-12">
                {{-- <h2 class="text-4xl text-center text-main-text font-semibold">Atenda às Exigências da NR-1 com Segurança</h2> --}}
                <x-heading>Atenda às Exigências da NR-1 com Segurança</x-heading>
                
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-6 xl:gap-8">
                    <div class="rounded-lg bg-main-background border-2 shadow-sm px-5 py-7 md:px-6 md:py-8 flex flex-col gap-6 border-borders hover:scale-[102%] transition">
                        <header class="w-full flex items-center justify-between">
                            <h3 class="text-2xl font-semibold text-left text-psychosocial-primary-solid">Riscos Psicossociais</h3>
                            <x-icon icon="cloud-lightning" class="w-7 h-7 object-scale-down text-psychosocial-primary-solid" />
                        </header>
                        <div class="space-y-3">
                            <p class="text-sm text-main-text leading-7">
                                A metodologia da Facilita, aliada a perguntas direcionadas sobre discriminação, assédio e outras formas de violência no trabalho, oferece uma abordagem completa e prática para a gestão de riscos psicossociais. 
                            </p>
                            <p class="text-sm text-main-text leading-7">
                                Integrada ao Programa de Gerenciamento de Riscos (PGR), possibilita identificar fatores críticos, avaliar impactos e adotar medidas preventivas que promovem saúde, bem-estar e produtividade no ambiente de trabalho.
                            </p>
                        </div>
                        <ul class="space-y-3 flex-1">
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-psychosocial-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Cobertura Abrangente</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Atende aos requisitos da ISO 45003, da Convenção 190 da OIT, da EU-OSHA e do HSE-IT, incluindo fatores como sobrecarga, falta de clareza de papéis, relações interpessoais, violência e assédio.</p>
                                </div>
                            </li>
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-psychosocial-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Conformidade com a Legislação Brasileira</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Preparado para a NR 01 (que passa a exigir avaliação de riscos psicossociais no PGR), além de se alinhar às diretrizes da Lei 14.457/2022.</p>
                                </div>
                            </li>
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-psychosocial-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Visão 360° do Ambiente de Trabalho</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Permite mapear fatores de estresse, estilos de gestão, indicadores de sofrimento e danos físicos ou psicológicos.</p>
                                </div>
                            </li>
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-psychosocial-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Gestão Integrada</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Resultados facilmente incorporados a sistemas de SST e ESG, apoiando decisões estratégicas e ações de prevenção.</p>
                                </div>
                            </li>
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-psychosocial-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Instrumento Reconhecido</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Baseado em práticas internacionais de excelência em saúde ocupacional, adaptado à realidade das empresas brasileiras.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ env('RISCOS_PSICOSSOCIAIS_URL') }}" target="_blank" rel="noreferrer nofollow noopener" class="w-full rounded-sm px-4 py-3 flex items-center justify-center gap-2 bg-psychosocial-primary-solid hover:brightness-95 transition">
                            <span class="text-center text-main-background font-semibold text-base">Acessar</span>
                            <x-icon icon="cloud-lightning" class="w-4.5 h-4.5 object-scale-down text-main-background" />
                        </a>
                    </div>
                    <div class="rounded-lg bg-main-background border-2 shadow-sm px-5 py-7 md:px-6 md:py-8 flex flex-col gap-6 border-borders hover:scale-[102%] transition">
                        <header class="w-full flex items-center justify-between">
                            <h3 class="text-2xl font-semibold text-left text-report-channel-primary-solid">Canal de Denúncias</h3>
                            <x-icon icon="message-warning" class="w-7 h-7 object-scale-down text-report-channel-primary-solid" />
                        </header>
                        <div class="space-y-3">
                            <p class="text-sm text-main-text leading-7">
                                Nosso Canal de Denúncias garante um espaço seguro e confidencial para que colaboradores relatem situações de assédio, discriminação ou qualquer irregularidade. 
                            </p>
                            <p class="text-sm text-main-text leading-7">
                                Amparada por normas nacionais e internacionais, a solução assegura sigilo, transparência e imparcialidade, fortalecendo a cultura de integridade da empresa, reduzindo riscos jurídicos e construindo um ambiente de trabalho mais justo e confiável.
                            </p>
                        </div>
                        <ul class="space-y-3 flex-1">
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-report-channel-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Conformidade Legal</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Atende às exigências da Lei 14.457/22 e da Lei 14.611/23, incluindo a obrigatoriedade do canal, possibilidade de anonimato e treinamentos de combate ao assédio.</p>
                                </div>
                            </li>
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-report-channel-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Proteção e Confidencialidade</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Garante sigilo em todo o processo, preservando a identidade do denunciante e prevenindo conflitos de interesse.</p>
                                </div>
                            </li>
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-report-channel-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Processo Estruturado</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Fluxo completo de registro, análise, apuração e resposta, com participação do comitê gestor e formalização das decisões.</p>
                                </div>
                            </li>
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-report-channel-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Transparência e Segurança Jurídica</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Fornece relatórios detalhados, assegura integridade nas respostas e reduz riscos trabalhistas e reputacionais.</p>
                                </div>
                            </li>
                            <li class="space-y-1">
                                <header class="w-full gap-1 flex items-center">
                                    <x-icon icon="circle-check" class="w-4.5 h-4.5 object-scale-down text-report-channel-primary-solid" />
                                    <h3 class="text-sm text-main-text font-semibold leading-7">Cultura Ética e Preventiva</h3>
                                </header>
                                <div>
                                    <p class="text-xs text-main-text font-normal leading-5">Promove ambientes de trabalho mais respeitosos, fortalece a confiança entre colaboradores e contribui para a prevenção de assédio, discriminação e outras formas de violência.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ env('CANAL_DENUNCIAS_URL') }}" target="_blank" rel="noreferrer nofollow noopener" class="w-full rounded-sm px-4 py-3 flex items-center justify-center gap-2 bg-report-channel-primary-solid hover:brightness-95 transition">
                            <span class="text-center text-main-background font-semibold text-base">Acessar</span>
                            <x-icon icon="message-warning" class="w-4.5 h-4.5 object-scale-down text-main-background" />
                        </a>
                    </div>
                </div>

                <div class="w-full flex justify-center">
                    <x-action href="{{ route('services') }}" >Ver todas as nossas soluções</x-action>
                </div>
            </div>
        </x-container>
    </x-section>


    @if($ourPurpose)
        <x-section class="bg-white flex flex-col gap-8 lg:gap-12">
            <div class="flex flex-col items-center gap-2">
                <x-subtitle>{!! $ourPurpose['subtitle']->value !!}</x-subtitle>
                <x-heading>{!! $ourPurpose['title']->value !!}</x-heading>
            </div>
            <div>
                <img src="{{ asset($ourPurpose['diagram-image']->value) }}" alt="" class="w-full max-w-[545px]" loading="lazy">
            </div>
        </x-section>
    @endif

    @if($CTABanner)
        <x-section class="max-md:!p-0">
            <x-container width="1180">
                <div 
                    style="background-image: url('{{ asset($CTABanner['background-image']->value) }}');" 
                    class="bg-no-repeat bg-cover relative md:rounded-md overflow-hidden px-4 py-12 lg:p-20 flex justify-end"
                    loading="lazy">
                    <div class="w-full h-full absolute left-0 top-0 bg-black/40"></div>
                    <div class="relative w-full max-w-[600px] flex flex-col gap-4">
                        <x-heading color="main-background" alignment="left">{!! $CTABanner['title']->value !!}</x-heading>
                        <x-text-content color="main-background" alignment="left">
                            {{ $CTABanner['text']->value }}
                        </x-text-content>

                        @if($companyInfos['whatsapp'][0]->value)
                            <x-action href="https://wa.me/{{ $companyInfos['whatsapp'][0]->value }}?text=Por%20favor,%20eu%20gostaria%20de%20uma%20demonstração%20do%20produto!" variant="simple" color="main-background">Solicite uma demonstração</x-action>
                        @endif
                    </div>
                </div>
            </x-container>
        </x-section>
    @endif

    @if($testimonials)
        <x-section>
            <x-container width="1180">
                <div class="flex flex-col items-center gap-4 md:gap-6 lg:gap-8">
                    <x-heading>{!! $testimonials['title']->value !!}</x-heading>
                    <div class="relative w-full sm:max-w-3/4 md:max-w-full flex flex-col md:flex-row items-center md:items-start gap-8 pb-8 md:pb-0">
                        <img src="{{ asset($testimonials['image']->value) }}" alt="" class="min-w-[300px] min-h-[275px] max-h-[350px] w-2/5 object-cover rounded-md" loading="lazy">
                        <div class="!static testimonials-swiper swiper flex-1 w-full h-auto">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials['items'] as $testimonial)
                                    <div class="swiper-slide w-screen cursor-grab active:cursor-grabbing px-1">
                                        <div class="w-full h-full flex flex-col gap-6 items-center">
                                            <div class="flex-1 overflow-auto max-h-[200px] md:max-h-[150px] pr-2">
                                                <x-text-content alignment="justify">"{!! $testimonial['text']['value'] !!}"</x-text-content>
                                            </div>
                                            <div class="w-full text-left">
                                                {{-- <x-text-content alignment="left">{!! $testimonial['author']['value'] !!}</x-text-content> --}}
                                                <x-subtitle alignment="left">{!! $testimonial['author-company']['value'] !!}</x-subtitle>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            
                            <div class="swiper-pagination md:!w-fit md:!left-[calc(40%+32px)]"></div>
                        </div>

                    </div>
                </div>

            </x-container>

        </x-section>
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />
</x-layouts.app>