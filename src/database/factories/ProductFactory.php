<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use VCComponent\Laravel\Faker\Faker\VCCFaker;

$factory->define(Product::class, function (Faker $faker) {
    $faker->addProvider(new VCCFaker ($faker));
    return [
        'name'        => $faker->productName,
        'description' => $faker->sentences(rand(4, 7), true),
        'quantity'    => rand(0, 20),
        'code'        => $faker->swiftBicNumber,
        'price'       => rand(1000000, 9000000),
        'author_id'   => rand(1, 3),
        'thumbnail'   => $faker->productThumbnail,
        'sku'         => str::random(32),
    ];
});

$factory->state(Product::class, 'hot', function () {
    return [
        'is_hot' => Product::HOT,
    ];
});
