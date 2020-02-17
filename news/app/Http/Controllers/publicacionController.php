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
        
        $most_relevant = DB::table('notas')->where('relevante', 1)->take(6)->get();
        return $most_relevant;

    }

    public function masrelevante()
    {
        
        $most_relevante = DB::table('notas')->where('relevante', 2)->get();
        return $most_relevante;

    }

    public function recent()
    {
        $most_recent = DB::table('notas')->where('importancia', '>=', 2)->orderBy('created_at', 'DESC')    
                            ->take(15)->get();

        return $most_recent;

    }


    public function getNewsHome(){
        $news = DB::table('noticias')->orderBy('fecha', 'DESC')->take(4)->get();
        return $news;
    }

    public function recentdata()
    {
        $most_recent = Nota::orderBy('fecha', 'DESC')->paginate(12);
        return [
            'pagination' =>[
                'total'         => $most_recent->total(),
                'current_page'  => $most_recent->currentPage(),
                'per_page'      => $most_recent->perPage(),
                'last_page'     => $most_recent->lastPage(),
                'from'          => $most_recent->firstItem(),
                'to'            => $most_recent->lastPage()
            ],
            'notas'=> $most_recent
        ];
    }

    // public function allnews()
    // {
    //     $recent_news = DB::table('noticias')->orderBy('created_at', 'DESC')->get();
    //     return $recent_news;
    // }


    public function getdoc( Request $request)
    {
        $document = DB::table('notas')->where('id', $request->id )->get();
        return $document;
    }

    public function searchIn(Request $request){

        $searchValues = preg_split('/\s+/', $request->busqueda, -1, PREG_SPLIT_NO_EMPTY); 
        $busquedaNotas = Nota::where(function ($q) use ($searchValues) {
        foreach ($searchValues as $value) {
            $q->orWhere('titulo', 'like', "%{$value}%")->orWhere('autor', 'like', "%{$value}%")->orWhere('fecha', 'like', "%{$value}%" );
        }
        })->paginate(9);
 
        return [
            'pagination' =>[
                'total'         => $busquedaNotas->total(),
                'current_page'  => $busquedaNotas->currentPage(),
                'per_page'      => $busquedaNotas->perPage(),
                'last_page'     => $busquedaNotas->lastPage(),
                'from'          => $busquedaNotas->firstItem(),
                'to'            => $busquedaNotas->lastPage()
            ],
            'notas'=> $busquedaNotas
        ];
    }

    public function getsearch(Request $request){

         // $searchValues = preg_split('/\s+/', $request->q_string, -1, PREG_SPLIT_NO_EMPTY); 
        // $year = 'null';
        // $mes = 'null';
        // $dia = 'null';
        // // $yearMonthDay = ['yyyy', 'mm', 'dd'];
        // $meses = ["01"=> 'enero', "02" => 'febrero',"03" => 'marzo',"04" => 'abril',"05" => 'mayo',"06" => 'junio',"07" => 'julio',"08" => 'agosto',"09" => 'septiembre',"10" => 'octubre',"11" => 'noviembre',"12" => 'diciembre', ];

        // foreach ($searchValues as $value) {
        //     if(is_numeric($value)){
        //         if(strlen($value) == 4 ){
        //             $year = (string) $value;
        //         }else if(strlen($value) == 1 || strlen($value) == 2  ){
        //             if($value >= 1 && $value <= 31){
        //                 $dia= (string) $value;
        //             }
        //         }
        //     }else{
        //         $year = array_search($value, $meses);
        //             if(!empty($year)){
        //                 $mes = $year;
        //             }
        //         }
        // }

        // $fechaVariable = $year.'-'.$mes.'-'.$dia;
        // print_r($fechaVariable);

        // if ($year != "null" && $mes != "null" && $dia != "null") {
        //     print_r('fechaaaa');
        //     $porFecha = DB::table('notas')->where('fecha', 'like', $fechaVariable )->get();
        //     return $porFecha;

        // }else{
        //     if($request->q_string == 'allDocuments'){
        //         $all_documents = DB::table('documents')->get();
        //         return $all_documents;
        //     }else{
        //         // $searchValues = preg_split('/\s+/', $request->q_string, -1, PREG_SPLIT_NO_EMPTY); 
        //         $matches = DB::table('notas')->where(function ($q) use ($searchValues) {
        //         foreach ($searchValues as $value) {
        //             $q->orWhere('titulo', 'like', "%{$value}%")->orWhere('autor', 'like', "%{$value}%");
        //         }
        //         })->get();
        //         print_r('normal');
    
        //         return $matches;
    
        //     }
        // }

        if($request->q_string == 'allDocuments'){
            $all_documents = DB::table('documents')->get();
            return $all_documents;
        }else{

            $searchValues = preg_split('/\s+/', $request->q_string, -1, PREG_SPLIT_NO_EMPTY); 
            $matches = DB::table('notas')->where(function ($q) use ($searchValues) {
            foreach ($searchValues as $value) {
                $q->orWhere('titulo', 'like', "%{$value}%")->orWhere('autor', 'like', "%{$value}%")->orWhere('fecha', 'like', "%{$value}%" );
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


    public function colocarImportante(Request $request){
        $insert = Nota::find($request->id);
        $insert->relevante = 1;
        $insert->save();
        return $insert;
    }

    public function removerImportante(Request $request ){
        $insert = Nota::find($request->id);
        $insert->relevante = 0;
        $insert->save();
        return $insert;
    }

    public function colocarSuperImportante(Request $request){
        $insert = Nota::find($request->id);
        $insert->relevante = 2;
        $insert->save();
        return $insert;
    }

}
