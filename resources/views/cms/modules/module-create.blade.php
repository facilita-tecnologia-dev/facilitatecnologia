<x-layouts.app>

    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="my-8 px-4">
        <x-container>
            <h2 class="text-3xl font-semibold text-main-text mb-6">Módulo / Criar</h2>

            <x-form action="{{ route('cms.module-create') }}" method="POST" class="space-y-4" enctype="multipart/form-data">
                <x-form.input-text name="name" label="Nome" placeholder="Digite o nome do módulo" />

                <x-form.input-text name="slug" label="Slug" placeholder="Digite o slug do módulo" />

                <div class="space-y-2">
                    <h2 class="text-lg font-semibold">
                        Imagem
                    </h2>
                    <x-form.input-file name="image" />
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-3">
                        Descrição
                    </h2>
                    <textarea class="wysiwyg" name="description"></textarea>
                    @error('description')
                        <x-error-span text="{{ $message }}" />
                    @enderror
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-3">
                        Conteúdo
                    </h2>
                    <textarea class="wysiwyg" name="content"></textarea>
                    @error('content')
                        <x-error-span text="{{ $message }}" />
                    @enderror
                </div>


                <x-form.input-text name="price" label="Preço" placeholder="Digite o preço do módulo" />

                <x-action tag="button">Salvar</x-action>
            </x-form>
        </x-container>
    </div>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/cms/modules/module-detail.js') }}"></script>
</x-layouts.app>
