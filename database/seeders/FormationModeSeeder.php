<?php

namespace Database\Seeders;

use App\Models\FormationMode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modes = [
            ['mode_name' => 'En présentielle' , 'state'=> 1],
            ['mode_name' => 'En ligne' , 'state'=> 1]
        ];

        FormationMode::insert($modes);
    }
}
