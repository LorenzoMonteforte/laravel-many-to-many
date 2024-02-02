<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "title" => "Tipo 1",
                "description" => "Descrizione di tipo 1"
            ],
            [
                "title" => "Tipo 2",
                "description" => "Descrizione di tipo 2"
            ],
            [
                "title" => "Tipo 3",
                "description" => "Descrizione di tipo 3"
            ]
        ];

        for($i=0; $i<sizeof($data); $i++){
            $new_type = new Type();
            $new_type->title = $data[$i]["title"];
            $new_type->description = $data[$i]["description"];
            $new_type->save();
        }
    }
}
