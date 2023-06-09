<?php

namespace App\Http\Controllers;

use App\Models\Magasin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MagasinController extends Controller
{
    public function index()
    {
        $magasins = Magasin::all();

        return view('Dashboard.magasins.index', compact('magasins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $magasin = new Magasin;
        $magasin->nom = $request->nom;

        if ($request->hasFile('logo')) {
            $fileName = time().'.'.$request->logo->extension();

            $request->logo->move(public_path('uploads/magasins/'), $fileName);

            $magasin->logo = $fileName;

        }

        $magasin->save();

        return redirect()->back()->with('success', 'Magasin ajouté avec succès.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $magasin = Magasin::findOrFail($id);
        $magasin->nom = $request->nom;

        if ($request->hasFile('logo')) {
            $fileName = time().'.'.$request->logo->extension();

            $request->logo->move(public_path('uploads/magasins/'), $fileName);

            $magasin->logo = $fileName;


        }

        $magasin->save();

        return redirect()->back()->with('success', 'Magasin modifié avec succès.');
    }

    public function destroy($id)
    {
        $magasin = Magasin::findOrFail($id);

        // Supprimer le logo s'il existe
        if ($magasin->logo) {
            Storage::disk('public')->delete($magasin->logo);
        }

        $magasin->delete();

        return redirect()->back()->with('success', 'Magasin supprimé avec succès.');
    }
}
