<x-section class="!px-0">
    <x-container>
        <div class="flex flex-col items-center gap-8 md:gap-10">
            <x-heading>{!! $timeline['title']->value !!}</x-heading>

            <div class="timeline-swiper swiper flex-1 w-full h-[185px] !pb-14">
                <div class="swiper-wrapper">
                    @foreach ($timeline['items'] as $item)
                        <div class="swiper-slide w-screen h-full cursor-grab active:cursor-grabbing">
                            <div class="flex flex-col items-center gap-3">
                                <x-text-content>{!! $item['year']['value'] !!}</x-text-content>
                                <div class="w-full relative flex justify-center">

                                    @if($loop->first)
                                        <div class="absolute left-0 top-1/2 -translate-1/2 h-4 w-4 rounded-full bg-gray-400"></div>
                                    @endif

                                    @if($loop->last)
                                        <div class="absolute right-0 top-1/2 translate-x-1/2 -translate-y-1/2 h-4 w-4 rounded-full bg-gray-400"></div>
                                    @endif

                                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-gray-400"></div>
                                    <div class="h-8 w-8 rounded-full bg-sky-500 relative border-8 border-main-background outline-2 outline-gray-400"></div>
                                </div>
                                <div class="w-full max-w-[300px] flex flex-col items-center gap-3">
                                    <x-subtitle>{!! $item['title']['value'] !!}</x-subtitle>
                                    @if(isset($item['description']))
                                        <x-text-content>{!! $item['description']['value'] !!}</x-text-content>
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