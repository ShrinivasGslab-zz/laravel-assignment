<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\ProductDetails;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/*$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});*/

$factory->define(Product::class, function (Faker $faker) {


    return [
        'name' => $faker->name,
        'description' => $faker->text(),
        //'status' => random_int(0,5),
        'status' => $faker->randomElement(['inprogress', 'completed', 'Available']),
        'sku' => random_int(100000,999999),
        //'is_deleted' => Str::random(2),
        'created_at' => now(),
        'updated_at' => now(),
        //'deleted_at' => now(),
    ];
});


$factory->define(ProductDetails::class, function (Faker $faker) {

    $products = Product::all()->pluck('id')->toArray();

    return [
    	'product_id' => $faker->randomElement($products),
        'stock' => random_int(50,100),
        //'size' => $faker->text(),
        //'type' => random_int(0,5),
        'size' => $faker->randomElement(['Small', 'Medium', 'Large']),
        'type' => $faker->randomElement(['Fiber', 'Glass', 'Plastic']),
        'created_at' => now(),
        'updated_at' => now(),
        //'deleted_at' => now(),
    ];
});
