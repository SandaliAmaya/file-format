<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::create([
            'name' => 'Vendor 1',
            'address' => 'No.12, Temple Road, Colombo 12'
        ]);

        Vendor::create([
            'name' => 'Vendor 2',
            'address' => 'No.23/A, Avenue Road, Colombo 06'
        ]);

        Vendor::create([
            'name' => 'Vendor 3',
            'address' => 'No.145, 2nd Lane, Galle'
        ]);

        Vendor::create([
            'name' => 'Vendor 4',
            'address' => 'No.5, Paradise Road, Kalutara'
        ]);

        Vendor::create([
            'name' => 'Vendor 5',
            'address' => 'No.54/1, Wijaya Mawatha, Colombo 11'
        ]);
    }
}
