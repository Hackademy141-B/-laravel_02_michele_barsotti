<x-layout>
    <x-slot name="dynamicTitle">Home</x-slot>
    
    @if (session('status'))
    <div class="alert alert-success text-center m-0">
        {{ session('status') }}
    </div>
    @endif
    
    
</x-layout>