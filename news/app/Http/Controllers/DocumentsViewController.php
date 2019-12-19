<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentsViewController extends Controller
{
    public function index($id){
        $controller_id['id'] = $id;
        return view('pages.documentview')->with('id', $id);
    }
}
