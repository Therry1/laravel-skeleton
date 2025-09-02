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
            ],
            [
                'name'      =>  'ZEBEDE ORIGA',
                'user_name' =>  'zebede',
                'phone'     =>  699338899,
                'email'     =>  'zebede@gmail.com',
                'password'  => Hash::make('password') ,
            ]
        ];

        $permissions = [
            ['permission_label' => 'créer un utilisateur', 'permission_code' => 'user.create', 'state' => 1],
            ['permission_label' => 'créer une nouvelle année', 'permission_code' => 'year.create', 'state' => 1],
            ['permission_label' => 'créer une vague de formation', 'permission_code' => 'round.create', 'state' => 1],
            //['permission_label' => 'créer une nouvelle année', 'permission_code' => 'year.create', 'state' => 1],
            //['permission_label' => 'créer un utilisateur', 'permission_code' => 'user.create', 'state' => 1],
            //['permission_label' => 'créer une nouvelle année', 'permission_code' => 'year.create', 'state' => 1],
        ];

        $user_role = [
            ['user_id' => 1, 'role_id' => 1 , 'state' => 1],
            ['user_id' => 2, 'role_id' => 2 , 'state' => 1],
        ];

        $role_permission = [
            ['role_id' => 1, 'permission_id' => 1 , 'state' => 1],
            ['role_id' => 1, 'permission_id' => 2 , 'state' => 1],
            ['role_id' => 1, 'permission_id' => 3 , 'state' => 1],

            ['role_id' => 4 , 'permission_id' => 2 , 'state' => 1],
        ];

        User::insert($user);
        Permission::insert($permissions);
        UserRole::insert($user_role);
        RoleAsPermission::insert($role_permission);
    }
}
