<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\User;
use App\Models\Magasin;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::with('user')->with('magasin')->get();
        // return $commandes;
        $magasins = Magasin::all();
        $users = User::all();
        // return $users;
        return view('Dashboard.commandes.index', compact('commandes', 'magasins', 'users'));
    }

    public function create()
    {
        $magasins = Magasin::all();
        $users = User::all();

        return view('commandes.create', compact('magasins', 'users'));
    }

    public function store(Request $request)
    {
        $commande = Commande::create($request->all());

        return redirect()->route('commandes.index')->with('success', 'Commande créée avec succès.');
    }

    public function edit(Commande $commande)
    {
        $magasins = Magasin::all();
        $users = User::all();


        return view('commandes.edit', compact('commande', 'magasins', 'users'));
    }

    public function update(Request $request, Commande $commande)
    {
        $commande->update($request->all());

        return redirect()->route('commandes.index')->with('success', 'Commande mise à jour avec succès.');
    }

    public function destroy(Commande $commande)
    {
        $commande->delete();

        return redirect()->route('commandes.index')->with('success', 'Commande supprimée avec succès.');
    }
}
