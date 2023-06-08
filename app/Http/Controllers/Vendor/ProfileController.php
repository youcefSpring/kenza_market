<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\StoreManager;
use App\Models\Vendor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function editProfile (){
        $user=Auth::guard('vendor')->user();
        // return $user;
        return view('Vendor.settings.profile.editProfile', compact('user'));
        }

        public function updateProfile(Request $request){

            // $id= Auth::user()->id;
            // return $id;
            try{
           $admin=Vendor::find(Auth::user()->id);



        //    if($request->password != $request->repassword){
        //     return redirect()->back()->with(['error'=>'   كلمة السر غير متطابقة  ']);
        //    }

        $admin->update($request->only(['nom','email']));

        return redirect()->back()->with(['success'=>'Mise à jour avec succès ']);

            }
            catch(Exception $e){
                return redirect()->back()->with(['error'=>'  Erreur !! ']);
            }

        }
}
