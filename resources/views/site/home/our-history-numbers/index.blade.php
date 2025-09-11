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