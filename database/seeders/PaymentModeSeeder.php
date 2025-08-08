<?php

namespace Database\Seeders;

use App\Models\PaymentMode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modes = [
            ['mean_payment_name'=> 'Orange Money', 'code'=>'OM', 'state'=>1],
            ['mean_payment_name'=> 'Mobile Money', 'code'=>'MOMO', 'state'=>1]
        ];

        PaymentMode::insert($modes);
    }
}
