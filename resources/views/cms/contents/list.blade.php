<x-layouts.app>

    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="mt-8">
        <x-container>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Lista de conteúdos</h2>

            <div class="border border-gray-300 rounded-md overflow-hidden">
                <div class="grid grid-cols-5 bg-gray-300 px-4 py-1.5">
                    <div class="col-span-3">
                        <x-text-content alignment="left">Identificador</x-text-content>
                    </div>
                    <div>
                        <x-text-content alignment="left">Seção</x-text-content>
                    </div>
                    <div>
                        <x-text-content alignment="left">Página</x-text-content>
                    </div>
                </div>
                <div class="body">
                    @foreach($contents as $content)
                        <a href="{{ route('cms.content-detail', $content) }}" class="grid grid-cols-5 px-4 py-1.5 border-b border-gray-300 hover:bg-gray-200 transition">
                            <div class="col-span-3">{{ $content['type'] }}</div>
                            <div>
                                {{ $content->section['type'] }}
                            </div>
                            <div>
                                {{ $content->section->page[0]['title'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="w-full mt-4">
                {{ $contents->links() }}
            </div>
        </x-container>
    </div>

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>
