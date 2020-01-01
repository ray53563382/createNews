<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Nota;


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
}
