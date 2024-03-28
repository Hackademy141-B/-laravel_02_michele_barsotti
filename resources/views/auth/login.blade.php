<x-layout>
    <x-slot name="dynamicTitle">Contattaci</x-slot>
    <x-navbar/>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 rounded-5 shadow mt-3">
                <h1 class="text-center">
                    Accedi
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

<form method="POST" action="{{route('login')}}">

    @csrf


    <div class="mb-3">
        <label for="inoutEmail" class="form-label">Email:</label>
        <input name="email" type="email" class="form-control" id="inoutEmail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="inputPassword" class="form-label">Password:</label>
        <input name="password" type="password" class="form-control" id="inputPassword">
    </div>


    <button type="submit" class="btn btn-primary">Accedi</button>
  </form>
                
              </div>
          </div>
      </div>
                
              </x-layout>