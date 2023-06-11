<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Dashboard.auth.login');
    }

    public function postLogin(AdminLoginRequest $request){
        //validation avec AdminLoginRequest

        $remember_me = $request->has('remember_me')? true : false;

        $email=$request->input("email");
        $pwd=$request->input("password");
        $user=$request->user;
        $user="admin";

        if (auth()->guard($user)->attempt(['email' => $email, 'password' => $pwd],$remember_me))
         {

            return redirect()->route($user.'.dashboard');
        }
        return redirect()->back()->with('error',' Error !! ');

    }

    public function logout(){
        Auth::logout();
        return view('Dashboard.auth.login');
    }



    public function postRegister(Request $request)
    {
        // Valider les données du formulaire d'inscription
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'id_commune' => 'required',
            'num_tel' => 'required|string',
            'type_user' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Créer un nouvel utilisateur
        $user = new User();
        $user->nom = $validatedData['nom'];
        $user->id_commune = $validatedData['id_commune'];
        $user->num_tel = $validatedData['num_tel'];
        $user->type_user = $validatedData['type_user'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Rediriger vers la page de connexion avec un message de succès
        return redirect()->url('')->with('success', 'Inscription réussie ! Veuillez vous connecter.');
    }

}
