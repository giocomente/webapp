<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Foil;

use App\Http\Requests\StoreFoilRequest;

class FoilController extends Controller
{
    public function index(){
        $context = ['foils' => Foil::all()];
        return view ('foil.foils', $context);
    }

    public function create(){
        return view('foil.create');
    }

    public function store(StoreFoilRequest $request){


        return redirect()->route('foils');
    }
}
