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
            'title' => 'Wamaz is a digital device',
            'price' => 18.36,
            'quantity' => 5,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'The proposed Wamaz is a digital device of low cost but is enriched with high-quality specifications and features. The Wamaz is the newest generation of digital computer device, which doubles up as a mobile phone. The proposed product is incorporated with social networking applications. These impressive features and the unbeatable price tag will make the Wamaz an appealing and stylish gadget that meets modern reality.'
        ]);
    }
}
