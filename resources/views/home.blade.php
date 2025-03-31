<x-layouts.app>

    <x-section.header :companyInfos="$companyInfos" />

    @if($heroSection)
        <x-section class="space-y-12">
            <div class="flex flex-col items-center gap-6">
                <div class="flex flex-col items-center gap-2">
                    <x-subtitle>{!! $heroSection['subtitle']->value !!}</x-subtitle>
                    <x-heading tag="h1">
                        <span id="type"></span>
                    </x-heading>
                </div>
                
                <x-text-content>{!! $heroSection['text']->value !!}</x-text-content>

                <div class="flex gap-4 items-center flex-col sm:flex-row">
                    <x-action href="{{ route('about') }}" variant="outline">Conheça-nos</x-action>
                    <x-action href="{{ route('services') }}" variant="solid">Nossos serviços</x-action>
                </div>
            </div>

            <div class="relative group">

                <x-illustrations.hero-illustration-desktop class="hidden md:block w-full max-w-[545px] group-hover:scale-105 transition duration-100" />
                <x-illustrations.hero-illustration-mobile class="block md:hidden w-full" />
                
                @if(isset($heroSection['hover-item'][0]))
                    <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute left-0 top-2.5 -translate-x-[40%] xl:-translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][0]['value'] !!}
                        </span>
                    </div>
                @endif

                @if(isset($heroSection['hover-item'][1]))
                    <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute -left-8 top-1/2 -translate-y-1/2 -translate-x-[40%] xl:-translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][1]['value'] !!}
                        </span>
                    </div>
                @endif

                @if(isset($heroSection['hover-item'][2]))
                    <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute left-0 bottom-2.5 -translate-x-[40%] xl:-translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][2]['value'] !!}
                        </span>
                    </div>
                @endif                

                @if(isset($heroSection['hover-item'][3]))
                    <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute right-0 top-2.5 translate-x-[40%] xl:translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][3]['value'] !!}
                        </span>
                    </div>
                @endif

                @if(isset($heroSection['hover-item'][4]))
                    <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute -right-8 top-1/2 -translate-y-1/2 translate-x-[40%] xl:translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][4]['value'] !!}
                        </span>
                    </div>
                @endif
                
                @if(isset($heroSection['hover-item'][5]))
                    <div class="text-gray-100 bg-gray-800 shadow-md rounded-full px-5 py-2 opacity-0 hidden md:block group-hover:opacity-100 duration-100 absolute right-0 bottom-2.5 translate-x-[40%] xl:translate-x-[110%] pointer-events-none">
                        <span class="text-xs lg:text-base font-medium text-left flex items-center gap-2">
                            {!! $heroSection['hover-item'][5]['value'] !!}
                        </span>
                    </div>
                @endif

            </div>

        </x-section>
    @endif

    @if($ourPartners)
        <x-section class="space-y-8">
            <x-subtitle>{!! $ourPartners['title']->value !!}</x-subtitle>
            <div class="flex justify-center flex-wrap gap-x-6 lg:gap-12 gap-y-8">
                @foreach($ourPartners["partner-logo"] as $partnerLogo)
                    <div>
                        <img src="{{ asset($partnerLogo['value']) }}" alt="" class="h-7 md:h-9 grayscale-0 md:grayscale-100 md:hover:grayscale-0 transition">
                    </div>
                @endforeach
            </div>
        </x-section>
    @endif

    @if($ourHistoryNumbers)
        <x-section id="history-numbers" class="space-y-8">
            <x-container width="1180">
                <div class="w-full flex flex-wrap items-start gap-y-6 md:gap-y-8">
                    @foreach ($ourHistoryNumbers['items'] as $item)                
                        <div class="w-1/2 md:w-1/4 px-1 sm:px-2 lg:px-4 flex flex-col items-center gap-3">
                            <span class="number-counter text-gray-500 text-4xl sm:text-5xl lg:text-6xl font-extrabold" data-target="{{ $item['number']['value'] }}">0</span>
                            <x-text-content>
                                <span class="leading-tighter font-semibold">{!! $item['text']['value'] !!}</span>
                            </x-text-content>
                        </div>
                    @endforeach
                </div>
            </x-container>
        </x-section>
    @endif

    @if($ourPurpose)
        <x-section class="bg-white flex flex-col gap-8 lg:gap-12">
            <div class="flex flex-col items-center gap-2">
                <x-subtitle>{!! $ourPurpose['subtitle']->value !!}</x-subtitle>
                <x-heading>{!! $ourPurpose['title']->value !!}</x-heading>
            </div>
            <div>
                <img src="{{ asset($ourPurpose['diagram-image']->value) }}" alt="" class="w-full max-w-[545px]" loading="lazy">
            </div>
        </x-section>
    @endif

    @if($CTABanner)
        <x-section class="max-md:!p-0">
            <x-container width="1180">
                <div 
                    style="background-image: url('{{ asset($CTABanner['background-image']->value) }}');" 
                    class="bg-no-repeat bg-cover relative md:rounded-md overflow-hidden px-4 py-12 lg:p-20 flex justify-end"
                    loading="lazy">
                    <div class="w-full h-full absolute left-0 top-0 bg-black/40"></div>
                    <div class="relative w-full max-w-[600px] flex flex-col gap-4">
                        <x-heading color="gray-100" alignment="left">{!! $CTABanner['title']->value !!}</x-heading>
                        <x-text-content color="gray-100" alignment="left">
                            {{ $CTABanner['text']->value }}
                        </x-text-content>

                        @if($companyInfos['whatsapp'][0]->value)
                            <x-action href="https://wa.me/{{ $companyInfos['whatsapp'][0]->value }}?text=Por%20favor,%20eu%20gostaria%20de%20uma%20demonstração%20do%20produto!" variant="simple" color="gray-100">Solicite uma demonstração</x-action>
                        @endif
                    </div>
                </div>
            </x-container>
        </x-section>
    @endif

    @if($testimonials)
        <x-section>
            <x-container width="1180">
                <div class="flex flex-col items-center gap-4 md:gap-6 lg:gap-8">
                    <x-heading>{!! $testimonials['title']->value !!}</x-heading>
                    <div class="relative w-full sm:max-w-3/4 md:max-w-full flex flex-col md:flex-row items-center md:items-start gap-8 pb-8 md:pb-0">
                        <img src="{{ asset($testimonials['image']->value) }}" alt="" class="min-w-[300px] min-h-[275px] max-h-[350px] w-2/5 object-cover rounded-md" loading="lazy">
                        <div class="!static testimonials-swiper swiper flex-1 w-full h-auto">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials['items'] as $testimonial)
                                    <div class="swiper-slide w-screen cursor-grab active:cursor-grabbing px-1">
                                        <div class="w-full h-full flex flex-col gap-6 items-center">
                                            <div class="flex-1 overflow-auto max-h-[200px] md:max-h-[150px] pr-2">
                                                <x-text-content alignment="justify">"{!! $testimonial['text']['value'] !!}"</x-text-content>
                                            </div>
                                            <div class="w-full text-left">
                                                {{-- <x-text-content alignment="left">{!! $testimonial['author']['value'] !!}</x-text-content> --}}
                                                <x-subtitle alignment="left">{!! $testimonial['author-company']['value'] !!}</x-subtitle>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            
                            <div class="swiper-pagination md:!w-fit md:!left-[calc(40%+32px)]"></div>
                        </div>

                    </div>
                </div>

            </x-container>

        </x-section>
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/home.js') }}" type="module"></script>

</x-layouts.app>