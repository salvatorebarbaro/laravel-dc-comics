<!-- estendiamo il nostro layout app per avere l'intelayatura iniziale -->
@extends ('layouts/app')

@section('content')

<div class="container  my-4">
    <h1 class="text-uppercase text-primary text-center">lista fumetti nel databse</h1>
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
      <td ><a href="" id="link" class=" text-uppercase">visualizza</a></td>
    </tr>  
    @endforeach
   
  </tbody>
</table>
</div>
<!-- comando usato per vedere cosa stampo in pagina -->
<!-- @dump($comic) -->



@endsection