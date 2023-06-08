<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\NecessaryDoc;
class DocumentController extends Controller
{


    public function autocomplete(Request $request)
    {
        $data = Document::select("name as value", "id")
                    ->where('name', 'LIKE', '%'. $request->get('search'). '%')
                    ->get();
            //  dd($data);
        return response()->json($data);
    }

    public function detail(Request $r){
        $data = Document::where('name', 'LIKE', '%'. $r->get('search'). '%')
                        ->with('necessary_docs')
                        ->get();
        return view('front.detail',compact('data'));
//  dd($data);
    }

    public function index()
    {

        $files = Document::with('necessary_docs')->get();
        // return $files;
        return view('Dashboard.document.index', compact('files'));
    }

    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
    {

        // dd ($request->fichier);
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'document' => 'required|mimes:pdf,doc,docx',
        ]);

        $file = new Document([
            'name' => $request->name,
            'number' => $request->number,
            'notes' => $request->notes ?  $request->notes : '' ,
        ]);
        // $file->save();
        $fileName = time().'.'.$request->document->extension();

        $request->document->move(public_path('uploads'), $fileName);
        // $fileDocument = $request->file('document');
        // $fileDocumentName = time() . '_' . $fileDocument->getClientOriginalName();
        // \Storage::disk('public')->putFileAs('files', $fileDocument, $fileDocumentName);
        $file->attachment = $fileName;

        // dd($file);
        $file->save();

        // return 1;
        if(isset($request->file_list)){

            foreach($request->file_list as $ng){

                $nf=new NecessaryDoc();
                $nf->document_id=$file->id;
                $nf->name=$ng;
                $nf->save();
            }
        }



        // return 1;
        return redirect('/admin/document')->with('success', 'File has been added');
    }

    public function show($id)
    {
        $file = File::find($id);
        return view('files.show', compact('file'));
    }

    public function edit($id)
    {
        $file = File::find($id);
        return view('files.edit', compact('file'));
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'document' => 'required|mimes:pdf,doc,docx',
        ]);

        $file = File::find($id);
        $file->name = $request->name;
        $file->number = $request->number;
        $file->notes = $request->notes ;
return $file->notes ;
        $$fileName = time().'.'.$request->document->extension();

        $request->document->move(public_path('uploads'), $fileName);
        // $fileDocument = $request->file('document');
        // $fileDocumentName = time() . '_' . $fileDocument->getClientOriginalName();
        // \Storage::disk('public')->putFileAs('files', $fileDocument, $fileDocumentName);
        $file->attachment = $fileName;

        $file->save();

        return redirect()->back()->with('success', 'File has been updated');
    }

    public function destroy($id)
    {
        NecessaryDoc::where('document_id',$id)->delete();
        $file = Document::find($id);
        // return $file;
        // Storage::disk('public')->delete('files/' . $file->document);
        if(\File::exists(public_path('uploads/'.$file->attachment))){
            \File::delete(public_path('uploads/'.$file->attachment));
            $file->delete();
            }else{
            dd('File does not exists.');
            }


        return redirect()->back()->with('success', 'File has been deleted');
    }
}
