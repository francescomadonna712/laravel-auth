<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\boolfolio;
use Faker\Generator as Faker;

class BoolfolioSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {


            $newproject = new boolfolio();
            $newproject->nome = $faker->sentence(3);
            $newproject->descrizione = $faker->sentence();
            $newproject->cover_image = $faker->imageUrl(600, 400, 'boolfolios', true, gray: true, format: "jpg");

            $newproject->save();
        }
    }
}
