<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function index(){

        // $works = DB::table('works')->get();

        return view('works');
    }
}
