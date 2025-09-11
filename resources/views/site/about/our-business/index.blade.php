<x-section>
    <x-container width="1180">
        <div class="flex flex-col gap-8 items-center">
            <x-heading>{!! $ourBusiness['title']->value !!}</x-heading>
            <x-text-content>
                {!! $ourBusiness['text']->value !!}
            </x-text-content>
        </div>
    </x-container>
</x-section>