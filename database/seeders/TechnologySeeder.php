<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['Laraverl', 'Vue', 'Php', 'Xamp', 'Git'];
        foreach ($technologies as $tech) {

            $technology = new Technology();
            $technology->name = $tech;
            $technology->save();
        }
    }
}
