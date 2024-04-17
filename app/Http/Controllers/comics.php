<?php

namespace App\Http\Controllers;
use App\Models\comic;
use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        // serve per memorizzare una risorsa nel nostro database e lo facciamo tramite una specie di inserimento come abbiamo fatto nei seeder
        
        
        // ci inzializziamo un nuovo elemento
        $newComic = new comic();

        $newComic->title = $request['title'];
        $newComic->description = $request['description'];
        $newComic->thumb = $request['thumb'];
        $newComic->price = $request['price'];
        $newComic->series = $request['series'];
        $newComic->sale_date = $request['sale_date'];
        $newComic->type = $request['type'];
        $newComic->artists = implode(", ",explode(' ',$request['artists']) );
        $newComic->writers = implode(", ",explode(' ', $request['writers']));

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
    public function update(Request $request, Comic $comic)
    {
        

        $comic->title = $request['title'];
        $comic->description = $request['description'];
        $comic->thumb = $request['thumb'];
        $comic->price = $request['price'];
        $comic->series = $request['series'];
        $comic->sale_date = $request['sale_date'];
        $comic->type = $request['type'];
        $comic->artists = implode(", ",explode(' ',$request['artists']) );
        $comic->writers = implode(", ",explode(' ', $request['writers']));

        $comic->save();

        //STRINGA CHE CI RIDIRIGE ALLA PAGINA SHOW DEL NOSTRO FUMETTO MODIFICATO INSIEME SI SUOI PARAMETRI MODIFICATI
        return redirect()->route('comics.show',$comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
