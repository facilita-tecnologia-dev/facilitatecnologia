<x-layouts.app>
    <header class=" bg-gray-300">
        <x-container>
        
            <div class="flex items-center justify-between p-4">
                <a href="{{ route('cms.index') }}" class="flex items-center gap-2">
                    @if($companyInfos['logo-small'][0]->value)
                        <img src="{{ asset($companyInfos['logo-small'][0]->value) }}" alt="" class="h-[45px] lg:h-[55px] hover:scale-105 transition duration-100">
                    @else
                        <img src="{{ asset('assets/icon-facilita.svg') }}" alt="" class="h-[45px] lg:h-[55px] hover:scale-105 transition duration-100">
                    @endif
                    <span class="text-xl font-semibold text-gray-800">CMS</span>
                </a>
                
                <nav class="hidden lg:flex items-center gap-6">
                    <x-action href="#" variant="simple">Seções</x-action>
                    <x-action href="#" variant="simple">Planos</x-action>
                    <x-action href="#" variant="simple">Módulos</x-action>
                    <x-action href="#" variant="simple">Infos. Empresa</x-action>
                </nav>
                
                <div id="menumobile-trigger" class="block lg:hidden cursor-pointer">
                    <img src="{{ asset('assets/icons/menu-hamburguer.svg') }}" alt="" class="h-[45px]">
                </div>{{-- Icone Menu Mobile --}}
                <div id="menumobile-overlay" class="hidden fixed w-screen h-screen left-0 top-0 bg-gray-800/20 z-40"></div>
                <div id="menumobile" class="menumobile flex flex-col lg:hidden items-center px-4 py-12 fixed w-full max-w-[320px] h-screen bg-gray-100 shadow-lg shadow-gray-800/40 top-0 z-50">
                    <div id="menumobile-close" class="absolute left-3 top-3 cursor-pointer">
                        <img src="{{ asset('assets/icons/menu-hamburguer-close.svg') }}" alt="" class="h-[45px]">
                    </div>
                
                    <a href="{{ route('home') }}" class="flex items-center gap-2">
                        @if($companyInfos['logo-small'][0]->value)
                            <img src="{{ asset($companyInfos['logo-small'][0]->value) }}" alt="" class="h-[45px] lg:h-[55px] hover:scale-105 transition duration-100">
                        @else
                            <img src="{{ asset('assets/icon-facilita.svg') }}" alt="" class="h-[45px] lg:h-[55px] hover:scale-105 transition duration-100">
                        @endif
                        <span class="text-xl font-semibold text-gray-800">CMS</span>
                    </a>

                    <nav class="flex flex-col items-center gap-5 py-12 flex-1">
                        <x-action href="#" variant="simple">Seções</x-action>
                        <x-action href="#" variant="simple">Planos</x-action>
                        <x-action href="#" variant="simple">Módulos</x-action>
                        <x-action href="#" variant="simple">Infos. Empresa</x-action>
                    </nav>
                </div>
            </div>
            
        </x-container>
    </header>

    <div class="mt-8">
        <x-container>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Lista de Módulos</h2>

            <div class="border border-gray-300 rounded-md overflow-hidden">
                <div class="grid grid-cols-5 bg-gray-300 px-4 py-1.5">
                    <div class="col-span-4">
                        <x-text-content alignment="left">Nome do módulo</x-text-content>
                    </div>
                    <div>
                        <x-text-content alignment="left">Slug</x-text-content>
                    </div>
                </div>
                <div class="body">
                    @foreach($modules as $module)
                        <div class="grid grid-cols-5 px-4 py-1.5 border-b border-gray-300">
                            <div class="col-span-4">{{ $module['name'] }}</div>
                            <div>
                                {{ $module['slug'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="w-full mt-4">
                {{ $modules->links() }}
            </div>
        </x-container>
    </div>

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>
