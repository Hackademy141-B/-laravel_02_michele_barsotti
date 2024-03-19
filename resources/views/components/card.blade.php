{{-- <div class="card " style="width: 18rem;">
    <img src="{{$img}}" class="card-img-top" alt="Perch?">
    <div class="card-body">
      <h5 class="card-title">{{$name}}</h5> --}}
      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
      {{-- <a href="{{$href}}" class="btn btn-primary">{{$nameButton}}</a>
    </div>
  </div> --}}


  <div class="card" style="width: 18rem;">
    <img src="{{$img}}" class="card-img-top" alt="perch?">
    <div class="card-body">
      <h5 class="card-title">{{$name}}</h5>
      @if($prezzo)
      <p class="card-text">{{$prezzo}}</p>
      @endif
      @if($tempo)
      <p class="card-text">{{$tempo}}</p>
      @endif
      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
      <a href="{{$href}}" class="btn btn-primary">{{$nameButton}}</a>
    </div>
  </div>