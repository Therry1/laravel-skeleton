<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role_label'=>'super administrateur', 'role_code'=>'SUPADMIN', 'state'=>1],
            ['role_label'=>'administrateur', 'role_code'=>'ADMIN', 'state'=>1],
            ['role_label'=>'autre utilisateur', 'role_code'=>'OTHER', 'state'=>1],
        ];

        Role::insert($roles);
    }
}
