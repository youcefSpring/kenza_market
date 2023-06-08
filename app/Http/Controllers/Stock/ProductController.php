<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
class ProductController extends Controller
{
    public function index(Request $request)
    {

            $items=Product::all();
            //  return $items;
        return view('Stock.Products.index',compact('items'));
    }

    public function store(Request $request)
    {
        //c return $request->except('_token');
        $request->validate([
            // 'matricule' =>'required|unique:employees,matricule',
            'prix_vente'=>'alpha_num|gte:prix_achat'

        ]);
        //  return $request;
        if($request->file('img')) {
            $file = $request->file('img');
            $filename = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'products';

            // Upload file
            $file->move($location,$filename);

           $emp=new Product();
                $emp->designation = $request->designation;
                $emp->type = $request->type;
                $emp->prix_achat = $request->prix_achat;
                $emp->prix_vente = $request->prix_vente;
                $emp->description=$request->description;
                $emp->qte=$request->qte;
                $emp->img = $location.'/'.$filename;
                $emp->date_expiration = $request->date_expiration;
                $emp->save();
        //  Vendor::create($request->except('_token'));

        return redirect()->route('stock.ProductList')
        ->with('success','Produit ajouté avec suucès');
    }

}

    public function create(){
        return view('Stock.Products.create');
    }
    public function edit($id)
    {
        $item = Product::where('id',$id)->first();
        // return $item;
        return view('Stock.Products.edit',compact('item'));
    }

    public function delete($id)
    {
        try{

       Product::where('id',$id)->first()->delete();

       return redirect()->back()->with('success','Supprimé avec succès !');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error','Impossible de le supprimer');
        }
    }

    public function update(Request $request,$id)
    {
        // return $request;
        // $request->validate([
        //     // 'matricule' =>['required','unique:employees,matricule',Rule::unique('employees')->ignore($request->matricule )],
        //     'email'=>['required','email','unique:employees,email',Rule::unique('employees')->ignore($request->email )],

        // ]);
        if($request->file('img')) {
            $file = $request->file('img');
            $filename = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'products';

            // Upload file
            $file->move($location,$filename);

        $emp=Product::where('id',$id)->first();

        $emp->designation = $request->designation;
        $emp->type = $request->type;
        $emp->prix_achat = $request->prix_achat;
        $emp->prix_vente = $request->prix_vente;
        $emp->description=$request->description;
        $emp->qte=$request->qte;
        $emp->img = $location.'/'.$filename;
        $emp->date_expiration = $request->date_expiration;
        $emp->save();



        return redirect()->route('stock.ProductList')
        ->with('success','Produit mis-à-jour avec suucès');
    }
}


    function action(Request $request)
    {


        if($request->ajax())
        {
         $output = '';
         $query = $request->get('query');
         if($query != '')
         {
          $data = Product::where('designation', 'like', '%'.$query.'%')
            ->orWhere('type', 'like', '%'.$query.'%')
            ->orWhere('qte', 'like', '%'.$query.'%')
            ->orWhere('prix_achat', 'like', '%'.$query.'%')
            ->orWhere('prix_vente', 'like', '%'.$query.'%')
            ->orWhere('description', 'like', '%'.$query.'%')
            ->orWhere('date_expiration', 'like', '%'.$query.'%')
            ->orderBy('created_at', 'desc')
            ->get();

         }
         else
         {
          $data = DB::table('products')
            ->orderBy('created_at', 'desc')
            ->get();
         }
         $total_row = $data->count();
         if($total_row > 0)
         {
          foreach($data as $row)
          {
           $output .= '
           <tr>
           <td><img src="'.asset($row->img).'" class="img-fluid" style="max-width:80px" alt="avatar.png"></td>
            <td>'.$row->designation.'</td>
            <td>'.$row->type.'</td>
            <td>'.$row->qte.'</td>
            <td>'.$row->prix_achat.'</td>
            <td>'.$row->prix_vente.'</td>
            <td>'.$row->description.'</td>
            <td>'.$row->date_expiration.'</td>
            <td>
         <div class="btn-group" role="group" aria-label="Basic Example">
         <a href="'. route("stock.ProductEdit", $row->id) .'"
             class="btn btn-info btn-min-width box-shadow-3 mr-1 mb-1">
             <i class="la la-edit"></i> Modifier
         </a>
         <a href="'.route("stock.ProductDelete",$row->id).'"
             onclick="return confirm("Êtes-vous sûr de bien vouloir supprimer cet élément?");"
             class="btn btn-danger btn-min-width box-shadow-3 mr-1 mb-1">
             <i class="la la-trash"></i> Supprimer
         </a>

     </div></td>
           </tr>
           ';
          }
         }
         else
         {
          $output = '
          <tr>
           <td align="center" colspan="5">Aucun Produit Trouvé !</td>
          </tr>
          ';
         }
         $data = array(
          'table_data'  => $output,
          'total_data'  => $total_row
         );

         echo json_encode($data);
        }
    }
}
