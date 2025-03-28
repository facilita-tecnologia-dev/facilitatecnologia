<x-layouts.app>

    <x-section.cms-header :companyInfos="$companyInfos"/>

    <div class="my-8 px-4">
        <x-container>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Informações da empresa</h2>

            <x-form action="{{ route('cms.company-infos') }}" method="POST" class="space-y-4" enctype="multipart/form-data">

                <div class="space-y-2">
                    <h2 class="text-lg font-semibold">
                        Logo (big)
                    </h2>
                    <x-form.input-file name="{{ $companyData['logo-big'][0]->id }}" value="{{ $companyData['logo-big'][0]->value }}" />
                    <img src="{{ asset($companyData['logo-big'][0]->value) }}" alt="" class="h-[35px]">
                </div>

                <div class="space-y-2">
                    <h2 class="text-lg font-semibold">
                        Logo (small)
                    </h2>
                    <x-form.input-file name="{{ $companyData['logo-small'][0]->id }}" value="{{ $companyData['logo-small'][0]->value }}" />
                    <img src="{{ asset($companyData['logo-small'][0]->value) }}" alt="" class="h-[35px]">
                </div>

                <x-form.input-text name="{{ $companyData['linkedin'][0]->id }}" value="{{ $companyData['linkedin'][0]->value }}" label="{{ $companyData['linkedin'][0]->type }}" />
                <x-form.input-text name="{{ $companyData['facebook'][0]->id }}" value="{{ $companyData['facebook'][0]->value }}" label="{{ $companyData['facebook'][0]->type }}" />
                <x-form.input-text name="{{ $companyData['whatsapp'][0]->id }}" value="{{ $companyData['whatsapp'][0]->value }}" label="{{ $companyData['whatsapp'][0]->type }}" />

                {{-- <x-form.input-text name="slug" value="{{ $plan['slug'] }}" label="Slug" placeholder="Digite o slug do plano" />
                
                <x-form.input-text name="price" value="{{ $plan['price'] }}" label="Preço" placeholder="Digite o preço do plano" /> --}}

                <x-action tag="button">Salvar</x-action>
            </x-form>
        </x-container>
    </div>

    {{-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script> --}}
    <script src="{{ asset('js/global.js') }}"></script>
    {{-- <script src="{{ asset('js/cms/plans/plan-detail.js') }}"></script> --}}
</x-layouts.app>
