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