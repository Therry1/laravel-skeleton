<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleAsPermission;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = [
            [
                'name' =>  'BOGANGWACK KENGNE',
                'user_name' =>  'therry',
                'phone' =>  692502488,
                'email' =>  'therrynganga5@gmail.com',
                'password' => Hash::make('choisis la vie') ,
            ]
        ];

        $roles = [
            ['role_label' => 'SUPER ADMINISTRATEUR' , 'role_code' => 'SUP_ADMIN', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'COMPTABLE' , 'role_code' => 'SUB_SUP_ADMIN', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'ADMINISTRATEUR' , 'role_code' => 'ADMIN', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'SUB ADMINISTRATEUR' , 'role_code' => 'SUB_ADMIN', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'UTILISATEUR' , 'role_code' => 'USER', 'role_category' => 'systeme' , 'state' => 1],
            ['role_label' => 'ENSEIGNANT' , 'role_code' => 'ENS', 'role_category' => 'proffessionnel' , 'state' => 1],
        ];

        Role::insert($roles);

        $permissions = [
            ['permission_label' => 'créer un utilisateur' , 'permission_code' => 'user.view.create', 'state' => 1],
            ['permission_label' => 'enregistrer un utilisateur' , 'permission_code' => 'user.store' , 'state' => 1],
            ['permission_label' => 'demarer une nouvelle année' , 'permission_code' => 'year.create', 'state' => 1],
            ['permission_label' => 'demarer une vague de formation' , 'permission_code' => 'formation.round.create','state' => 1],
        ];

        $user_role = [
            ['user_id' => 1, 'role_id' => 1 , 'state' => 1]
        ];


        User::insert($user);
        Permission::insert($permissions);
        UserRole::insert($user_role);
    }
}
