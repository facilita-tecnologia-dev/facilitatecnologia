<section id="system-resources" class="bg-secondary-background flex justify-center px-3 py-12 md:px-6">
    <div class="flex w-full max-w-[850px] flex-col items-center gap-8 md:gap-12">
        <h2 class="text-main-text font-heading text-center text-2xl font-semibold md:text-3xl lg:text-4xl" data-aos="zoom-in" data-aos-duration="400" data-aos-offset="150">Recursos</h2>

        @if(isset($resources) && is_array($resources))
            <div class="grid w-full gap-4 md:grid-cols-2 md:gap-6 lg:gap-8">
                @foreach($resources as $resource)
                    @include('site.service-detail.components.system-resources.resource-card.index', ['icon' => $resource['icon'], 'title' => $resource['title'], 'description' => $resource['description']])
                @endforeach    
            </div>
        @endif
    </div>
</section>
