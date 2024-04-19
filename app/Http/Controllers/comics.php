<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecomicRequest;
use App\Models\comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\New_;

class comics extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $comic = comic::all();

        

        return view('comics/index' ,compact('comic') ); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // sezione che si occupa della parte in cui verra creato un elemento

        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecomicRequest $request)
    {
        // serve per memorizzare una risorsa nel nostro database e lo facciamo tramite una specie di inserimento come abbiamo fatto nei seeder
        
        // inizio validazione (serve principalemente per eseguire più controlli sui dati inseriti dall'utente)
        //questa funzione è privata ed è definita sul fondo del foglio , la richiamiamo con this e serve per eseguire tutti i controlli
        $this->validation($request->all());


        // fine validazione
        // ci inzializziamo un nuovo elemento
        $newComic = new comic();

        $newComic->title = $request['title'];
        $newComic->description = $request['description'];
        $newComic->thumb = $request['thumb'];
        $newComic->price = $request['price'];
        $newComic->series = $request['series'];
        $newComic->sale_date = $request['sale_date'];
        $newComic->type = $request['type'];
        //abbiamo usato string replace perche ci permette di ottenere gli artisti ed gli scrittori divisi correttamente da una virgola tra ogni nome 1 valore è quello da cercare , secondo è quello con cui lo sostituiamo ed il terzo è il soggetto su cui avverranno le modifiche
        $newComic->artists =str_replace(' ',', ',$request['artists']);
        $newComic->writers = str_replace(' ',', ',$request['writers']);

        $newComic->save();

        return redirect()->route('comics.show',$newComic->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    //funzione a cui noi diamo il nostro model e laravel tramite le sue automazioni ci restituisce il valore che deve far vedere
    //passiamo come parametro un istanza del nostro model
    {
        // route che ci indirizza a comics/show e relativo index che si è preso laravel in automatico tramite il valore che abbiamo inserito come argomento alla funzione show
        return view('comics.show' ,compact('comic') );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    //cosi come nella show noi andiamo a passare il comic come parametro cosi facendo laravel in automaico prende i valori dell'id
    {
        //restituiamo la rotta verso cui verrà reindirizzata la pagina
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorecomicRequest $request, Comic $comic)
    {

        // inizio validazione (serve principalemente per eseguire più controlli sui dati inseriti dall'utente)
        //questa funzione è privata ed è definita sul fondo del foglio , la richiamiamo con this e serve per eseguire tutti i controlli
        $this->validation($request->all());


        // fine validazione
        

        $comic->title = $request['title'];
        $comic->description = $request['description'];
        $comic->thumb = $request['thumb'];
        $comic->price = $request['price'];
        $comic->series = $request['series'];
        $comic->sale_date = $request['sale_date'];
        $comic->type = $request['type'];
        //abbiamo usato string replace perche ci permette di ottenere gli artisti ed gli scrittori divisi correttamente da una virgola tra ogni nome 1 valore è quello da cercare , secondo è quello con cui lo sostituiamo ed il terzo è il soggetto su cui avverranno le modifiche
        $comic->artists =str_replace(' ',', ',$request['artists']);
        $comic->writers = str_replace(' ',', ',$request['writers']);

        $comic->save();

        //STRINGA CHE CI RIDIRIGE ALLA PAGINA SHOW DEL NOSTRO FUMETTO MODIFICATO INSIEME SI SUOI PARAMETRI MODIFICATI
        return redirect()->route('comics.show',$comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {//sopra inseriamo come sempre il come del nostro model e la nostra variabile 


        //questo comando ci serve per cancellare il fumetto
        $comic->delete();

        return redirect()->route('comics.index');
    }

   



}
