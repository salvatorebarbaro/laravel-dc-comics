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
            <!-- abbiamo inserito @error('title')is invalid @enderror per gestire l'errore al di sotto del nostro campo del titolo e cosi sara anche negli altri campi -->
            <input type="text" class="form-control @error('title')is-invalid @enderror"   id="name" name="title" value="{{$comic->title}}">

            <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
        @error('title')
        <!-- direttiva error di blade -->
        <div class="alert alert-danger ">
            {{$message}}
            <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
        </div>

        @enderror
        <!-- fine -->

        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label text-uppercase">descriozione del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <textarea type="text" class="form-control @error('description')is-invalid @enderror" id="description" name="description"  >{{$comic->description}}</textarea>

            <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
            @error('description')
            <!-- direttiva error di blade -->
            <div class="alert alert-danger ">
                {{$message}}
                <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
            </div>
    
            @enderror
            <!-- fine -->

        </div>


        <div class="mb-3">
            <label for="thumb" class="form-label text-uppercase ">link dell immagine del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="url" class="form-control @error('thumb')is-invalid @enderror" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>

        <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
        @error('thumb')
        <!-- direttiva error di blade -->
        <div class="alert alert-danger ">
            {{$message}}
            <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
        </div>

        @enderror
        <!-- fine -->

        <div class="mb-3">
            <label for="price" class="form-label text-uppercase ">prezzo del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control @error('price')is-invalid @enderror"  id="price" name="price" value="number" value="{{$comic->price}}">

            <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
            @error('price')
            <!-- direttiva error di blade -->
            <div class="alert alert-danger ">
                {{$message}}
                <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
            </div>
    
            @enderror
            <!-- fine -->

        </div>


        <div class="mb-3">
            <label for="series" class="form-label text-uppercase">serie del fumetto</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control @error('series')is-invalid @enderror" id="series" name="series" value="{{$comic->series}}">

            <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
            @error('series')
            <!-- direttiva error di blade -->
            <div class="alert alert-danger ">
                {{$message}}
                <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
            </div>
    
            @enderror
            <!-- fine -->

        </div>


        <!--  -->
        <div class="mb-3">
            <label for="sale_date" class="form-label text-uppercase">data di vendità</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="date" class="form-control @error('sale_date')is-invalid @enderror" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">

            <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
            @error('sale_date')
            <!-- direttiva error di blade -->
            <div class="alert alert-danger ">
                {{$message}}
                <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
            </div>
    
            @enderror
            <!-- fine -->

        </div>


        <div class="mb-3">
            <label for="type" class="form-label text-uppercase">tipo</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control @error('type')is-invalid @enderror" id="type" name="type" value="{{$comic->type}}">

            <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
            @error('type')
            <!-- direttiva error di blade -->
            <div class="alert alert-danger ">
                {{$message}}
                <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
            </div>
    
            @enderror
            <!-- fine -->

        </div>


        <div class="mb-3">
            <label for="artists" class="form-label text-uppercase">artisti</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="text" class="form-control @error('artists')is-invalid @enderror" id="artists" name="artists" value="{{$comic->artists}}">

            <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
            @error('artists')
            <!-- direttiva error di blade -->
            <div class="alert alert-danger ">
                {{$message}}
                <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
            </div>
    
            @enderror
            <!-- fine -->

        </div>


        <div class="mb-3">
            <label for="writers" class="form-label text-uppercase">scrittori</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome e per essere più precisi ci permette di modificarlo poi inseriamo value per avere il valore "salvato  Questo consente di mostrare i valori esistenti del fumetto nel formulario di modifica, consentendo all'utente di visualizzarli e modificarli se necessario." -->
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{$comic->writers}}">

            <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
            @error('writers')
            <!-- direttiva error di blade -->
            <div class="alert alert-danger ">
                {{$message}}
                <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
            </div>
    
            @enderror
            <!-- fine -->
            
        </div>



        <!-- inizio campo di validazione -->
        <!-- inserito per gestire la visualizzazione degli errori in pagina -->
        <!-- @if($errors->any())
        <div class="alert alert-danger ">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>

                @endforeach
            </ul>
        </div>

        @endif -->

        <!-- fine campo di validazione -->
        
        <div class="row justify-content-center ">
            <div class="col-auto">
                <button type="submit" value="invia" class="btn btn-primary text-uppercase my-5 fs-4">inserisci le modifiche</button>
            </div>
        </div>
        
</form>
</div>






@endsection