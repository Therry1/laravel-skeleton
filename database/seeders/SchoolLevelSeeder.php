<?php

namespace Database\Seeders;

use App\Models\SchoolLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            ['level_label'=>'Licence 1','level_number'=>1,'state'=>1],
            ['level_label'=>'Licence 2','level_number'=>2,'state'=>1],
            ['level_label'=>'Licence 3','level_number'=>3,'state'=>1],
            ['level_label'=>'Master 1','level_number'=>4,'state'=>1],
            ['level_label'=>'Master 2','level_number'=>5,'state'=>1],
            ['level_label'=>'Thèse','level_number'=>6,'state'=>1],
        ];

        SchoolLevel::insert($levels);
    }
}
