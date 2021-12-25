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
        // $works = DB::table('works')->get();
        // $works = Work::all();
        // $s = "Работы:\r\n\r\n";
        // foreach ($works as $work){
        //     // $o =  $work->order;
        //     $s .= $work->order->customer->name .  "   " . 
        //         $work->order->number_customer .  "   " . 
        //         $work->order->invoice .  "   " . 
        //         $work->material->name . "   " .
        //         $work->size_1 . "   " .
        //         $work->size_2 . "   " .
        //         $work->quantity . "   " .
        //         $work->foil->name . "   " .
        //         $work->foil_view->name . "   " .
        //         $work->note . "   " .
        //         "\r\n";
        // }
        // return response($s)->header('Content-Type','text/plain');
        // return view('works');
    }
}
