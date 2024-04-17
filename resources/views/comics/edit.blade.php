<!-- estendiamo il nostro layout app per avere l'intelayatura iniziale -->
@extends ('layouts/app')

@section('content')
<div class="container d-flex flex-column">
    <h1 class="text-uppercase text-warning  text-center my-5">modifica il fumetto desiderato</h1>
    <!-- passiamo l'id che ci serve per sapere quale elemento modificare -->
    <form action="{{route('comics.update', $comic->id)  }}" method="POST">
    <!-- è un token che genera Laravel per assicurarsi che la chiamata post avvenga tramite un form del nostro sito.
Dobbiamo inserirlo in ogni form. -->
    @csrf
    <!-- DIRETTIVA INSERITà PER MAPPARE CORRETTAMENTE IL METHOD -->
    @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label text-uppercase">Nome del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control" id="name" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-uppercase">descriozione del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <textarea type="text" class="form-control" id="description" name="description" value="{{$comic->description}}" ></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label text-uppercase ">link dell immagine del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label text-uppercase ">prezzo del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control"  id="price" name="price" value="number" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label text-uppercase">serie del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <!--  -->
        <div class="mb-3">
            <label for="sale_date" class="form-label text-uppercase">data di vendità</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label text-uppercase">tipo</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label text-uppercase">artisti</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control" id="artists" name="artists" value="{{$comic->artists}}">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label text-uppercase">serie del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers}}">
        </div>
        
        <div class="row justify-content-center ">
            <div class="col-auto">
                <button type="submit" value="invia" class="btn btn-primary text-uppercase my-5 fs-4">inserisci le modifiche</button>
            </div>
        </div>
        
</form>
</div>






@endsection