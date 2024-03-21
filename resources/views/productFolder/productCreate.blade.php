<x-layout>
    <x-slot name="dynamicTitle">Contattaci</x-slot>
    <x-navbar/>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 rounded-5 shadow mt-3">
                <h1 class="text-center">
                    Crea il tuo prodotto!
                </h1>

                
                <form method="post" action="{{route('createPag')}}" class="p-3">
                  <div class="mb-3">
                    <label for="InputNameProduct" class="form-label">Nome del prodotto</label>
                    <input name="nome" type="text" class="form-control" id="InputNameProduct" aria-describedby="namelHelp">
                    
                  </div>
                  <div class="mb-3">
                    <label for="InputPrezzo" class="form-label">Prezzo</label>
                    <input name="prezzo" type="text" class="form-control" id="InputPrezzo" aria-describedby="prezzoHelp">
                    
                  </div>
                  <div class="mb-3">
                    <label for="InputDescriction" class="form-label">Descrizione</label>
                    <textarea name="descrizione" class="form-control" id="InputDescription" cols="30" rows="10"></textarea>
                    
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary">Invia</button>
                </form>
              </div>
          </div>
      </div>
                
              </x-layout>