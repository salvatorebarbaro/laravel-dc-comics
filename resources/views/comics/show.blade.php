<!-- estendiamo il nostro layout app per avere l'intelayatura iniziale -->
@extends ('layouts/app')

@section('content')
<div class="container">
    <h1 class=" text-center  text-uppercase  text-primary my-4">{{$comic->title}}</h1>
    <div class="row justify-content-center my-3"><img class=" img-fluid col-4" src="{{$comic->thumb}}" alt="{{$comic->title}}"> </div>
    <table class="table">
  <thead>
    <tr>
    <!-- <th scope="col"></th> -->
      <th class="text-uppercase fs-4 text-center text-danger " scope="col">titolo</th>
      <th class="text-uppercase fs-4 text-center text-danger " scope="col">descrizione</th>
      <th class="text-uppercase fs-4 text-center text-danger " scope="col">prezzo</th>
      <th class="text-uppercase fs-4 text-center text-danger " scope="col">serie</th>
      <th class="text-uppercase fs-4 text-center text-danger " scope="col">data di vendità</th>
      <th class="text-uppercase fs-4 text-center text-danger " scope="col">tipo</th>
    </tr>
  </thead>
  <tbody>
    <tr class="">
      <!-- <th scope="row"></th> -->
      <td class=" text-center fs-4 text-nowrap">{{$comic->title}}</td>
      <td class=" text-center fs-5">{{$comic->description}}</td>
      <td class=" text-center fs-4">{{$comic->price}}</td>
      <td class=" text-center fs-4">{{$comic->series}}</td>
      <td class=" text-center fs-4 text-nowrap ">{{$comic->sale_date}}</td>
      <td class=" text-center fs-4 text-nowrap">{{$comic->type}}</td>
      
    </tr>
    
    </tr>
  </tbody>
</table>
</div>


<!-- @dump($comic) -->



@endsection