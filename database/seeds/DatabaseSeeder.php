<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->truncateTable([
            'professions',
            'users',
            'products',
            'sales',
        ]);


        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SaleSeeder::class);
    
    }

    public function truncateTable(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate(); 
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    } 
}
