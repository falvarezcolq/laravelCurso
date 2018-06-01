<?php

use App\Profession;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::create([
            'name'=>'Arquitecto',
            ]);

        Profession::create([
            'name'=>'Profesor',
        ]);
        
        Profession::create([
            'name'=>'Software Developer',
        ]);

        factory(Profession::class)->times(3)->create();
    }
}
