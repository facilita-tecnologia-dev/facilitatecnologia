<x-layouts.app>

    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="my-8 px-4">
        <x-container>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Módulo / {!! $module['name'] !!}</h2>

            <x-form action="{{ route('cms.module-detail', $module) }}" method="PUT" class="space-y-4" enctype="multipart/form-data">
                <x-form.input-text name="name" value="{{ $module['name'] }}" label="Nome" placeholder="Digite o nome do módulo" />

                <x-form.input-text name="slug" value="{{ $module['slug'] }}" label="Slug" placeholder="Digite o slug do módulo" />

                <div class="space-y-2">
                    <h2 class="text-lg font-semibold">
                        Imagem
                    </h2>
                    <x-form.input-file name="image" value="{{ $module['image'] }}" />
                    <img src="{{ asset($module['image']) }}" alt="" class="h-[55px]">
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-3">
                        Descrição
                    </h2>
                    <textarea class="wysiwyg" name="description" data-old="{{ $module['description'] }}"></textarea>
                    @error('description')
                        <x-error-span text="{{ $message }}" />
                    @enderror
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-3">
                        Conteúdo
                    </h2>
                    <textarea class="wysiwyg" name="content" data-old="{{ $module['content'] }}"></textarea>
                    @error('content')
                        <x-error-span text="{{ $message }}" />
                    @enderror
                </div>


                <x-form.input-text name="price" value="{{ $module['price'] }}" label="Preço" placeholder="Digite o preço do módulo" />

                <div class="flex items-center w-full justify-between">
                    <x-action tag="button">Salvar</x-action>
                    <x-action href="{{ route('cms.module-delete', $module) }}" variant="outline" onclick="return confirm('Você deseja deletar o módulo?')">Deletar</x-action>
                </div>
            </x-form>
        </x-container>
    </div>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/cms/modules/module-detail.js') }}"></script>
</x-layouts.app>
