<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\boolfolio;
class BoolfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newproject = new boolfolio();
        $newproject->autore = "Luciano";
        $newproject->nome = "Boolfolio";
        $newproject->descrizione = "Boolfolio is a simple portfolio website for developers and designers";
        $newproject->inizio = "2024-07-09";
        $newproject->fine ="2024-07-11";
        $newproject->save();
    }
}
