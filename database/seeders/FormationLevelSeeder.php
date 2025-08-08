<?php

namespace Database\Seeders;

use App\Models\FormationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            ['level_label'=>'Niveau 1', 'state'=>1],
            ['level_label'=>'Niveau 2', 'state'=>1],
            ['level_label'=>'Niveau 3', 'state'=>1],
        ];

        FormationLevel::insert($levels);
    }
}
