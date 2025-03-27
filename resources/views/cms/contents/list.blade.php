<x-layouts.app>

    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="my-8 px-4">
        <x-container>
            <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold text-gray-800">Lista de conteúdos</h2>

                <x-form method="GET">
                    <x-form.input-text icon="search" name="search" placeholder="Procure por conteúdos" />
                </x-form>

                @if($search)
                    <span class="text-sm">
                        Você pesquisou por <strong>'{{ $search }}'</strong>
                    </span>
                @endif

                <div class="border border-gray-300 rounded-md overflow-hidden">
                    <div class="grid grid-cols-5 bg-gray-300 px-4 py-1.5">
                        <div class="col-span-3 md:col-span-4">
                            <x-text-content alignment="left">Identificador</x-text-content>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <x-text-content alignment="left">Seção</x-text-content>
                        </div>
                    </div>
                    <div class="body">
                        @foreach($contents as $content)
                            <a href="{{ route('cms.content-detail', $content) }}" class="grid grid-cols-5 px-4 py-1.5 border-b border-gray-300 hover:bg-gray-200 transition">
                                <div class="col-span-3 md:col-span-4">
                                    <span class="text-sm md:text-base">
                                        {{ $content['type'] }}
                                    </span>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <span class="text-sm md:text-base">
                                        {{ $content->section['type'] }} ({{ $content->section->page[0]['title'] }})
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                
                <div class="w-full">
                    {{ $contents->links() }}
                </div>
            </div>
        </x-container>
    </div>

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>
