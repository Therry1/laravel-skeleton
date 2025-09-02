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
            ['role_label' => 'SUPER ADMINISTRATEUR' , 'role_code' => 'SUP_ADMIN', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'SUB SUPER ADMINISTRATEUR' , 'role_code' => 'SUB_SUP_ADMIN', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'ADMINISTRATEUR' , 'role_code' => 'ADMIN', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'SUB ADMINISTRATEUR' , 'role_code' => 'SUB_ADMIN', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'UTILISATEUR' , 'role_code' => 'USER', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'ENSEIGNANT' , 'role_code' => 'ENS', 'role_category' => 'proffessionnel' , 'state' => 1],
        ];

        Role::insert($roles);
    }
}
