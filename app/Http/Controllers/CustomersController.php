<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreCustomerRequest;

use App\Models\Customer;


class CustomersController extends Controller{

    public function index(){
        $context = ['customers' => Customer::all()];
        return view ('customer.customers', $context);
    }

    public function create(){
        return view('customer.create');
    }

    public function store(StoreCustomerRequest $request){

        //$validated = $request->validated();

        Customer::create([
            'name'=>$request->name,
            'price'=>$request->price
        ]);

        return redirect()->route('customers');
    }
}
