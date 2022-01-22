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
        // Все заказы - сортировка сначала новые
        $context = ['orders' => Order::latest()->get()];
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
        // echo "Record NOT updated successfully.<br/>";
        $order = Order::where('id', $order_id)->first();
        $customers = Customer::all();
        $context = ['order' => $order, 'customers' => $customers];;
        return view('order.show', $context);
    }

    public function destroy($order_id)
    {
        // DELETE — идемпотентный метод, поэтому результат операции всегда один и тот же
        $order = Order::find($order_id);
        if ($order) {
        $order->delete();
        }
        return redirect()->route('orders');
    }

    public function edit(Request $request, $order_id) {

        // $name = $request->input('stud_name');
        // DB::update('update student set name = ? where id = ?',[$name,$id]);
        Order::where('id', $order_id)->update([
                'date_start' =>  $request->date_start,
                'customer_id' => $request->customer_id, 
                'number_customer' => $request->number_customer,
                'invoice' => $request->invoice,
                'note' => $request->note,
            ]);
        // echo "Record {{$order_id}} NOT updated successfully.<br/>";
        return redirect()->route('orders');
     }
}
