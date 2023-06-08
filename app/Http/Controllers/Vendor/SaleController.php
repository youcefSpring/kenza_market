<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\DetailSale;
use App\Models\Product;
use App\Models\Sale;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SaleController extends Controller
{
    public function index(){
        $items=Sale::with('detail')->get();

        $items->each(function($it){
        $it->detail->each(function($i){
              $p=Product::where('id',$i->product_id)->first();
              $i=Arr::add($i,'designation',$p->designation);
              $i=Arr::add($i,'prix_vente',$p->prix_vente);

        });
       });

        // return $items;
        return view('Vendor.sales.index',compact('items'));
    }

    public function delete($id){

        DetailSale::where('sale_id',$id)->delete();
        Sale::where('id',$id)->delete();
        return redirect()->back()->with('error','Supprimé avec suucès');
    }

    public function create(){
       $products=Product::where('qte','>',0)->get(['id','designation']);
    //    return $products;
        return view('Vendor.sales.create',compact('products'));
    }

    public function store(Request $request){
        $sale=new Sale();
        $somme=0;
        foreach ($request->moreFields as $key => $value) {
            $s=new DetailSale();
            $s->product_id=$value['product_id'];
            // $s->sale_id=$sale->id;
            $s->sale_id=1;
            $s->qte=$value['qte'];
            $s->price=Product::where('id',$value['product_id'])->first()->prix_vente;
            $somme+=$s->price;
            $s->save();
        }

          $date = new DateTime();

        $sale->total=$somme;
        $sale->date_vente=$date->format('Y-m-d');
        $sale->save();
        return redirect()->route('vendor.SaleList')->with('succès','Ajouté avec suucès');


    }
}
