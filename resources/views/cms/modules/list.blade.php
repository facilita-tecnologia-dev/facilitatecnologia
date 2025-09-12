<x-layouts.site>
    
    <x-structure.cms-header :companyInfos="$companyInfos"/>

    <div class="my-8 px-4">
        <x-container>
            <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold text-main-text">Lista de Módulos</h2>

                <div class="flex items-center gap-3">
                    <x-form method="GET" class="w-full">
                        <x-form.input-text icon="search" name="search" placeholder="Procure por conteúdos" />
                    </x-form>

                    <x-action href="{{ route('cms.module-create') }}" size="s">
                        <i class="fa-solid fa-plus"></i>
                    </x-action>
                </div>

                @if($search)
                    <span class="text-sm">
                        Você pesquisou por <strong>'{{ $search }}'</strong>
                    </span>
                @endif

                <div class="border border-borders rounded-md overflow-hidden">
                    <div class="grid grid-cols-5 bg-borders px-4 py-1.5">
                        <div class="col-span-3 md:col-span-4">
                            <x-text-content alignment="left">Nome do módulo</x-text-content>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <x-text-content alignment="left">Slug</x-text-content>
                        </div>
                    </div>
                    <div class="body">
                        @foreach($modules as $module)
                            <a href="{{ route('cms.module-detail', $module) }}" class="grid grid-cols-5 px-4 py-1.5 border-b border-borders hover:bg-secondary-background transition">
                                <div class="col-span-3 md:col-span-4">
                                    <span class="text-sm md:text-base">
                                        {!! $module['name'] !!}
                                    </span>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <span class="text-sm md:text-base">
                                        {!! $module['slug'] !!}
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="w-full">
                    {{ $modules->links() }}
                </div>
            </div>
        </x-container>
    </div>

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.site>
