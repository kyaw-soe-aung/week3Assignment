<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookShop;
use Faker\Generator as Faker;

$filepath = storage_path('app/public/images');
// if(!File::exists($filepath)){
//     File::makeDirectory($filepath);
// }

$factory->define(BookShop::class, function (Faker $faker) {
    return [
        'image' => $faker->image(storage_path('app/public/images'),150,200, null, false),
        'title' => $faker->sentence,
        'type' => $faker->sentence,
        'category' => $faker->sentence,
        'price' => $faker->randomDigit  
    ];
});
