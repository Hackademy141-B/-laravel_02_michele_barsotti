<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homePage')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{route('ChiSiamo')}}">Chi siamo</a>
          <a class="nav-link" href="{{route('Servizi')}}">Servizi</a>
          <a class="nav-link" href="{{route('contactUs')}}">Contattaci</a>
          <a class="nav-link" href="{{route('product')}}">Crea il tuo prodotto</a>
          <a class="nav-link" href="{{route('store')}}">Lista Prodotti</a>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              @auth
              Salve, {{Auth::user()->name}}
              @else
              Accedi
              @endauth
            </button>
            <ul class="dropdown-menu">
              @guest
              <li><a class="nav-link" href="{{route('register')}}">Registrati</a></li>
              <li><a class="nav-link" href="{{route('login')}}">Accedi</a></li>
              @else
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()";>Logout</a></li>
              <li><form id="form-logout" method="post" action="{{route('logout')}}" class="d-none">@csrf</form></li>
              @endguest

            </ul>
           
                
          </div>
        </div>
      </div>
    </div>
  </nav>
                
           
                
              
              