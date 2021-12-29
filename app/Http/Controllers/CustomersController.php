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

    public function showAddCustomerForm(){
        return view('customer_add');
    }

    public function storeCustomer(Request $request){
        Customer::create(['name'=>$request->name,
                          'price'=>$request->price]);
        return redirect()->route('customers');
    }
}
