@props(['service'])

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('components.imports.head')
    
    <title>Facilita Tecnologia</title>
</head>
<body class="bg-main-background relative service-{{ $service }}">
    <livewire:components.service-header-component/>
    
    {{ $slot }}
    
    <x-structure.service-footer />
</body>
</html>
