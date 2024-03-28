<x-layout>
    <x-slot name="dynamicTitle">Contattaci</x-slot>
    <x-navbar/>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 rounded-5 shadow mt-3">
                <h1 class="text-center">
                    Registrati
                </h1>

                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('register')}}">

    @csrf

    <div class="mb-3">
        <label for="inputName" class="form-label">Nome utente:</label>
        <input name="name" type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
    </div>
    <div class="mb-3">
        <label for="inoutEmail" class="form-label">Email:</label>
        <input name="email" type="email" class="form-control" id="inoutEmail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="inputPassword" class="form-label">Password:</label>
        <input name="password" type="password" class="form-control" id="inputPassword">
    </div>
    <div class="mb-3">
        <label for="inputPasswordConfirmation" class="form-label">Conferma password:</label>
        <input name="password_confirmation" type="password" class="form-control" id="inputPasswordConfirmation">
    </div>

    <button type="submit" class="btn btn-primary">Registrati</button>
  </form>
                
              </div>
          </div>
      </div>
                
              </x-layout>