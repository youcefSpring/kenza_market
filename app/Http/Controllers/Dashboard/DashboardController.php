<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use App\Models\Provider;
use App\Models\StoreManager;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Models\Vendor;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=[
         'nbrV' => 0,
         'nbrP' => Produit::count(),
         'nbrG'=> 0,
         'products'=>0
        ];
        return view('Dashboard.indexAdmin')->with('a',$a);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
