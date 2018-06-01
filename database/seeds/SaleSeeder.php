<?php
use App\Sale;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
            'cantidad' => rand(1,10),
            'user_id' => rand(1,3),
            'product_id' => rand(1,3),
        ]);

        Sale::create([
            'cantidad' => rand(1,10),
            'user_id' => rand(1,3),
            'product_id' => rand(1,3),
        ]);
        Sale::create([
            'cantidad' => rand(1,10),
            'user_id' => rand(1,3),
            'product_id' => rand(1,3),
        ]);
        Sale::create([
            'cantidad' => rand(1,10),
            'user_id' => rand(1,3),
            'product_id' => rand(1,3),
        ]);

    }
}
