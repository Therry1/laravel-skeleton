<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function loginView()
    {

        return view('user.login');
    }

    public function registerView()
    {

        return view('user.register');
    }

    public function register (Request $request){

        try {
            $validated = $request->validate([
                'name'      => 'required',
                'user_name' => 'required',
                'email'     => 'required|email|unique:users',
                'tel'       => 'required|min:9|max:9',
                'password'  => 'required|min:8'
            ],[
                'name'      => 'le nom est requis',
                'user_name' => 'le nom d\'utilisateur est requis',
                'email.required'     => 'l\'email est requis',
                'email.email'     => 'l\'entrée n\'est pas un email valide',
                'email.unique'     => 'cet email existe déja dans le système',
                'tel.required'       => 'le numero de téléphone est requis',
                'tel.min'       => 'le numero de telephone doit avoir 9 chiffres',
                'tel.max'       => 'le numero de telephone doit avoir 9 chiffres',
                'password.required'  => 'un mot de passe est requis',
                'password'  => 'le mot de passe doit avoir minimum 8 charactères'
            ]);

//            if ($validated->fails()){
//                return response()->json(['message'=>'error validation','errors'=>$validated->errors(),'status_code'=>400]);
//            }

            $data = $request->all();
            $data = (object)$data;

            $user = User::create([
                'name'      => $data->name,
                'user_name' => $data->user_name,
                'email'     => $data->email,
                'phone'       => $data->tel,
                'password'  => Hash::make($data->password),
                'role_id'   => 1,
            ]);

            Auth::login($user);

            return redirect()->route('system.admin.start');
        }catch (QueryException $exception){
            return redirect()->back()->with(['error'=> 'Une erreur s\' est produite', 'error'=>$exception->getMessage()]);
        }
    }

    public function login (Request $request){

        $validated = $request->validate([
            'user_name' => 'required',
            'email'     => 'required|email',
            'password'  => 'required'
        ],
        [
            'user_name' => 'le nom d\'utilisateur est requis',
            'email.required'     => 'l\'email est requis',
            'email.email'     => 'l\'entrée n\'est pas un email',
            'password'  => 'un mot de passe est requis'
        ]
        );

        $credentials = $request->only('user_name','email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('system.admin.start');
        }

        return redirect()->back()->with(['error'=>'email , login ou mot de passe incorrecte']);
    }

    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');

    }
}
