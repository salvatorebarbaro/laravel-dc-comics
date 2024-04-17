<!-- estendiamo il nostro layout app per avere l'intelayatura iniziale -->
@extends ('layouts/app')

@section('content')

<div class="container  my-4">
    <h1 class="text-uppercase text-primary text-center">lista fumetti nel database</h1>
      <table class="table my-5 ">
        <thead>
          <tr>
            <th scope="col" class=" text-uppercase fs-3">nome</th>
            <th scope="col" class=" text-uppercase fs-3">artisti</th>
          </tr>
        </thead>
        <tbody>
          @foreach($comic as $fumetto)
          <tr class=""> 
            <td class="align-middle">{{$fumetto->title}}</td>
            <td class="col-4 ">{{$fumetto->artists}}</td>
            <!-- in questa riga di codice gestiamo la rotta in modo dinamico passandogli la rotta con all'interno l'id del nostro fumetto -->
            <td class="align-middle"><a href="{{ route('comics.show',$fumetto->id) }}" id="link" class="btn btn-dark text-uppercase">visualizza</a></td>
          </tr>  
          @endforeach
        </tbody>
    </table>
    <div class=" row justify-content-center ">
      <!-- col auto praticamente dice al bottone di occupare solo spazio di cui ha bisogno  e do la route al bottone per poter creare il mio nuovo elemento-->
      <div class="col-auto">
        <a href="{{route('comics.create')}}"  class="btn btn-primary text-uppercase ">aggiungi un fumetto</a>
      </div>
      
    </div>
    
</div>
<!-- comando usato per vedere cosa stampo in pagina -->
<!-- @dump($comic) -->



@endsection