<x-layouts.app>
    
    <x-section.header :companyInfos="$companyInfos" />

    @if($module)
        <x-section>
            <x-container width="1180">
                <div class="flex flex-col gap-8 items-center">
                    <div class="relative bg-cover bg-center px-4 md:px-6 py-6 md:py-8 rounded-md overflow-hidden" style="background-image: url({{ asset($module['image']) }})">
                        <div class="w-full h-full absolute left-0 top-0 bg-gray-800/80"></div>
                        <div class="relative flex flex-col items-center gap-3 text-gray-100">
                            <x-heading color="gray-100">{!! $module['name'] !!}</x-heading>
                            <x-text-content color="gray-100">
                                {!! $module['description'] !!}
                            </x-text-content>
                        </div>
                    </div>

                    <div class="w-full space-y-8 wysiwyg-formatter">
                        {!! $module['content'] !!}
                    </div>
                </div>


            </x-container>

        </x-section>
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>