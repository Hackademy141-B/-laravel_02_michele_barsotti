<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center bg-info">
            <div class="col-12 col-md-4">
                <h1 class="text-center">
                    Tutti i negozi
                </h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container mt-5">
        <div class="row">
            @foreach ($stores as $store)
                <div class="col-12 col-md-4 mb-2 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$store->name}}</h5>
                            Descrizione:
                            <p class="card-text">{{$store->description}}</p>
                    
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>