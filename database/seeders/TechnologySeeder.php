<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologiesData = [

            [
                "nome" => "framework"
            ],
            [
                "nome" => "linguaggio di programmazione"
            ],
            ["nome" => "linguaggio di markup"]
        ];
        foreach ($technologiesData as $technologyData) {
            $technology = new Technology();
            $technology->nome = $technologyData["nome"];
            $technology->save();
        }
    }
}
