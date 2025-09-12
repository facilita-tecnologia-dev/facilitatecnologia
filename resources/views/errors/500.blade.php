<x-layouts.site>
    
    <x-section>
        <x-container width="1180">
            <div class="flex flex-col gap-6 md:gap-8 items-center">
                <div class="w-3/4 flex justify-center max-w-[300px]">
                    <x-illustrations.500-illustration />
                </div>

                <div class="flex flex-col items-center gap-4">
                    <x-heading>Ocorreu um erro</x-heading>

                    <x-text-content>
                       Já estamos trabalhando para corrigir esse erro
                       <br>
                       Por favor, tente novamente mais tarde.
                    </x-text-content>
                </div>

                <x-action href="{{ route('home') }}">Voltar para a Home</x-action>
            </div>
        </x-container>
    </x-section>

</x-layouts.site>