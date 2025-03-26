<x-layouts.app>
    <div class="w-screen h-screen flex items-center justify-center">
        <div class="bg-gray-100 rounded-lg shadow-lg border border-gray-800/50 w-full max-w-[500px] p-6 flex flex-col items-center gap-6">
            <h1 class="text-4xl font-bold text-gray-800 text-center">Painel de Controle</h1>
            <x-text-content>Fazer login no painel de controle.</x-text-content>

            <x-form class="w-full flex flex-col items-center gap-4" action="" method="POST">
                <x-form.input-text name="username" placeholder="Usuário" />
                <x-form.input-text name="password" placeholder="Senha" type="password" />
                <x-action tag="button">Fazer login</x-action>
            </x-form>
        </div>
    </div>
</x-layouts.app>