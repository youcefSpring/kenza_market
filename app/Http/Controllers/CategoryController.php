<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());

        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/categories/'), $fileName);
            $category->image = $fileName;
            $category->save();
        }

        return redirect()->route('categories.index')->with('success', 'Catégorie créée avec succès.');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        if ($request->hasFile('image')) {
            File::delete(public_path('uploads/categories/').$category->image);
            $fileName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/categories/'), $fileName);
            $category->image = $fileName;
            $category->save();
        }

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
    }

    public function destroy(Category $category)
    {
        File::delete(public_path('uploads/categories/').$category->image);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }

    public function show($id){
        $magasin = Category::where('id', $id)->with('produits')->first();
    //  return $magasin;
     return view('front.detail_category',compact('magasin'));
    }

}
