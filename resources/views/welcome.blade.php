<x-layout>
<x-slot name="dynamicTitle">Home</x-slot>
<x-navbar/>
@if (session('status'))
<div class="alert alert-success text-center m-0">
    {{ session('status') }}
</div>
@endif

 
</x-layout>