<section id="how-it-works" class="m-auto flex w-full max-w-[850px] flex-col items-center gap-8 px-3 py-12 md:gap-12 md:px-6">
    <h2 class="text-main-text font-heading text-center text-2xl font-semibold md:text-3xl lg:text-4xl" data-aos="zoom-in" data-aos-duration="400" data-aos-offset="150">Como funciona</h2>

    @if(isset($steps) && is_array($steps))
        <ul class="flex flex-col items-center gap-4 md:gap-8">
            @foreach($steps as $key => $step)
                @include('site.service-detail.components.how-it-works.list-item.index', ['number' => $key + 1, 'title' => $step['title'], 'description' => $step['description']])
            @endforeach
        </ul>
    @endif
</section>
