<x-section class="space-y-12">
    <div class="flex flex-col items-center gap-6">
        <div class="flex flex-col items-center gap-2">
            <x-subtitle>{!! $heroSection['subtitle']->value !!}</x-subtitle>
            <x-heading tag="h1">
                <span id="animated-title">&nbsp;</span>
            </x-heading>
        </div>
        
        <x-text-content>{!! $heroSection['text']->value !!}</x-text-content>

        <div class="flex gap-4 items-center flex-col sm:flex-row">
            <x-action href="{{ route('about') }}" variant="outline">Conheça-nos</x-action>
            <x-action href="{{ route('services') }}" variant="solid">Nossas soluções</x-action>
        </div>
    </div>

    <div class="relative group">
        <x-illustrations.hero-illustration-desktop class="hidden md:block w-full max-w-[545px] group-hover:scale-105 transition duration-100" />
        <x-illustrations.hero-illustration-mobile class="block md:hidden w-full" />
        
        @include('site.home.hero-section.hover-items.index', compact('heroSection'))
    </div>
</x-section>