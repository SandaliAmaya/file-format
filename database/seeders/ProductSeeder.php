<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Cheddar Cheese Block',
            'description' => 'Block Cheese, 250g',
            'ref_code' => '00230R',
            'unit_price' => '2000.00',
            'vendor_id' => 1,
            'brand_id' => 1,
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Cheddar Cheese Slices',
            'description' => 'Slices, 200g',
            'ref_code' => '01230S',
            'unit_price' => '1600.00',
            'vendor_id' => 1,
            'brand_id' => 1,
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Fanta',
            'description' => 'Carbonated Drink Orange Flavoured, 2l',
            'ref_code' => '03948W',
            'unit_price' => '420.00',
            'vendor_id' => 2,
            'brand_id' => 3,
            'stock' => 30,
        ]);

        Product::create([
            'name' => 'Kellogs Choco Pops',
            'description' => 'Chocolate Cereal, 200g',
            'ref_code' => '01230S',
            'unit_price' => '1200.00',
            'vendor_id' => 3,
            'brand_id' => 2,
            'stock' => 15,
        ]);

        Product::create([
            'name' => 'Cocacola',
            'description' => 'Carbonated Drink, 2l',
            'ref_code' => '03948H',
            'unit_price' => '420.00',
            'vendor_id' => 2,
            'brand_id' => 3,
            'stock' => 10,
        ]);

        Product::create([
            'name' => 'Pears Baby Soap',
            'description' => 'Soap, 350g',
            'ref_code' => '02348T',
            'unit_price' => '510.00',
            'vendor_id' => 4,
            'brand_id' => 5,
            'stock' => 5,
        ]);

        Product::create([
            'name' => 'Pears Cologne',
            'description' => 'Baby Fragrance, 100ml',
            'ref_code' => '12948T',
            'unit_price' => '400.00',
            'vendor_id' => 4,
            'brand_id' => 5,
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Apple Juice',
            'description' => 'Fruit Juice, 1l',
            'ref_code' => '12948T',
            'unit_price' => '800.00',
            'vendor_id' => 5,
            'brand_id' => 6,
            'stock' => 35,
        ]);

        Product::create([
            'name' => 'Chocolate Biscuit',
            'description' => 'Biscuit, 200g',
            'ref_code' => '12948T',
            'unit_price' => '400.00',
            'vendor_id' => 5,
            'brand_id' => 4,
            'stock' => 35,
        ]);

        Product::create([
            'name' => 'Milk Shortcake',
            'description' => 'Biscuit, 200g',
            'ref_code' => '12948T',
            'unit_price' => '230.00',
            'vendor_id' => 5,
            'brand_id' => 4,
            'stock' => 35,
        ]);
    }
}
