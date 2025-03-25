<x-layouts.app>
    
    <x-section.header :companyInfos="$companyInfos" />

    <x-section>

        <x-container width="1180">
                  
            <div class="flex flex-col gap-6 md:gap-8 items-center">

                <div class="w-3/4 flex justify-center max-w-[300px]">
                    <x-illustrations.404-illustration />
                </div>


                <div class="flex flex-col items-center gap-4">
                    <x-heading>Erro 404</x-heading>

                    <x-text-content>
                       Desculpe, não conseguimos encontrar essa página em nosso site.
                       <br>
                       Por favor, confira sua barra de pesquisa ou volte para a página inicial.
                    </x-text-content>
                </div>

                <x-action href="{{ route('home') }}">Voltar para a Home</x-action>
            </div>

        </x-container>

    </x-section>

    <x-section.footer :companyInfos="$companyInfos"  />

</x-layouts.app>