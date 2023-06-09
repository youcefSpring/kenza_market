<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use App\Models\Magasin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProduitController extends Controller
{
    public function index()
    {
        // return 1;
        $produits = Produit::all();
        $magasins=Magasin::all();
        $users = User::all();
        // return $produits;
        return view('Dashboard.produits.index', compact('produits','magasins','users'));
    }

    public function create()
    {
        $magasins = Magasin::all();
        return view('produits.create', compact('magasins'));
    }

    public function store(Request $request)
    {
        $produit = Produit::create($request->all());
        if($request->hasFile('image')){

            $fileName = time().'.'.$request->image->extension();

            $request->image->move(public_path('uploads/produits/'), $fileName);

            $produit->image = $fileName;

            $produit->save();
        }

        return redirect()->route('produits.index')->with('success', 'Produit créé avec succès.');
    }

    public function edit(Produit $produit)
    {
        $magasins = Magasin::all();
        return view('produits.edit', compact('produit', 'magasins'));
    }

    public function update(Request $request, Produit $produit)
    {
        $produit->update($request->all());
        if($request->hasFile('image')){
            File::delete(public_path('uploads/produits/').$produit->image);
            $fileName = time().'.'.$request->image->extension();

            $request->image->move(public_path('uploads/produits/'), $fileName);

            $produit->image = $fileName;

            $produit->save();
        }
        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
    }
}
