<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'LG'
        ]);
        Brand::create([
            'name' => 'RENOLIT'
        ]);
        Brand::create([
            'name' => 'WINSHILD'
        ]);
    }
}
