<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Foil;
use App\Models\Brand;

class FoilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = Brand::where('name', 'LG')->first();

        Foil::create([
            'brand_id' => $brand->id,
            'article' => 'UQ901',
            'name' => 'Коричневый дуб',
            'price' => 325,
        ]);

        Foil::create([
            'brand_id' => $brand->id,
            'article' => 'UK101',
            'name' => 'Золотой дуб',
            'price' => 325,
        ]);

        Foil::create([
            'brand_id' => $brand->id,
            'article' => 'G1501',
            'name' => 'Рустикальный дуб',
            'price' => 355,
        ]);

        $brand = Brand::where('name', 'RENOLIT')->first();

        Foil::create([
            'brand_id' => $brand->id,
            'article' => '920552089116700',
            'name' => 'Темный дуб',
            'price' => 494,
        ]);
    }
}
