<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoriesController extends Controller
{
    
    public function index(){
        $categories = Categorie::all();
        return view('services.index', ['name' => $categories]);
    }


}

