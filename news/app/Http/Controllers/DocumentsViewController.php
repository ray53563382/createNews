<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentsViewController extends Controller
{
    public function index($id){
        // $controller_id['id'] = $id;
        return view('pages.documentview')->with('id', $id);
    }

    public function search($querystring){
        // $queryString['querystring'] = $querystring;
        return view('pages.searchview')->with('querystring', $querystring);
    }

    public function searchbyauthor($querystring, $author){
        // $queryString['querystring'] = $querystring;
        return view('pages.searchview', ['querystring' => $querystring, 'author' => $author ]);
        // return view('pages.searchview')->with('querystring', $querystring   );
        // return view('pages.searchview')->with('author', $author);

    }
}
