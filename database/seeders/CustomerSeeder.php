<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Support\Facades\DB;

use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'КОНСИБ',
            'price' => 805,
        ]);

        Customer::create([
            'name' => 'АВГУСТ',
            'price' => 825,
        ]);

        Customer::create([
            'name' => 'СОЗИНА',
            'price' => 855,
        ]);

        Customer::create([
            'name' => 'ГИНЕС',
            'price' => 855,
        ]);
    }
}
