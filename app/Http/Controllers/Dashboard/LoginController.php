<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserVerify;
use Mail;
use Illuminate\Support\Str;

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
            $s=auth('admin')->user()->status;
            if($s != 1){
                return redirect()->back()->with('error',"Vous êtes bloqué par l'admin ");
            }
            // if(Auth::check()){
                return redirect()->route($user.'.dashboard');
            //     }
            //     else{
                // return redirect()->back()->withError('Opps! You must confirm your email');
                // }

        }
        return redirect()->back()->with('error',' Error !! ');

    }

    public function logout(){
        Auth::logout();
        return view('Dashboard.auth.login');
    }



    public function postRegister(Request $request)
    {
        // return $request;
        // Valider les données du formulaire d'inscription
        $validatedData = $request->validate([
            'name' => 'required|string',
            'id_commune' => 'required',
            'num_tel' => 'required|string',
            'type_user' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        //  return 1;
        // Créer un nouvel utilisateur
        $user = new User();
        $user->name = $validatedData['name'];
        $user->algeria_city_id = $validatedData['id_commune'];
        $user->num_tel = $validatedData['num_tel'];
        $user->profil = $validatedData['type_user'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();


        $token = Str::random(64);
        UserVerify::create([
            'user_id' => $user->id,
            'token' => $token
            ]);
            // \Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request) {
            //     $message->to($request->email);
            //     $message->from('sender@example.com', 'Sender Name'); // Replace with your sender address
            //     $message->subject('Email Verification Mail');
            // });

            // return $user;
        // Rediriger vers la page de connexion avec un message de succès
        return redirect()->route('/login')->with('success', 'Inscription réussie ! Veuillez vous connecter.');
    }

    public function verifyAccount($token)
{
$verifyUser = UserVerify::where('token', $token)->first();
$message = 'Sorry your email cannot be identified.';
if(!is_null($verifyUser) ){
$user = $verifyUser->user;
if(!$user->is_email_verified) {
$verifyUser->user->is_email_verified = 1;
$verifyUser->user->save();
$message = "Your e-mail is verified. You can now login.";
} else {
$message = "Your e-mail is already verified. You can now login.";
}
}
return redirect()->route('login')->with('message', $message);
}

}
