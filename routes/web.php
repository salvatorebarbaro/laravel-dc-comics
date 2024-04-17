<?php

use Illuminate\Support\Facades\Route;
//ci importiamo il controller
use App\Http\Controllers\comics;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// App\Http\Controllers\
//usiamo questa rotta perchè essendoci standardizzate le funzioni possiamo far fare tutto il lavoro di riportare le rotte a laravel (In breve, questo blocco di codice serve a definire le route per la gestione delle operazioni CRUD sui comics, utilizzando il controller comics all'interno di un'applicazione Laravel. Utilizzando Route::resources(), possiamo standardizzare la definizione delle route e lasciare a Laravel il compito di generare le route appropriate per le operazioni CRUD.)
Route::resources([
    '/comics'=> comics::class
]);

Route::get('/',function(){
    return view('home');
});