<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'name' => 'SW 10 мм',
            'add_size' => 0,
        ]);

        Material::create([
            'name' => 'SW 24 мм',
            'add_size' => 0,
        ]);

        Material::create([
            'name' => 'SW 32 мм',
            'add_size' => 0,
        ]);

        Material::create([
            'name' => 'SW 40 мм',
            'add_size' => 0,
        ]);

        Material::create([
            'name' => 'Лист металла',
            'add_size' => 0,
        ]);

        Material::create([
            'name' => 'Подоконник',
            'add_size' => 60,
        ]);
    }
}
