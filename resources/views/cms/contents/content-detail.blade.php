<x-layouts.app>

    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="mt-8">
        <x-container>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Seção / {{ $content['type'] }}</h2>

            <x-form action="{{ route('cms.content-detail', $content) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
                <x-form.input-text name="type" value="{{ $content['type'] }}" label="Identificador" placeholder="Digite o identificador da seção (exemplo-identificador)" />
                
                {{-- <x-form.input-text name="order" value="{{ $content['value'] }}" label="Conteúdo" placeholder="Digite o conteúdo" /> --}}
                <textarea name="value" data-old="{{ $content['value'] }}" id="content"></textarea>

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
