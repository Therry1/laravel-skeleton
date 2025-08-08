<?php

namespace Database\Seeders;

use App\Models\FormationMonth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationMonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $months = [
            ['month_label'=>'Octobre' , 'month_number'=>10 , 'state'=>1],
            ['month_label'=>'Novembre' , 'month_number'=>11 , 'state'=>1],
            ['month_label'=>'Décembre' , 'month_number'=>12 , 'state'=>1],
            ['month_label'=>'Janvier' , 'month_number'=>1 , 'state'=>1],
            ['month_label'=>'Fevrier' , 'month_number'=>2 , 'state'=>1],
            ['month_label'=>'Mars' , 'month_number'=>3 , 'state'=>1],
            ['month_label'=>'Avril' , 'month_number'=>4 , 'state'=>1],
            ['month_label'=>'Mai' , 'month_number'=>5 , 'state'=>1],
            ['month_label'=>'Juin' , 'month_number'=>6 , 'state'=>1],
            ['month_label'=>'Juillet' , 'month_number'=>7 , 'state'=>1],
        ];

        FormationMonth::insert($months);
    }
}
