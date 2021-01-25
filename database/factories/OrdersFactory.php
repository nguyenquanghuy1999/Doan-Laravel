<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Orders;
use Faker\Generator as Faker;

$factory->define(Orders::class, function (Faker $faker) {
    $user_ID = App\Models\Users::pluck('id')->toArray();
    $customer_ID = App\Models\Customers::pluck('id')->toArray();
    return [
        'customer_id'=> $faker->randomElement($customer_ID),
        'user_id' => $faker->randomElement($user_ID),
        'order_date' => $faker->date(),
        'address' => $faker->streetAddress,
        'total' => 1000000,
        'note' => "day la note",
        
    ];
});
