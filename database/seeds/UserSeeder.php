<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'juan el admin ',
            'last_name' => 'Perez Perez',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'is_admin' => true,
            'profession_id' => 1,
        ]);

        User::create([
            'name' => 'Roger',
            'last_name' => 'Quisbert Perez',
            'email' => 'Quisbert123@gmail.com',
            'password' => bcrypt('123456'),
            'profession_id' => rand(1,3),
        ]);
        User::create([
            'name' => 'Willy',
            'last_name' => 'jj Perez',
            'email' => 'Willy123@gmail.com',
            'password' => bcrypt('123456'),
            'profession_id' => rand(1,3),
        ]);

        factory(User::class,47)->create();
    }
}
