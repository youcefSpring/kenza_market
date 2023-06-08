<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\Product;
use App\Models\Provider;
use Exception;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
        public function index()
        {
          $items=Delivery::with('product')->with('provider')->get();
        //   return $items;
          return view('Stock.Deliveries.index',compact('items'));
        }


        public function create(){
            $products=Product::get(['id','designation']);
            $providers=Provider::get(['id','nom','prenom']);
            return view('Stock.Deliveries.create',compact('products','providers'));
        }


        public function store (Request $r){
            // $r->validate([
            //     'date_livraison'=>
            // ]);
            try{
            $p=new Delivery();
            $p->product_id=$r->product_id;
            $p->provider_id=$r->provider_id;
            $p->date_livraison=$r->date_livraison;
            $p->qte=$r->qte;
            Product::where('id',$r->product_id)->increment('qte',$r->qte);
            $p->save();
            return redirect()->route('stock.DeliveryList')->with('success','Ajouté avec suucès');
            }
            catch(Exception $e){
                return redirect()->back()->with('error','Error');
            }

        }

        public function delete($id){
            try{
            Delivery::where('id',$id)->delete();
            return redirect()->back()->with('success','Supprimé avec suucès');
            }
            catch(Exception $e){
                return redirect()->back()->with('error','Error');
            }
        }
}
