<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Nota;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class publicacionController extends Controller
{


    public function relevant()
    {
        
        $most_relevant = DB::table('notas')->where('importancia', 1)
                            ->get();
        return $most_relevant;

    }

    public function recent()
    {
        $most_recent = DB::table('notas')->where('importancia', '>=', 2)->orderBy('created_at', 'DESC')    
                            ->get();
        return $most_recent;
    }

    public function getdoc( Request $request)
    {
        $document = DB::table('notas')->where('id', $request->id )->get();
        return $document;
    }

    public function getsearch(Request $request){
        // split on 1+ whitespace & ignore empty (eg. trailing space)
        $searchValues = preg_split('/\s+/', $request->q_string, -1, PREG_SPLIT_NO_EMPTY); 

        $matches = DB::table('notas')->where(function ($q) use ($searchValues) {
        foreach ($searchValues as $value) {
            $q->orWhere('titulo', 'like', "%{$value}%");
        }
        })->get();

        return $matches;
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
            $documents = DB::table('notas')->orderBy("fecha", $request->type )->get();
            return $documents;
        }
        
    }

    public function cerrar()
    {
        Auth::logout();
        //return redirect('/login');
    }

}
