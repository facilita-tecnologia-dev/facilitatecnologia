<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d6c8bd95ac.js" crossorigin="anonymous"></script>
    
    <title>Components</title>

    
    @vite('resources/css/app.css')
</head>
<body class="p-5 space-y-5">
    <x-section class="space-y-5 bg-main-background">

        <h2 class="text-2xl font-bold">Actions</h2>
        
        <x-action variant="solid" size="m">Solid M</x-action>
        <x-action variant="solid" size="s">Solid S</x-action>
        
        <x-action variant="outline" size="m">Outline M</x-action>
        <x-action variant="outline" size="s">Outline S</x-action>
        
        <x-action variant="simple">Outline M</x-action>

    </x-section>

    <x-section class="space-y-5 bg-main-background">
        <h2 class="text-2xl font-bold">Headings</h2>

        <x-heading tag="h1" color="red-100">Heading</x-heading>
        <x-heading tag="h2">Heading</x-heading>
    </x-section>

    <x-section class="space-y-5 bg-main-background">
        <h2 class="text-2xl font-bold">Subtitles</h2>

        <x-subtitle>Subtitle</x-subtitle>
    </x-section>

    <x-section class="space-y-5 bg-main-background">
        <h2 class="text-2xl font-bold">TextContent</h2>

        <x-text-content>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque ipsa ratione alias, vitae ad modi molestias perspiciatis, ea dignissimos corrupti consectetur delectus eius minus aspernatur, recusandae sed. Velit, quos possimus!</x-text-content>
    </x-section>


    <x-section class="space-y-5 bg-main-background">
        <h2 class="text-2xl font-bold">Text Inputs</h2>

        <x-form.input-text name="nome" />

        <x-form.input-text name="nome" placeholder="Digite algo..." />
        
        <x-form.input-text type="tel" name="telefone" placeholder="Digite algo..." />

        <x-form.input-text type="tel" name="outro" placeholder="Digite algo..." />
        
        <x-form.input-text name="nome" placeholder="Digite algo..." icon="search" />
    
    </x-section>

    <x-section class="space-y-5 bg-main-background">
        <h2 class="text-2xl font-bold">Textareas</h2>

        <x-form.textarea name="nome" />

        <x-form.textarea name="nome" placeholder="Digite algo..." />
        
        <x-form.textarea name="nome" placeholder="Digite algo..." />
    
    </x-section>

    <x-section class="space-y-5 bg-main-background">
        <h2 class="text-2xl font-bold">Textareas</h2>

        <x-form.select name="ddd" :options="[['option' => '+54', 'value' => 1], ['option' => '+22', 'value' => 2], ['option' => '+33', 'value' => 3], ['option' => '+44', 'value' => 4]]" label="DDD" />

    </x-section>

    <x-section>
        <h2 class="text-2xl font-bold">Inputfile</h2>

        <x-form.input-file name="image" />
    </x-section>
    
    <x-section></x-section>
    
</body>
</html>