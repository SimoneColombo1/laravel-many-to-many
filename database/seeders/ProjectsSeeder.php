<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\projects;
use App\Models\Type;
use Faker\Generator as Faker;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $types = Type::all()->pluck("id");
        for ($i = 0; $i < 100; $i++) {
            $projects = new projects();
            $projects->type_id = $faker->randomElement($types);
            $projects->nome = $faker->words(1, true);
            $projects->descrizione = $faker->sentence(10, true);
            $projects->data_inizio = $faker->date();
            $projects->data_fine = $faker->date();
            $projects->completato = $faker->boolean();
            $projects->save();
        }
    }
}
