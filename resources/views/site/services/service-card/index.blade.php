<div class="rounded-lg border-2 border-borders shadow-sm px-6 py-8 flex flex-col gap-6 bg-main-background hover:scale-[102%] transition {{ $active ? 'opacity-100' : 'opacity-60 pointer-events-none' }}">
    <header class="space-y-1">
        <div class="flex items-center gap-1">
            <div class="w-2 h-2 rounded-full {{ $active ? 'bg-success' : 'bg-primary-solid' }}"></div>
            <span class="text-xs text-left text-main-text font-normal">{{ $active ? 'Ativo' : 'Em breve' }}</span>
        </div>
        <h3 class="text-2xl text-main-text text-left font-semibold">{{ $name }}</h3>
    </header>
    <p class="text-sm text-main-text texttext-left font-normal leading-6">
        {{ $description }}
    </p>

    @if(isset($pageUrl))
        <a href="{{ $pageUrl }}" class="w-full bg-main-text hover:bg-sky-500 transition text-main-background text-center font-semibold px-4 py-3 rounded-md">
            Ver mais
        </a>
    @endif
</div>