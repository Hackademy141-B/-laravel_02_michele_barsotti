<x-layout>

  <x-navbar/>

  <x-card
  name="{{$service['name']}}"
id="{{$service['id']}}"
href="{{route('Servizi',['id'=>$service['id']])}}"
nameButton='Torna Indietro'
img="{{$service['img']}}"
prezzo="{{$service['prezzo']}}"
tempo="{{$service['tempo']}}"
  
  />

  {{-- <div class="card" style="width: 18rem;">
    <img src="{{$service['img']}}" class="card-img-top" alt="perch?">
    <div class="card-body">
      <h5 class="card-title">{{$service['name']}}</h5>
      <p class="card-text">{{$service['prezzo']}}</p>
      <p class="card-text">{{$service['tempo']}}</p>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{route('Servizi')}}" class="btn btn-primary">Torna Indietro</a>
    </div>
  </div> --}}

 
    
  
</x-layout>