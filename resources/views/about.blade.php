<x-layouts.app>

    <x-section.header :companyInfos="$companyInfos" />

    @if($timeline)
        <x-section class="!px-0">
            <x-container>
                <div class="flex flex-col items-center gap-8 md:gap-10">

                    <x-heading>{{ $timeline['title']->value }}</x-heading>

                    <div class="timeline-swiper swiper flex-1 w-full h-[185px] !pb-14">
                        <div class="swiper-wrapper">
                            @foreach ($timeline['items'] as $item)
                                <div class="swiper-slide w-screen h-full cursor-grab active:cursor-grabbing">
                                    <div class="flex flex-col items-center gap-3">
                                        <x-text-content>{{ $item['year']['value'] }}</x-text-content>
                                        <div class="w-full relative flex justify-center">

                                            @if($loop->first)
                                                <div class="absolute left-0 top-1/2 -translate-1/2 h-4 w-4 rounded-full bg-gray-400"></div>
                                            @endif

                                            @if($loop->last)
                                                <div class="absolute right-0 top-1/2 translate-x-1/2 -translate-y-1/2 h-4 w-4 rounded-full bg-gray-400"></div>
                                            @endif

                                            <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-gray-400"></div>
                                            <div class="h-8 w-8 rounded-full bg-sky-500 relative border-8 border-gray-100 outline-2 outline-gray-400"></div>
                                        </div>
                                        <div class="w-full max-w-[300px] flex flex-col items-center gap-3">
                                            <x-subtitle>{{ $item['title']['value'] }}</x-subtitle>
                                            @if(isset($item['description']))
                                                <x-text-content>{{ $item['description']['value'] }}</x-text-content>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach      
                        </div>
                        
                        <div class="swiper-pagination"></div>

                    </div>

                </div>
            </x-container>

            
        </x-section>
    @endif

    @if($ourPurpose)
        <x-section class="bg-white flex flex-col gap-8 lg:gap-12">
            <div class="flex flex-col items-center gap-2">
                <x-subtitle>{{ $ourPurpose['subtitle']->value }}</x-subtitle>
                <x-heading>{{ $ourPurpose['title']->value }}</x-heading>
            </div>
            <div>
                <img src="{{ asset($ourPurpose['diagram-image']->value) }}" alt="" class="w-full max-w-[545px]">
            </div>
        </x-section>
    @endif

    {{-- @if($ourTeam)
        <x-section class="gap-8 md:gap-10">
            <x-heading>{{ $ourTeam['title']->value }}</x-heading>

            <div class="flex flex-col sm:flex-row sm:flex-wrap items-center gap-6 sm:gap-x-20 sm:gap-y-10x sm:justify-center">
                @foreach ($ourTeam['items'] as $teamMember)                
                    <div class="flex flex-col items-center gap-3">
                        <div 
                            style="background-image: url('{{ asset($teamMember['member-photo']['value']) }}')"
                            class="bg-gray-400 grayscale-0 md:grayscale-100 md:hover:grayscale-0 transition duration-100 bg-center rounded-full w-44 h-44" 
                        ></div>

                        <div class="flex flex-col items-center gap-1">
                            <x-subtitle alignment="center">{{ $teamMember['member-name']['value'] }}</x-subtitle>
                            <x-text-content alignment="center">{{ $teamMember['member-occupation']['value'] }}</x-text-content>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-section>
    @endif --}}

    @if($ourBusiness)
        <x-section>
            <x-container width="1180">
                <div class="flex flex-col gap-8 items-center">
                    <x-heading>{{ $ourBusiness['title']->value }}</x-heading>
                    <x-text-content>
                        {!! $ourBusiness['text']->value !!}
                    </x-text-content>
                </div>
            </x-container>
        </x-section>
    @endif

    @if($ourPartners)
        <x-section class="space-y-8">
            <x-subtitle>{{ $ourPartners['title']->value }}</x-subtitle>
            <div class="flex justify-center flex-wrap gap-x-6 lg:gap-12 gap-y-8">
                @foreach($ourPartners["partner-logo"] as $partnerLogo)
                    <x-action href="#" variant="simple">
                        <img src="{{ asset($partnerLogo['value']) }}" alt="" class="h-7 md:h-8 grayscale-0 md:grayscale-100 md:hover:grayscale-0 transition">
                    </x-action>
                @endforeach
            </div>
        </x-section>
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />
    
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/about.js') }}" type="module"></script>
</x-layouts.app>