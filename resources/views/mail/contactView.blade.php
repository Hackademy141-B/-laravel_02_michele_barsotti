<x-layout>
    
<x-slot name="dynamicTitle">Contattaci</x-slot>
<x-navbar/>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 rounded-5 shadow mt-3">

<form method="post" action="{{route('sendMail')}}" class="p-3">
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Nome e Cognome</label>
      <input type="text" class="form-control" id="exampleInputName" aria-describedby="namelHelp">
      
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
       
      </div>
      <div class="mb-3">
        <label for="exampleInputMessage" class="form-label">Message</label>
        <textarea class="form-control" id="exampleInputMessage" cols="30" rows="10"></textarea>
       
      </div>
 

    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
</div>
</div>
</div>

</x-layout>