<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentViewController extends Controller
{
    public function index($id){
        $data['id'] = $id;
        return view('layouts.app');
        
    }
}
