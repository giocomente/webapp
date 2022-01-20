<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Work;

Use \Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreOrderRequest;

class OrderController extends Controller
{
    public function index(){
        $context = ['orders' => Order::all()];
        return view ('order.index', $context);
    }

    public function create(){
        $context = ['customers' => Customer::all()];
        return view('order.create', $context);
    }

    public function store(StoreOrderRequest $request){
        
        $date_start = Carbon::now()->timezone('Europe/Samara');
        $order = Order::create([
            'date_start' =>  $date_start,
            'customer_id' => $request->customer_id, 
            'number_customer' => $request->number_customer,
            'invoice' => $request->invoice,
            'note' => $request->note,
        ]);
        // $works = Work::where('order_id', $order->id)->get();
        // $context = ['order' => $order, 'works' => $works];
        
        $context = ['order' => $order];
        return view('order.works', $context);
    }

    public function show($order_id){
        // $order = Order::where('id', $order_id)->first();
        // $works = Work::where('order_id', $order_id)->get();
        // $context = ['order' => $order, 'works' => $works];;
        // return view('orderWorks', $context);
    }
}
