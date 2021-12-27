<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('product')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
        Product::create([
            'name' => Str::random(10),
            'price' => 299.99,
            'imageUrl' => 'https://via.placeholder.com/150',
            'category' => Str::random(10),
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nobis, repellendus veniam dolore atque veritatis in accusamus odio labore quis eaque reprehenderit ad necessitatibus perferendis porro explicabo ea similique debitis.",
        ]);
    }
}
