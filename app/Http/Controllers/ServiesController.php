<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiesController extends Controller
{
    public function index(){
        return view('services.index');
    }
    public function create(){
        return view('services.create');
    }
    public function save(Request $request){
      $data = $request->validate([
        'title'=> 'require',
        'cost'=> 'require',
        
      ]);
    }
}
