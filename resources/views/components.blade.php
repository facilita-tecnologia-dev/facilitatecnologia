<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Components</title>

    
    @vite('resources/css/app.css')
</head>
<body class="p-5 space-y-5">
    <x-section class="space-y-5 bg-gray-100">

        <h2 class="text-2xl font-bold">Actions</h2>
        
        <x-action variant="solid" size="m">Solid M</x-action>
        <x-action variant="solid" size="s">Solid S</x-action>
        
        <x-action variant="outline" size="m">Outline M</x-action>
        <x-action variant="outline" size="s">Outline S</x-action>
        
        <x-action variant="simple">Outline M</x-action>

    </x-section>

    <x-section class="space-y-5 bg-gray-100">
        <h2 class="text-2xl font-bold">Headings</h2>

        <x-heading tag="h1" color="red-100">Heading</x-heading>
        <x-heading tag="h2">Heading</x-heading>
    </x-section>

    <x-section class="space-y-5 bg-gray-100">
        <h2 class="text-2xl font-bold">Subtitles</h2>

        <x-subtitle>Subtitle</x-subtitle>
    </x-section>

    <x-section class="space-y-5 bg-gray-100">
        <h2 class="text-2xl font-bold">TextContent</h2>

        <x-text-content>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque ipsa ratione alias, vitae ad modi molestias perspiciatis, ea dignissimos corrupti consectetur delectus eius minus aspernatur, recusandae sed. Velit, quos possimus!</x-text-content>
    </x-section>
    
</body>
</html>