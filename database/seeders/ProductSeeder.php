<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'Dell Inspiron 15',
            'price' => 15000.00,
        ]);

        Product::create([
            'name' => 'Mouse',
            'description' => 'Wireless Logitech Mouse',
            'price' => 350.00,
        ]);
        Product::create([
            'name' => 'Smartphone',
            'description' => '6.5 inch display, 128GB storage',
            'price' => 8000.00,
        ]);
        Product::create([
            'name' => 'Headphones',
            'description' => 'Noise-cancelling wireless headphones',
            'price' => 1200.00,
        ]);
    }
}
