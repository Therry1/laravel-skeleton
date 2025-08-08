<?php

namespace Database\Seeders;

use App\Models\FormationCity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['city_name'=> 'GAROUA', 'university'=>'univ.Ndéré (DANG)', 'state'=>1],
            ['city_name'=> 'NGAOUNDERE', 'university'=>'univ.Garoua', 'state'=>1]
        ];

        FormationCity::insert($cities);
    }
}
