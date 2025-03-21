@props([
    'action' => null,
    'method' => 'GET',
])


@php
    $formMethod = $method === 'GET' ? 'GET' : 'POST';
@endphp

<form {{ $attributes }} action="{{ $action }}" method="{{ $formMethod }}">
    @if($formMethod === 'POST')
        @csrf
    @endif

    @if($method === 'PACTH')
        @method('patch')
    @endif
        
    @if($method === 'PUT')
        @method('put')
    @endif
        
    @if($method === 'DELETE')
        @method('delete')
    @endif

    {{ $slot }}
</form>