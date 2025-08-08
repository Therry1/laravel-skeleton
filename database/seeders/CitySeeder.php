<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities  = [
            ['city_name'=>'Garoua', 'state'=>1],
            ['city_name'=>'Ngaoundéré', 'state'=>1],
        ];

        City::insert($cities);
    }
}
