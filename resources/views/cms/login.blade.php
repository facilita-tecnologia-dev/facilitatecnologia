<x-layouts.app>
    <div class="w-screen h-screen flex items-center justify-center">
        <div class="bg-main-background rounded-lg shadow-lg border border-main-text/50 w-full max-w-[500px] p-6 flex flex-col items-center gap-6">
            <img src="{{ asset('assets/logo-facilita.svg') }}" alt="" class="h-[55px]">
            <h1 class="text-4xl font-bold text-main-text text-center">Painel de Controle</h1>
            <x-text-content>Fazer login no painel de controle.</x-text-content>

            <x-form class="w-full flex flex-col items-center gap-4" action="{{ route('cms.login') }}" method="POST">
                <x-form.input-text name="username" placeholder="Usuário" />
                <x-form.input-text name="password" placeholder="Senha" type="password" />
                @if(session('errorMessage'))
                    <div class="w-full">
                        <span class="text-sm text-rose-400">{{ session('errorMessage') }}</span>
                    </div>
                @endif
                <x-action tag="button">Fazer login</x-action>
            </x-form>
        </div>
    </div>
</x-layouts.app>