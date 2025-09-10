<x-layouts.app>

    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="my-8 px-4">
        <x-container>
            <h2 class="text-3xl font-semibold text-main-text mb-6">Plano / Criar</h2>

            <x-form action="{{ route('cms.plan-create') }}" method="POST" class="space-y-4">
                <x-form.input-text name="name" label="Nome" placeholder="Digite o nome do plano" />

                <x-form.input-text name="slug" label="Slug" placeholder="Digite o slug do plano" />

                <div>
                    <h2 class="text-lg font-semibold mb-3">
                        Descrição
                    </h2>
                    <textarea id="content" name="description"></textarea>
                    @error('description')
                        <x-error-span text="{{ $message }}" />
                    @enderror
                </div>
                
                <x-form.input-text name="price" label="Preço" placeholder="Digite o preço do plano" />

                <div>
                    <h2 class="text-lg font-semibold mb-3">
                        Módulos
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($modules as $module)
                            <label class="flex items-center gap-3 px-4 py-2.5 bg-borders rounded-md">
                                <input type="checkbox" name="modules[]" value="{{ $module->id }}"> {{ $module->name }}
                            </label>
                        @endforeach
                    </div>
                    @error('modules')
                        <x-error-span text="{{ $message }}" />
                    @enderror
                </div>

                <x-action tag="button">Salvar</x-action>
            </x-form>
        </x-container>
    </div>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/cms/plans/plan-detail.js') }}"></script>
</x-layouts.app>
