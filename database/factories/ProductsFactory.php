<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Products;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Products::class, function (Faker $faker) {
    $typeId = App\Models\Types::pluck('id')->toArray();
    
    return [
        'name' => $faker->name,
        'image' =>$faker->imageUrl(),
        'desc' => $faker->paragraph,
        'soluong' =>$faker->numberBetween(1,100),
        'price' => $faker->numberBetween(100000, 100000000),
        'type_id' => $faker -> randomElement($typeId),
       
        
    ];
});