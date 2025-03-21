<x-layouts.app>
    
    <x-section class="">
        <x-container width="700">
        
            <div class="flex flex-col gap-8 items-center">
                
                <div class="flex flex-col gap-3 items-center">    
        
                    <x-heading>Contate-nos</x-heading>
                    
                    <div class="flex flex-col items-center">
                        <x-text-content>
                            Seu feedback é <strong>valioso</strong>! Preencha o formulário e retornaremos seu contato em breve.
                        </x-text-content>
                        <x-text-content>
                            Sua mensagem será encaminhada para nosso whatsapp.
                        </x-text-content>
                    </div>

                </div>
                
                <x-form action="" method="POST" class="w-full grid grid-cols-8 gap-y-6 gap-x-2">
                    {{-- <x-form.input-text name="name" placeholder="Nome" class="col-span-8" />

                    <x-form.input-text name="email" placeholder="E-mail" class="col-span-8" />
                    
                    <x-form.select name="ddd" class="col-span-2" :options="[['option' => '+54', 'value' => 1], ['option' => '+22', 'value' => 2], ['option' => '+33', 'value' => 3], ['option' => '+44', 'value' => 4]]" label="DDD" />
                    <x-form.input-text type="tel" name="outro" placeholder="Telefone" class="col-span-6"/> --}}

                    <x-form.textarea name="message" placeholder="Mensagem" class="col-span-8"></x-form.textarea>

                    <div class="col-span-8 flex justify-center">
                        <x-action tag="button" form="">Enviar mensagem</x-action>
                    </div>
                    
                </x-form>
            </div>
        
        </x-container>
    </x-section>
    
    <x-section>
        <x-container width="700">
        
            <div class="flex flex-col gap-8 items-center">
                <x-heading>
                    Status do sistema
                </x-heading>

                <div class="w-full flex items-center justify-between gap-4 bg-gray-200 rounded-md p-4 shadow-md shadow-green-400/30">
                    

                    <x-text-content alignment="left">O sistema está operando normalmente</x-text-content>

                    <div class="relative w-4 h-4 rounded-full bg-green-400">
                        <div class="absolute left-0 top-0 w-full h-full rounded-full bg-green-400/30 animate-ping"></div>
                    </div>
                </div>

                {{-- <div class="w-full flex items-center justify-between gap-4 bg-gray-200 rounded-md p-4 shadow-md shadow-yellow-400/30">
                    <x-text-content alignment="left">O sistema está passando por manutenção</x-text-content>

                    <div class="w-4 h-4 rounded-full bg-yellow-400"></div>
                </div> --}}
            </div>
        
        </x-container>
    </x-section>

    <x-section id="faq">
        <x-container width="700">
        
            <div class="flex flex-col gap-8 items-center">

                <div class="w-full flex flex-col items-center gap-3">

                    <x-heading>FAQ</x-heading>
                    
                    <x-subtitle>Respostas para as suas perguntas mais frequentes.</x-subtitle>

                    <x-form action="" method="POST" class="w-full">

                        <x-form.input-text name="nome" placeholder="Como podemos ajudar você?" icon="search" />

                    </x-form>

                    <x-text-content>
                        <span class="text-sm">
                            Você pesquisou por <strong>'Como entrar no sistema'</strong>
                        </span>
                    </x-text-content>

                </div>

                <div class="w-full flex flex-col gap-4">
                    <div class="faq-question cursor-pointer h-fit bg-gray-200 rounded-md px-3 py-2">
                        
                        <div class="">
                            <x-text-content alignment="left">
                                <strong>Pergunta 1</strong>
                            </x-text-content>
                        </div>

                        {{-- <div class="h-fit overflow-hidden pt-2"> --}}
                        <div class="dropdown max-h-0 overflow-auto mt-0 transition duration-100">
                            <x-text-content alignment="left">
                                <span class="text-sm leading-tighter">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                </span>
                            </x-text-content>
                        </div>

                    </div>

                    <div class="faq-question cursor-pointer h-fit bg-gray-200 rounded-md px-3 py-2">
                        
                        <div class="">
                            <x-text-content alignment="left">
                                <strong>Pergunta 2</strong>
                            </x-text-content>
                        </div>

                        {{-- <div class="h-fit overflow-hidden pt-2"> --}}
                        <div class="dropdown max-h-0 overflow-auto mt-0 transition duration-100">
                            <x-text-content alignment="left">
                                <span class="text-sm leading-tighter">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                </span>
                            </x-text-content>
                        </div>

                    </div>

                    <div class="faq-question cursor-pointer h-fit bg-gray-200 rounded-md px-3 py-2">
                        
                        <div class="">
                            <x-text-content alignment="left">
                                <strong>Pergunta 3</strong>
                            </x-text-content>
                        </div>

                        {{-- <div class="h-fit overflow-hidden pt-2"> --}}
                        <div class="dropdown max-h-0 overflow-auto mt-0 transition duration-100">
                            <x-text-content alignment="left">
                                <span class="text-sm leading-tighter">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                </span>
                            </x-text-content>
                        </div>

                    </div>

                    <div class="faq-question cursor-pointer h-fit bg-gray-200 rounded-md px-3 py-2">
                        
                        <div class="">
                            <x-text-content alignment="left">
                                <strong>Pergunta 4</strong>
                            </x-text-content>
                        </div>

                        {{-- <div class="h-fit overflow-hidden pt-2"> --}}
                        <div class="dropdown max-h-0 overflow-auto mt-0 transition duration-100">
                            <x-text-content alignment="left">
                                <span class="text-sm leading-tighter">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                </span>
                            </x-text-content>
                        </div>

                    </div>

                    <div class="faq-question cursor-pointer h-fit bg-gray-200 rounded-md px-3 py-2">
                        
                        <div class="">
                            <x-text-content alignment="left">
                                <strong>Pergunta 5</strong>
                            </x-text-content>
                        </div>

                        {{-- <div class="h-fit overflow-hidden pt-2"> --}}
                        <div class="dropdown max-h-0 overflow-auto mt-0 transition duration-100">
                            <x-text-content alignment="left">
                                <span class="text-sm leading-tighter">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec metus vitae mi laoreet faucibus. Curabitur lobortis nibh sem, id blandit orci mollis vel.
                                </span>
                            </x-text-content>
                        </div>

                    </div>
                </div>

            </div>

        </x-container>
    </x-section>

    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}" type="module"></script>
</x-layouts.app>