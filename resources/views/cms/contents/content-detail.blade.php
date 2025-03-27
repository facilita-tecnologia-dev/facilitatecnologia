<x-layouts.app>

    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="my-8 px-4">
        <x-container>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Conteúdo / {{ $content['type'] }}</h2>

            <x-form action="{{ route('cms.content-detail', $content) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
                <x-form.input-text class="opacity-75" disabled name="type" value="{{ $content['type'] }}" label="Identificador" placeholder="Digite o identificador da seção (exemplo-identificador)" />

                <div>
                    <h2 class="text-lg font-semibold mb-3">
                        Conteúdo
                    </h2>
                    <div class="flex flex-col gap-2">
                        <div class="w-fit bg-gray-200 rounded-md border border-gray-200 px-1 py-1 flex gap-1">
                            <div onclick="toggleInput('text')" class="trigger-text py-1 px-3 cursor-pointer {{ $contentType == 'text' ? 'bg-gray-300' : '' }} hover:bg-gray-300 transition rounded-sm">Texto</div>
                            <div onclick="toggleInput('file')" class="trigger-file py-1 px-3 cursor-pointer {{ $contentType == 'file' ? 'bg-gray-300' : '' }} hover:bg-gray-300 transition rounded-sm">Imagem</div>
                        </div>
                    
                        <div id="text" class="{{ $contentType === 'text' ? 'block' : 'hidden' }}">
                            <textarea name="value" data-old="{{ $content['value'] }}" id="content"></textarea>
                        </div>
                        <div id="file" class="{{ $contentType === 'file' ? 'block' : 'hidden' }}">
                            <x-form.input-file name="value" value="{{ $content['value'] }}" />
                        </div>
                    </div>
                    @error('value')
                        <x-error-span text="{{ $message }}" />
                    @enderror
                </div>

                <x-form.input-text name="order" value="{{ $content['order'] }}" label="Ordem" placeholder="Digite a ordem da seção" />
                <x-form.select name="section_id" :options="$sectionsToSelect" label="Seção" placeholder="{{ $content->section['type'] ?? null }}"  value="{{ $content->section['id'] }}"/>

                <x-action tag="button">Salvar</x-action>
            </x-form>
        </x-container>
    </div>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/cms/contents/content-detail.js') }}"></script>
</x-layouts.app>
