<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customers;
use Faker\Generator as Faker;

$factory->define(Customers::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phonenumber' => $faker->phoneNumber,
        'address' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        
    ];
});
