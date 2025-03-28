<x-layouts.app>

    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="px-4 my-8 flex flex-col gap-4">
        <div class="w-full rounded-md bg-gray-300 px-4 py-6">
            <p class="text-lg font-semibold text-left">Nome da empresa</p>
            <span class="text-xl text-left font-normal">Facilita Tecnologia</span>
        </div>
        <div class="grid grid-cols-4 gap-4">
            <div class="rounded-md bg-gray-300 px-4 py-6">
                <p class="text-lg font-semibold text-left">Nº de seções registrados</p>
                <span class="text-xl text-left font-normal">{{ $sectionsCount }}</span>
            </div>
            <div class="rounded-md bg-gray-300 px-4 py-6">
                <p class="text-lg font-semibold text-left">Nº de conteúdos registrados</p>
                <span class="text-xl text-left font-normal">{{ $contentsCount }}</span>
            </div>
            <div class="rounded-md bg-gray-300 px-4 py-6">
                <p class="text-lg font-semibold text-left">Nº de planos registrados</p>
                <span class="text-xl text-left font-normal">{{ $plansCount }}</span>
            </div>
            <div class="rounded-md bg-gray-300 px-4 py-6">
                <p class="text-lg font-semibold text-left">Nº de módulos registrados</p>
                <span class="text-xl text-left font-normal">{{ $modulesCount }}</span>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>
