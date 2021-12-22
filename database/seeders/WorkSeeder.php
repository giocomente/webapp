<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Work;
use App\Models\Order;
use App\Models\Material;
//use App\Models\Foil;
//use App\Models\Foil_View;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = Order::where('id', 2)->first();
        $material = Material::where('name', 'SW 32 мм')->first();
        Work::create([
            'order_id' => $order->id,
            'status' => 0,
            'material_id' => $material->id,
            'size_1' => 600,
            'size_2' => 800,
            'foil_id' => 1,
            'foil_view_id' => 2,
            'note' => 'Их',
        ]);
        $material = Material::where('name', 'SW 24 мм')->first();
        Work::create([
            'order_id' => $order->id,
            'status' => 0,
            'material_id' => $material->id,
            'size_1' => 450,
            'size_2' => 1100,
            'foil_id' => 4,
            'foil_view_id' => 4,
            'note' => 'Их',
        ]);
    }
}
