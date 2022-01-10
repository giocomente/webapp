<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Foil;
use App\Models\Brand;

use App\Http\Requests\StoreFoilRequest;

class FoilController extends Controller
{
    public function index(){
        $context = ['foils' => Foil::all()];
        return view ('foil.foils', $context);
    }

    public function create(){
        $context = ['brands' => Brand::all()];
        return view('foil.create', $context);
    }

    public function store(StoreFoilRequest $request){
        // $context = [
        //     'brand_id' => $request->brand_id, 
        //     'foil_article' => $request->article, 
        //     'foil_name' => $request->name,
        //     'foil_price' => $request->price,
        // ];
        // return view('test', $context);
        Foil::create([
            'brand_id'=> $request->brand_id,
            'article' => $request->article, 
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('foils');
    }
}
