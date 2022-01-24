<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;

use App\Models\Work;
use App\Models\Material;
use App\Models\Foil;
use App\Models\Order;
use App\Models\Customer;

use App\Http\Requests\StoreWorkRequest;

class WorkController extends Controller
{
    public function index(){

        //
        
    } 

    public function create($order_id){

        $context = [
            'order_id' => $order_id,
            'materials' => Material::all(),
            'foils'=> Foil::all(),
        ];
        return view('work.create', $context);
    }

    public function store(StoreWorkRequest $request){
        Work::create([
            'order_id' => $request->order_id,
            'status' => 0,
            'material_id' => $request->material_id,
            'size_1' => $request->size_1,
            'size_2' => $request->size_2,
            'quantity' => $request->quantity,
            'foil_id' => $request->foil_id,
            'foil_view_id' => $request->foil_view_id,
            'note' => $request->note,
        ]);
        $order = Order::where('id', $request->order_id)->first();
        $customers = Customer::all();
        
        // $works = Work::where('order_id', $order_id)->get();
        // $context = ['order' => $order, 'works' => $works];
        $context = ['order' => $order, 'customers' => $customers];
        return view('order.show', $context);
    }

}
