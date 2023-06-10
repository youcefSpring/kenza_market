<?php

namespace App\Http\Controllers;

use App\Models\Fraude;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FraudeController extends Controller
{
    public function index()
    {
        $fraudes = Fraude::all();
        $users = User::all();

        return view('Dashboard.fraudes.index', compact('fraudes', 'users'));
    }

    public function create()
    {
        $users = User::all();
        return view('fraudes.create', compact('users'));
    }

    public function store(Request $request)
    {
        $fraude = Fraude::create($request->all());

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/fraudes/'), $fileName);
            $fraude->image = $fileName;
            $fraude->save();
        }

        return redirect()->route('fraudes.index')->with('success', 'Fraude créée avec succès.');
    }

    public function edit(Fraude $fraude)
    {
        $users = User::all();
        return view('fraudes.edit', compact('fraude', 'users'));
    }

    public function update(Request $request, Fraude $fraude)
    {
        $fraude->update($request->all());

        if ($request->hasFile('image')) {
            File::delete(public_path('uploads/fraudes/') . $fraude->image);

            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/fraudes/'), $fileName);
            $fraude->image = $fileName;
            $fraude->save();
        }

        return redirect()->route('fraudes.index')->with('success', 'Fraude mise à jour avec succès.');
    }

    public function destroy(Fraude $fraude)
    {
        $fraude->delete();
        return redirect()->route('fraudes.index')->with('success', 'Fraude supprimée avec succès.');
    }
}
