<!-- estendiamo il nostro layout app per avere l'intelayatura iniziale -->
@extends ('layouts/app')

@section('content')
<div class="container">
    <h1 class="text-uppercase text-primary text-center my-5">aggiungi un nuovo fumetto</h1>
    <form action="{{route('comics.store') }}" method="POST">
    <!-- è un token che genera Laravel per assicurarsi che la chiamata post avvenga tramite un form del nostro sito.
Dobbiamo inserirlo in ogni form. -->
    @csrf
        
        <div class="mb-3">
            <label for="title" class="form-label text-uppercase">Nome del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <!-- required campo inserito per dire che noi dobbiamo avere per forza questo campo validato -->
            <input type="text" class="form-control" id="name" name="title" value="{{ old ('title' )}}">
            <!-- required -->
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-uppercase">descriozione del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <!-- old description è stato inserito perchè facendo cio i dati inseriti dall'utente anche se sbagliati gli vengono fatti rivedere -->
            <textarea type="text" class="form-control" id="description" name="description" > {{ old ('description' )}}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label text-uppercase ">link dell immagine del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="url" class="form-control" id="thumb" name="thumb"  value="{{ old (' thumb' )}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label text-uppercase ">prezzo del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control"  id="price" name="price" value="number" value="{{ old (' price' )}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label text-uppercase">serie del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control" id="series" name="series" value="{{ old ( 'series' )}}">
        </div>
        <!--  -->
        <div class="mb-3">
            <label for="sale_date" class="form-label text-uppercase">data di vendità</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old (' sale_date' )}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label text-uppercase">tipo</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control" id="type" name="type" value="{{ old (' type' )}}">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label text-uppercase">artisti</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control" id="artists" name="artists" value="{{ old (' artists' )}}">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label text-uppercase">serie del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control" id="writers" name="writers" value="{{ old (' writers' )}}">
        </div>
        
        <!-- inizio campo di validazione -->
        @if($errors->any())
        <div class="alert alert-danger ">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>

                @endforeach
            </ul>
        </div>

        @endif

        <!-- fine campo di validazione -->
        
        <button type="submit" class="btn btn-primary text-uppercase">inserisci</button>
</form>
</div>






@endsection