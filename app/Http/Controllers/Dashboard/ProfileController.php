<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileAdmin;
use App\Models\Admin;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function editProfile (){
        // return 1;
    $user=Auth::user();
    return view('Dashboard.settings.profile.editProfile', compact('user'));
    }
    public function updateProfile(EditProfileAdmin $request){
        try {
            $admin = User::find(Auth::user()->id);
            $admin->nom = $request->name;
            $admin->email = $request->email;

            if ($request->hasFile('image')) {
                $fileName = time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/avatars/'), $fileName);
                $admin->avatar = $fileName;
            }

            $admin->save();

            return redirect()->back()->with(['success' => 'Mise à jour avec succès']);
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => 'Erreur !!']);
        }
    }

}
