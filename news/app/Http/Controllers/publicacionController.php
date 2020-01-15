<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Nota;
use App\Document;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class publicacionController extends Controller
{


    public function relevant()
    {
        
        $most_relevant = DB::table('notas')->where('importancia', 1)
                            ->take(6)->get();
        return $most_relevant;

    }

    public function recent()
    {
        $most_recent = DB::table('notas')->where('importancia', '>=', 2)->orderBy('created_at', 'DESC')    
                            ->take(15)->get();
        return $most_recent;
    }


    public function recentdata()
    {
        $most_recent = DB::table('notas')->orderBy('created_at', 'DESC')->get();
        return $most_recent;
    }


    public function getdoc( Request $request)
    {
        $document = DB::table('notas')->where('id', $request->id )->get();
        return $document;
    }

    public function getsearch(Request $request){

        if($request->q_string == 'allDocuments'){
            $all_documents = DB::table('documents')->get();
            return $all_documents;
        }else{

            $searchValues = preg_split('/\s+/', $request->q_string, -1, PREG_SPLIT_NO_EMPTY); 
            $matches = DB::table('notas')->where(function ($q) use ($searchValues) {
            foreach ($searchValues as $value) {
                $q->orWhere('titulo', 'like', "%{$value}%")->orWhere('autor', 'like', "%{$value}%");
            }
            })->get();

            return $matches;

        }
    }

    public function getAllAuthors(){
        $authors = DB::table('notas')->pluck('autor');
        return $authors;
    }

    public function getAllFromAuthor(Request $request){
        $all_from_author = DB::table('notas')->where('autor', 'like', $request->author)->get();
        return $all_from_author;
    }
   
    public function allrecent(Request $request){
        if($request->type == "importancia"){
            $documents = DB::table('notas')->orderBy("importancia", "DESC" )->get();
            return $documents;
        }else{
            if($request->type != "default"){
                $documents = DB::table('notas')->orderBy("fecha", $request->type )->get();
                return $documents;
            }
            else{
                $documents = DB::table('notas')->orderBy("fecha", "DESC" )->get();
                return $documents;
            }
            
        }
        
    }

    public function getpdf(Request $request){
        $pdf = DB::table('documents')->where('id', $request->id)->get();
        return $pdf;
    }

    public function getheme(Request $request){
        $allthemes = DB::table('notas')->where('idcategoria', $request->idcategoria)->get();
        return $allthemes;
    }

    // public function fetchAllDocs(Request $request){

    //     if($request != null ||$request != undefined ){
    //         $fetch_all = DB::table('notas')->where($request->order, 'DESC')
    //          return $fetch_all;
    //     }

    //     $fetch_all = DB::table('notas')->get();
    //     return $fetch_all;
    // }

    public function cerrar()
    {
        Auth::logout();
        //return redirect('/login');
    }

    public function download(Request $request, $id)
    {
        $doc = Document::find($id);
        $doc->descarga = $request->descarga;
        $doc->save();
        return $doc;
    }

    public function popularPost(Request $request){
      //  $user = DB::table('notas')->where('importancia', 1);
        $notas = DB::table('notas')->where('importancia', 1)->get();
        return $notas;
    }

    public function popularPostMedium(Request $request){
          $notas = DB::table('notas')->where('importancia', 2)->get();
          return $notas;
      }

}
