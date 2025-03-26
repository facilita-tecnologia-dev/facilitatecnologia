<x-layouts.app>
    
    <x-section.header :companyInfos="$companyInfos" />
    @if($plan)
        <x-section>
            <x-container width="1180"> 
                <div class="flex flex-col gap-8 items-center">
                    <div class="flex flex-col items-center gap-3">
                        <x-heading>{{ $plan['name'] }}</x-heading>

                        <x-text-content>
                            {{ $plan['description'] }}
                        </x-text-content>
                    </div>
                    
                    @if(count($planModules) > 0)
                        <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach ($planModules as $module)
                                <a href="{{ route('module-detail', $module) }}" class="w-full bg-gray-400 rounded-md p-3 sm:p-4 space-y-1 md:grayscale-100 md:hover:grayscale-0 transition duration-100 bg-center bg-cover bg-blend-multiply" style="background-image: url('{{ asset('assets/testimonials.png') }}');">
                                    <x-subtitle>
                                        <span class="text-gray-100">{{ $module['name'] }}</span>
                                    </x-subtitle>

                                    <x-text-content alignment="left" color="gray-100">
                                        <span class="text-sm font-normal">
                                            Clique para ver mais
                                        </span>
                                    </x-text-content>
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </x-container>
        </x-section>
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>