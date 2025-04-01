<x-layouts.app>
    
    <x-section.header :companyInfos="$companyInfos" />

    <x-section class="">
        <x-container width="700">
        
            <div class="flex flex-col gap-8 items-center">
                
                <div class="flex flex-col gap-3 items-center">    
        
                    <x-heading>{!! $contactForm['title']->value !!}</x-heading>
                    
                    <div class="flex flex-col items-center">
                        <x-text-content>
                            {!! $contactForm['description']->value !!}
                        </x-text-content>
                    </div>

                </div>
                
                <a href="https://wa.me/{{ $companyInfos['whatsapp'][0]->value }}?text=Por%20favor,%20eu%20gostaria%20de%20uma%20demonstração%20do%20produto!" class="group w-full flex items-center justify-between gap-4 border-2 border-gray-200 rounded-md p-4 hover:border-green-300 transition">
                    <x-text-content alignment="left">Clique aqui para entrar em contato conosco!</x-text-content>

                    <i class="fa-brands fa-whatsapp text-2xl text-gray-500 group-hover:text-green-400 transition"></i>
                </a>
                {{-- <x-form action="{{ route('contact') }}" method="POST" class="w-full flex flex-col gap-y-6 gap-x-2">
                    {{-- <x-form.input-text name="name" placeholder="Nome" class="col-span-8" />

                    <x-form.input-text name="email" placeholder="E-mail" class="col-span-8" />
                    
                    <x-form.select name="ddd" class="col-span-2" :options="[['option' => '+54', 'value' => 1], ['option' => '+22', 'value' => 2], ['option' => '+33', 'value' => 3], ['option' => '+44', 'value' => 4]]" label="DDD" />
                    <x-form.input-text type="tel" name="outro" placeholder="Telefone" class="col-span-6"/> 

                    <x-form.textarea name="message" placeholder="Mensagem" class="col-span-8"></x-form.textarea>

                    <div class="col-span-8 flex justify-center">
                        <x-action tag="button" form="">Enviar mensagem</x-action>
                    </div>
                    
                </x-form> --}}
            </div>
        
        </x-container>
    </x-section>

    @if($systemStatusCode)
        <x-section id="status">
            <x-container width="700">
            
                <div class="flex flex-col gap-8 items-center">
                    <x-heading>
                        {{ $systemStatusContent['title']->value }}
                    </x-heading>
                    @if($systemStatusCode === 1)
                        <div class="w-full flex items-center justify-between gap-4 bg-gray-200 rounded-md p-4 shadow-md shadow-green-400/30">
                            <x-text-content alignment="left">O sistema está operando normalmente</x-text-content>

                            <div class="relative w-4 h-4 rounded-full bg-green-400">
                                <div class="absolute left-0 top-0 w-full h-full rounded-full bg-green-400/30 animate-ping"></div>
                            </div>
                        </div>
                    @elseif($systemStatusCode === 2)
                        <div class="w-full flex items-center justify-between gap-4 bg-gray-200 rounded-md p-4 shadow-md shadow-yellow-400/30">
                            <x-text-content alignment="left">O sistema está passando por manutenção</x-text-content>

                            <div class="w-4 h-4 rounded-full bg-yellow-400"></div>
                        </div>
                    @endif

                </div>
            
            </x-container>
        </x-section>
    @endif
{{-- 
    @if($FAQContent && $FAQList)
        <x-section id="faq">
            <x-container width="700">
            
                <div class="flex flex-col gap-8 items-center">

                    <div class="w-full flex flex-col items-center gap-3">

                        <x-heading>{{ $FAQContent['title']->value }}</x-heading>
                        
                        <x-text-content>{{ $FAQContent['description']->value }}</x-text-content>

                        <x-form action="" method="GET" class="w-full">

                            <x-form.input-text id="faq-search" name="search" placeholder="Como podemos ajudar você?" icon="search" />

                        </x-form>

                        @if($FAQSearch)
                            <x-text-content>
                                <span class="text-sm">
                                    Você pesquisou por <strong>'{{ $FAQSearch }}'</strong>
                                </span>
                            </x-text-content>
                        @endif

                    </div>

                    <div id="faq-container" class="w-full flex flex-col items-center gap-4">
                        @forelse ($FAQList as $item)
                            <div class="faq-question cursor-pointer h-fit bg-gray-200 rounded-md px-3 py-2">  
                                <div class="">
                                    <x-text-content alignment="left">
                                        <strong>{{ $item->question }}</strong>
                                    </x-text-content>
                                </div>

                                <div class="dropdown max-h-0 overflow-auto mt-0 transition duration-100">
                                    <x-text-content alignment="left">
                                        <span class="text-sm leading-tighter">
                                            {{ $item->answer }}
                                        </span>
                                    </x-text-content>
                                </div>

                            </div>
                        @empty
                            <x-text-content>Não existem perguntas relacionadas a esse assunto.</x-text-content>
                        @endforelse
                    </div>
                    
                    <div class="w-full">
                        {{ $FAQList->links() }}
                    </div>
                </div>

            </x-container>
        </x-section>
    @endif --}}

    <x-section.footer :companyInfos="$companyInfos"  />
    
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}" type="module"></script>
</x-layouts.app>