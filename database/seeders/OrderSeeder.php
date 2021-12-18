<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Customer;
use App\Models\Order;

use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = Customer::where('name','КОНСИБ')->first();
        Order::create([
            'date_start' =>  Carbon::create('2021', '12', '01'),
            'customer_id' => $customer->id,
            'number_customer' => '175',
            'invoice' => '2023',
            'note' => 'коммент',
        ]);
        $customer = Customer::where('name','ГИНЕС')->first();
        Order::create([
            'date_start' =>  Carbon::create('2021', '12', '3'),
            'customer_id' => $customer->id,
            'number_customer' => 'ИМЯ101',
            'invoice' => '2300',
            'note' => 'коммент Г1',
        ]);
        $customer = Customer::where('name','АВГУСТ')->first();
        Order::create([
            'date_start' =>  Carbon::create('2021', '12', '5'),
            'customer_id' => $customer->id,
            'number_customer' => '14523Н/123',
            'invoice' => '2500',
            'note' => 'коммент a1',
        ]);
        $customer = Customer::where('name','КОНСИБ')->first();
        Order::create([
            'date_start' =>  Carbon::create('2021', '12', '10'),
            'customer_id' => $customer->id,
            'number_customer' => '203',
            'invoice' => '3001',
            'note' => 'коммент K1',
        ]);
    }
}
