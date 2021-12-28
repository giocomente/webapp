<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomersController extends Controller
{
    public function index(){
        $context = ['customers' => Customer::all()];
        return view ('customers', $context);
    }
}
