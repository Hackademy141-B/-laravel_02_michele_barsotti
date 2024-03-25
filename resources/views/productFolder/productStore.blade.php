<x-layout>
<x-navbar/>
    <div class="container">
        <div class="row justify-content-center">
            
            @foreach ($products as $product)
                <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{$product['nome']}}</h5>
                            <p class="card-text">{{$product['prezzo']}}</p>
                            <p class="card-text">{{$product['descrizione']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>