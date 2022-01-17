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
        $date_start = Carbon::now()->timezone('Europe/Samara');
        $order = Order::create([
            'date_start' =>  $date_start,
            'customer_id' => $request->customer_id, 
            'number_customer' => $request->number_customer,
            'invoice' => $request->invoice,
            'note' => $request->note,
        ]);
        $works = Work::where('order_id', $order->id)->get();
        // $works = $order->works();
        $context = ['order' => $order, 'works' => $works];
        return view('orderWorks', $context);
        //return redirect()->route('orders');
    }

    public function show($order_id){
        $order = Order::where('id', $order_id)->first();
        //$order = DB::table('orders')->where('id', $order_id)->first();
        //$works = Work::select('order_id', $order_id);
        //$works = Work::all();
        $works = Work::where('order_id', $order_id)->get();
        // $works = $order->works();
        $context = ['order' => $order, 'works' => $works];
        //$customer = $order->note;
        //return ($works[1]->size_1);
        return view('orderWorks', $context);
    }
}
