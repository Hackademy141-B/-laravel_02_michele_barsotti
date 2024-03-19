<x-layout>
<x-navbar/>

  <div class="container">
<div class="row d-flex justify-content-around bg-danger">
 
  @foreach ($services as $service)

<x-card 

name="{{$service['name']}}"
id="{{$service['id']}}"
href="{{route('Dettaglio',['id'=>$service['id']])}}"
nameButton='Dettaglio'
img="{{$service['img']}}"
prezzo="{{null}}"
tempo="{{null}}"

/>

  @endforeach

</div>
</div>

 
    
  
</x-layout>