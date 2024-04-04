<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center bg-info">
            <div class="col-12 col-md-4">
                <h1 class="text-center">
                    Crea nuovo negozio
                </h1>
            </div>
        </div>
    </div>

    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 shadow p-5">
                <form method="post" action="{{route('storeStore')}}" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nome negozio:</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" aria-describedby="nameHelp" value={{old('name')}}>
                        @error('name')
                            <div class="p-0 small fst-italic text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputDescription" class="form-label">Descrizione prodotto:</label>
                        
                        <textarea name="description" id="inputDescription" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                        @error('description')
                            <div class="p-0 small fst-italic text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputImage" class="form-label">Immagine:</label>
                        <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" id="inputImage" aria-describedby="imageHelp">
                        @error('img')
                            <div class="p-0 small fst-italic text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Crea negozio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
    