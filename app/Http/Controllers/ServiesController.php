<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Categorie;

use Illuminate\Http\Request;

class ServiesController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('services.index',['services' => $services]);
       
    }
    public function create(){
        $categories = Categorie::all();

        return view('services.create',['chai' => $categories]);
    }
    public function save(Request $request){
        try{

            $data = $request->validate([
                'category_id' => ['required', 'numeric'],
                'title' => ['required','min:3'],
                'desc' => ['required','min:3'],
                'contact' => ['required', 'numeric'],
                'cost' => ['required', 'numeric'] 
            ]);

            // dd($data);
            $newService = Service::create($data);
    
           return redirect(route('services.index'));
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
}
