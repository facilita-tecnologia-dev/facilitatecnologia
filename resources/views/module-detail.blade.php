<x-layouts.app>
    
    <x-section.header :companyInfos="$companyInfos" />

    @if($module)
        <x-section>
            <x-container width="1180">
                <div class="flex flex-col gap-8 items-center">
                    <div class="flex flex-col items-center gap-3">
                        <x-heading>{{ $module['name'] }}</x-heading>

                        <x-text-content>
                        {{ $module['description'] }}
                        </x-text-content>
                    </div>

                    <div class="w-full space-y-8">
                        {{ $module['content'] }}
                    </div>
                </div>


            </x-container>

        </x-section>
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />

    <script src="{{ asset('js/global.js') }}"></script>
</x-layouts.app>