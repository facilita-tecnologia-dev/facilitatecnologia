<x-layouts.app>
    
    <x-section.header :companyInfos="$companyInfos" />

    <x-section>

        <x-container width="1180">
                  
            <div class="flex flex-col gap-8 items-center">

                <div class="flex flex-col items-center gap-3">
                    <x-heading>Plano Profissional</x-heading>

                    <x-text-content>
                        Vá além do básico e gerencie todas as exigências de SST (Segurança e Saúde no Trabalho) com ferramentas especializadas. Controle documentos obrigatórios, programas de prevenção de riscos (PPRA, PCMSO), treinamentos, EPIs e incidentes de forma centralizada. Garanta conformidade com normas como NRs, reduza riscos ocupacionais e promova um ambiente seguro, evitando multas e fortalecendo a cultura de prevenção. 
                        <br> <br>
                        Perfeito para empresas que priorizam a saúde dos colaboradores e a excelência na gestão de segurança.
                        <br> <br>
                        No <strong>Plano Profissional</strong> estão inclusos todos os módulos do <a href="" class="underline">Plano Básico</a>, juntamente com os módulos listados abaixo:
                    </x-text-content>
                </div>
                

                <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <a href="" class="w-full bg-gray-400 rounded-md p-3 sm:p-4 space-y-1 md:grayscale-100 md:hover:grayscale-0 transition duration-100 bg-center bg-cover bg-blend-multiply" style="background-image: url('{{ asset('assets/testimonials.png') }}');">
                        <x-subtitle>
                            <span class="text-gray-100">Título do módulo</span>
                        </x-subtitle>

                        <x-text-content alignment="left" color="gray-100">
                            <span class="text-sm font-normal">
                                Clique para ver mais
                            </span>
                        </x-text-content>
                    </a>
                    <a href="" class="w-full bg-gray-400 rounded-md p-3 sm:p-4 space-y-1 md:grayscale-100 md:hover:grayscale-0 transition duration-100 bg-center bg-cover bg-blend-multiply" style="background-image: url('{{ asset('assets/testimonials.png') }}');">
                        <x-subtitle>
                            <span class="text-gray-100">Título do módulo</span>
                        </x-subtitle>

                        <x-text-content alignment="left" color="gray-100">
                            <span class="text-sm font-normal">
                                Clique para ver mais
                            </span>
                        </x-text-content>
                    </a>
                    <a href="" class="w-full bg-gray-400 rounded-md p-3 sm:p-4 space-y-1 md:grayscale-100 md:hover:grayscale-0 transition duration-100 bg-center bg-cover bg-blend-multiply" style="background-image: url('{{ asset('assets/testimonials.png') }}');">
                        <x-subtitle>
                            <span class="text-gray-100">Título do módulo</span>
                        </x-subtitle>

                        <x-text-content alignment="left" color="gray-100">
                            <span class="text-sm font-normal">
                                Clique para ver mais
                            </span>
                        </x-text-content>
                    </a>
                    <a href="" class="w-full bg-gray-400 rounded-md p-3 sm:p-4 space-y-1 md:grayscale-100 md:hover:grayscale-0 transition duration-100 bg-center bg-cover bg-blend-multiply" style="background-image: url('{{ asset('assets/testimonials.png') }}');">
                        <x-subtitle>
                            <span class="text-gray-100">Título do módulo</span>
                        </x-subtitle>

                        <x-text-content color="gray-100" alignment="left">
                            <span class="text-sm font-normal">
                                Clique para ver mais
                            </span>
                        </x-text-content>
                    </a>
                </div>
            </div>

        </x-container>

    </x-section>

    <x-section.footer :companyInfos="$companyInfos"  />

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>