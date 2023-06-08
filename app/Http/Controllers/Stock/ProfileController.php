<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Models\StoreManager;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
        public function editProfile ()
          {
                $user=Auth::guard('stock')->user();
                return view('Stock.settings.profile.editProfile', compact('user'));
          }

        public function updateProfile(Request $request){

            try
            {
                  $admin=StoreManager::find(Auth::user()->id);
                  $admin->update($request->only(['nom','email']));
                  return redirect()->back()->with(['success'=>'Mise à jour avec succès ']);
            }
            catch(Exception $e)
            {
                 return redirect()->back()->with(['error'=>'  Erreur !! ']);
            }

        }
}
