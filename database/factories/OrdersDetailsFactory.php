<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order_details;
use Faker\Generator as Faker;

$factory->define(Order_details::class, function (Faker $faker) {
    $orderId = App\Models\Orders::pluck('id')->toArray();
    $productId = App\Models\Products::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'price' => 100,
        'quantity' => 1,
        'total' => 1000000,
        'order_id'=>$faker->randomElement($orderId),
        'product_id'=>$faker->randomElement($productId),
      
    
    ];
});
