<?php

namespace Database\Seeders;

use App\Models\comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //associazione dell'array salvato in comics all' interno di config di nome comics
        $comics = config('comics');
        


        //popoliamo il nostro db
        foreach($comics as $comic){

            $newComic = new Comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];

            //comando usato per dividere gli artisti con una virgola
            $newComic->artists = implode(", ", $comic['artists']);
            $newComic->writers = implode(", ", $comic['writers']);


            $newComic->save();

            // dd($comic);



        }

        dd($comics);
    }
}
