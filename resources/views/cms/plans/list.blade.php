<x-layouts.app>
    
    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="my-8 px-4">
        <x-container>
            <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold text-gray-800">Lista de Planos</h2>

                <div class="flex items-center gap-3">
                    <x-form method="GET" class="w-full">
                        <x-form.input-text icon="search" name="search" placeholder="Procure por conteúdos" />
                    </x-form>

                    {{-- <x-action href="" size="s"> --}}
                    <x-action href="{{ route('cms.plan-create') }}" size="s">
                        <i class="fa-solid fa-plus"></i>
                    </x-action>
                </div>

                @if($search)
                    <span class="text-sm">
                        Você pesquisou por <strong>'{{ $search }}'</strong>
                    </span>
                @endif

                <div class="border border-gray-300 rounded-md overflow-hidden">
                    <div class="grid grid-cols-5 bg-gray-300 px-4 py-1.5">
                        <div class="col-span-3 md:col-span-4">
                            <x-text-content alignment="left">Nome do plano</x-text-content>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <x-text-content alignment="left">Slug</x-text-content>
                        </div>
                    </div>
                    <div class="body">
                        @foreach($plans as $plan)
                            <a href="{{ route('cms.plan-detail', $plan) }}" class="grid grid-cols-5 px-3 md:px-4 py-1.5 border-b border-gray-300 hover:bg-gray-200 transition">
                                <div class="col-span-3 md:col-span-4">
                                    <span class="text-sm md:text-base">
                                        {!! $plan['name'] !!}
                                    </span>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <span class="text-sm md:text-base">
                                        {!! $plan['slug'] !!}
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="w-full">
                    {{ $plans->links() }}
                </div>
            </div>
        </x-container>
    </div>

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>
