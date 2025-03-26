<x-layouts.app>
    
    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="mt-8">
        <x-container>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Lista de Planos</h2>

            <div class="border border-gray-300 rounded-md overflow-hidden">
                <div class="grid grid-cols-5 bg-gray-300 px-4 py-1.5">
                    <div class="col-span-4">
                        <x-text-content alignment="left">Nome do plano</x-text-content>
                    </div>
                    <div>
                        <x-text-content alignment="left">Slug</x-text-content>
                    </div>
                </div>
                <div class="body">
                    @foreach($plans as $plan)
                        <div class="grid grid-cols-5 px-4 py-1.5 border-b border-gray-300">
                            <div class="col-span-4">{{ $plan['name'] }}</div>
                            <div>
                                {{ $plan['slug'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="w-full mt-4">
                {{ $plans->links() }}
            </div>
        </x-container>
    </div>

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>
