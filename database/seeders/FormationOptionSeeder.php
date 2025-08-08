<?php

namespace Database\Seeders;

use App\Models\FormationOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            ['option_label'=>'Développement' , 'state'=>1],
            ['option_label'=>'Réseau' , 'state'=>1],
            ['option_label'=>'Bureautique' , 'state'=>1],
        ];

        FormationOption::insert($options);
    }
}
