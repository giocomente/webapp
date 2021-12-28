<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;

use App\Models\Work;
// use App\Models\Order;
// use App\Models\Foil;

class WorkController extends Controller
{
    public function index(){

        $context = ['works' => Work::all()];
        return view ('works', $context);
        
    } 
}
