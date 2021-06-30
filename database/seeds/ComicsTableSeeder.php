<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsList = config("comics");

        foreach ($comicsList as $comics){
            $newEntry = new Comic();
            $newEntry->title = $comics["title"];
            $newEntry->description = $comics["description"];
            $newEntry->thumb = $comics["thumb"];
            $newEntry->price = $comics["price"];
            $newEntry->series = $comics["series"];
            $newEntry->sale_date = $comics["sale_date"];
            $newEntry->type = $comics["type"];


            $newEntry ->save();
        }
    }
}
