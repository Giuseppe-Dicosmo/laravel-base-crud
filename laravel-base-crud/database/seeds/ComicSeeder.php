<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comic');

        foreach($comics as $dc) {

            $comic = new Comic();

            $comic->title = $dc['title'];
            $comic->description = $dc['description'];
            $comic->thumb = $dc['thumb'];
            $comic->price = $dc['price'];
            $comic->series = $dc['series'];
            $comic->sale_date = $dc['sale_date'];
            $comic->type = $dc['type'];

            $comic->save();
        }
    }
}
