<x-layouts.app>
    
    <x-section.header :companyInfos="$companyInfos" />

    @if($ourPlansContent && $ourPlansList)
        <x-section id="our-plans">
            <x-container width="1180">
                <div class="flex flex-col gap-8 md:gap-12 items-center">
                    <div class="flex flex-col gap-3 items-center">
                        <x-heading>{!! $ourPlansContent['title']->value !!}</x-heading>
                        <x-text-content>{!! $ourPlansContent['description']->value !!}</x-text-content>
                    </div>

                    <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-8 px-3">
                        @foreach ($ourPlansList as $i => $plan)
                            <div class="plan relative h-fit {{ $ourPlansColors[$i % count($ourPlansColors)] }} rounded-md p-4 cursor-pointer">
                                <img src="{{ asset('assets/wave-plan.svg') }}" class="absolute left-0 top-0 w-full" />

                                <div class="flex items-center justify-between">
                                    <x-subtitle>
                                        <span class="text-main-text">{!! $plan['name'] !!}</span>
                                    </x-subtitle>

                                    <x-action href="{{ route('plan-detail', $plan) }}" variant="simple">Ver mais</x-action>
                                </div>

                                <div class="dropdown border-t border-gray-600 max-h-[300px] mt-4 pl-4 pt-4 overflow-hidden">
                                    <ul class="list-disc space-y-2">
                                        @foreach ($plan->modules as $module)
                                            <li>
                                                <x-text-content alignment="left">
                                                   {!! $module['name'] !!}
                                                </x-text-content>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>

            </x-container>

        </x-section>
    @endif

    @if($CTABanner)
        <x-section class="max-md:!p-0">
            <x-container width="1180">
                <div 
                    style="background-image: url('{{ asset($CTABanner['background-image']->value) }}');" 
                    class="bg-no-repeat bg-cover relative md:rounded-md overflow-hidden px-4 py-12 lg:p-20 flex justify-end"
                >
                    <div class="w-full h-full absolute left-0 top-0 bg-black/40"></div>
                    <div class="relative w-full max-w-[600px] flex flex-col gap-4">
                        <x-heading color="main-background" alignment="left">{!! $CTABanner['title']->value !!}</x-heading>
                        <x-text-content color="main-background" alignment="left">
                            {!! $CTABanner['text']->value !!}
                        </x-text-content>

                        @if($companyInfos['whatsapp'][0]->value)
                            <x-action href="https://wa.me/?phone={{ $companyInfos['whatsapp'][0]->value }}&text=Por%20favor,%20eu%20gostaria%20de%20uma%20demonstração%20do%20produto!" variant="simple" color="main-background">Solicite uma demonstração</x-action>
                        @endif
                    </div>
                </div>
            </x-container>
        </x-section>
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />

    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/services.js') }}" type="module"></script>
</x-layouts.app>