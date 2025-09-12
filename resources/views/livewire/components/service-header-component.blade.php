<div class="contents" x-data="{ isMenuMobileOpen: false }">
    <header class="bg-main-background border-borders fixed top-8 left-1/2 z-3 flex h-[65px] w-[calc(100%-24px)] max-w-[1280px] -translate-x-1/2 items-center justify-between rounded-[64px] border px-6 shadow-sm md:h-[80px] md:px-8 xl:w-full">
        <a href="{{ route('home') }}" class="flex-1">
            <img src="{{ asset('assets/logo-facilita.webp') }}" class="h-10 object-scale-down transition hover:scale-105 md:h-12" alt="Logomarca" />
        </a>

        <nav class="hidden flex-1 flex-shrink-0 items-center justify-center gap-8 md:flex">
            <x-nav-item label="Início" onclick="scrollToY(event, 'hero-section')" />
            <x-nav-item label="Como funciona" onclick="scrollToY(event, 'how-it-works', 112)" />
            <x-nav-item label="Recursos" onclick="scrollToY(event, 'system-resources', 112)" />
        </nav>

        <div class="hidden flex-1 justify-end gap-3 md:flex">
            <a href="{{ route('services') }}" class="bg-primary-solid flex py-1.5 px-4 cursor-pointer items-center justify-center rounded-full transition hover:brightness-95" data-tippy-content="Cadastro">
                <span class="text-center text-main-background text-sm font-heading font-semibold">Voltar</span>
            </a>
        </div>

        <button class="bg-primary-solid text-main-background flex h-9 w-9 cursor-pointer items-center justify-center rounded-full md:hidden" aria-label="Abrir menu mobile" @click="isMenuMobileOpen = true">
            <x-icon icon="hamburguer" class="h-4 w-4 object-scale-down" />
        </button>
    </header>

    <div class="bg-main-text/20 fixed top-0 right-0 z-4 flex h-screen w-screen justify-end md:hidden" x-show="isMenuMobileOpen" x-transition.opacity.duration.300ms>
        <aside class="bg-main-background flex h-screen w-full max-w-[280px] flex-col items-center gap-12 px-6 py-12" @click.outside="isMenuMobileOpen = false">
            <img src="{{ asset('assets/logo-facilita.webp') }}" class="h-10 object-scale-down transition hover:scale-105 md:h-12" alt="Logo Facilita Tecnologia" />

            <nav class="flex w-full flex-col items-start gap-4">
                <x-nav-item label="Início" onclick="scrollToY(event, 'hero-section')" @click="isMenuMobileOpen = false" />
                <x-nav-item label="Como funciona" onclick="scrollToY(event, 'how-it-works', 90)" @click="isMenuMobileOpen = false" />
                <x-nav-item label="Recursos" onclick="scrollToY(event, 'system-resources', 90)" @click="isMenuMobileOpen = false" />
                <x-nav-item label="Voltar" href="{{ route('services') }}" @click="isMenuMobileOpen = false" />
            </nav>
        </aside>
    </div>
</div>
