<?php

namespace Database\Seeders;

use App\Models\Beer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_beers = file_get_contents('https://api.sampleapis.com/beers/ale');
        $array_beers = json_decode($array_beers);

        foreach ($array_beers as $beer){
            $new_beer = new Beer();
            $new_beer->name = $beer->name;
            $new_beer->slug = Beer::generateSlug($new_beer->name);
            $new_beer->price = (float)str_replace('$', '', $beer->price);
            $new_beer->rating = $beer->rating->average;
            $new_beer->image = $beer->image;
            $new_beer->save();
        }
    }
}
