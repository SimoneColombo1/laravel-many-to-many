<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{

    public function run(): void
    {
        $typesname = [

            "Html/css",
            "JS",
            "PHP",
            "Vue",
            "Laravel",



        ];

        foreach ($typesname as $typename) {
            $type = new Type();
            $type->name = $typename;
            $type->save();
        };
    }
}
