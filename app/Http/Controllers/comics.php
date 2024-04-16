<?php

namespace App\Http\Controllers;
use App\Models\comic;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    //funzione a cui noi diamo il nostro model e laravel tramite le sue automazioni ci restituisce il valore che deve far vedere
    //passiamo come parametro un istanza del nostro model
    {
        // route che ci indirizza a comics/show e relatico index che si è preso laravel in automatico tramite il valore che abbiamo inserito come argomento alla funzione show
        return view('comics.show' ,compact('comic') );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
