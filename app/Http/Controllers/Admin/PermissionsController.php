<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function viewPermissionDashBord(){
        $users = User::all();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('administration.gestion_d_acces.home_permissions', 
            compact (
                'users','roles','permissions'
            )
        );
    }
}
