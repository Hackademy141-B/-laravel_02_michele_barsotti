<x-layout>
    

    @if (session('text'))
        <div class="alert alert-success">
            {{ session('text') }}
        </div>
    @endif

    <div class="vh-100 customImageThankYou">
        <div class="container-fluid">
            <div class="row justify-content-center customBackground">
                <div class="col-12 col-md-6">
                    <h1 class="text-center">
                        Ciao {{$name}} grazie per averci contattato, ti contatteremo al piú presto all'indirizzo: {{$email}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>