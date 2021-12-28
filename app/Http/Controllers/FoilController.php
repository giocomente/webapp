<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Foil;

class FoilController extends Controller
{
    public function index(){
        $context = ['foils' => Foil::all()];
        return view ('foils', $context);
    }
}
