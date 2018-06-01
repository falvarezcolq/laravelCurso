<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name' => 'Cafe 200gr Coroico',
            'price' => '3.0',
        ]);

        Product::create([
            'name' => 'Matenquilla Regia',
            'price' => '8.0',
        ]);

        Product::create([
            'name' => 'pan',
            'price' => '0.3',
        ]);
    }
}
