<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Customer;

use App\Http\Requests\StoreOrderRequest;

class OrderController extends Controller
{
    public function index(){
        $context = ['orders' => Order::all()];
        return view ('order.orders', $context);
    }

    public function create(){
        $context = ['customers' => Customer::all()];
        return view('order.create', $context);
    }

    public function store(StoreOrderRequest $request){
        // $context = [
        //     'brand_id' => $request->brand_id, 
        //     'foil_article' => $request->article, 
        //     'foil_name' => $request->name,
        //     'foil_price' => $request->price,
        // ];
        // return view('test', $context);
        // Foil::create([
        //     'brand_id'=> $request->brand_id,
        //     'article' => $request->article, 
        //     'name' => $request->name,
        //     'price' => $request->price,
        // ]);
        return redirect()->route('orders');
    }
}
