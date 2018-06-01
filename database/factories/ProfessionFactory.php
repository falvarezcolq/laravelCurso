<?php

use Faker\Generator as Faker;

$factory->define(App\Profession::class, function (Faker $faker) {
    return [
       // 'name' =>str_random(10),
       'name' => $faker->sentence(1)
    ];
});
