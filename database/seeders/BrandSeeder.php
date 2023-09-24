<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'Kraft',
        ]);

        Brand::create([
            'name' => 'Kellogs',
        ]);

        Brand::create([
            'name' => 'Coca-Cola',
        ]);

        Brand::create([
            'name' => 'Munchee',
        ]);

        Brand::create([
            'name' => 'Pears',
        ]);

        Brand::create([
            'name' => 'Kist',
        ]);
    }
}
